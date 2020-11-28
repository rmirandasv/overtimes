<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CostConfigRepository;
use App\Repositories\GlobalConfigRepository;
use App\Http\Requests\StoreCost;

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

    public function storeGlobal()
    {
        //
    }

}
