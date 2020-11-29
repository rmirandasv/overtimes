<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\OvertimeRepository;
use App\Repositories\UserRepository;
use App\Http\Requests\StoreOvertime;

class OvertimeController extends Controller
{

    protected $overtimeRepository;

    protected $userRepository;

    public function __construct(OvertimeRepository $overtimeRepository, UserRepository $userRepository)
    {
        $this->overtimeRepository = $overtimeRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $overtimes = $this->overtimeRepository->all();

        return view('overtimes.index', ['overtimes' => $overtimes]);
    }

    public function create()
    {
        $employees = $this->userRepository->getAllEmployees();
        return view('overtimes.create', ['employees' => $employees]);
    }

    public function store(StoreOvertime $request)
    {
        $overtime = $this->overtimeRepository->register($request->validated());

        if (isset($overtime)){
            return redirect()->route('overtimes.index')->with('created', __('ui.messages.overtimes.created'));
        }

        abort(500);
    }

}
