<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CostConfigRepository;
use App\Repositories\GlobalConfigRepository;
use App\Http\Requests\StoreCost;
use App\Http\Requests\StoreGlobalConfig;

class ConfigController extends Controller
{

    protected $costConfigRepo;

    protected $globalconfigRepo;

    public function __construct(CostConfigRepository $costConfigRepo, GlobalConfigRepository $globalConfigRepo)
    {
        $this->costConfigRepo = $costConfigRepo;
        $this->globalconfigRepo = $globalConfigRepo;
    }

    public function indexGlobal() 
    {
        $config = $this->globalconfigRepo->all();

        return view('config.index', ['config' => $config]);
    }

    public function costs()
    {
        $config = $this->costConfigRepo->all();

        return view('config.costs', ['config' => $config]);
    }

    public function createCost()
    {
        return view('config.create-cost');
    }

    public function storeCost(StoreCost $request)
    {
        $cost = $this->costConfigRepo->create($request->validated());

        if (isset($cost)){
            return redirect()->route('config.costs')->with('created', __('ui.messages.config.costs.created'));
        }

        abort(500);
    }

    public function storeGlobal(StoreGlobalconfig $request)
    {
        $updated = $this->globalconfigRepo->updateGlobalConfig($request->validated());

        if ($updated) {
            return redirect()->route('config.global')->with('updated', __('ui.messages.config.global.updated'));
        }

        return back();
    }

    public function deleteCost(Request $request)
    {
        $deleted = $this->costConfigRepo->deleteCost($request->cost_id);

        if ($deleted) {
            return redirect()->route('config.costs')->with('deleted' , __('ui.messages.config.costs.deleted'));
        }

        return back();
    }

}
