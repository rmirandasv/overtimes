<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;

class UserController extends Controller
{

    private $userRepository;

    protected $roleRepository;

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        $users = $this->userRepository->all();

        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = $this->roleRepository->all();

        return view('users.create', ['roles' => $roles]);
    }

    public function store(StoreUser $request) 
    {
        $data = $request->validated();

        $user = $this->userRepository->add($data);

        if (!$user) {
            return redirect()->route('users.create')->with('error_message', __('messages.errors.cannotCreateUser'));
        }

        return redirect()->route('users.index')->with('success', __('ui.messages.users.create.success'));

    }

    public function disable(Request $request)
    {
        $this->userRepository->disableUserById($request->userId);

        return redirect()->route('users.index')->with('disabled', __('ui.messages.users.disabled'));
    }

    public function enable(Request $request) 
    {
        $this->userRepository->enableUserById($request->userId);

        return redirect()->route('users.index')->with('enabled', __('ui.messages.users.enabled'));
    }

    public function unlock(Request $request)
    {
        $unlocked = $this->userRepository->unlockUserById($request->userId);

        return \redirect()->route('users.index')->with('unlocked', __('ui.messages.users.unlocked'));
    }

    public function edit(Request $request) 
    {
        $user = $this->userRepository->get($request->userId);
        $roles = $this->roleRepository->all();

        return view('users.edit', ['user' => $user, 'roles' => $roles]);
    }

    public function update(UpdateUser $request)
    {
        $user = $this->userRepository->update($request->userId, $request->validated());

        if (isset($user)) {
            return redirect()->route('users.index')->with('updated', __('ui.messages.users.updated'));
        }

        abort(500);
    }

    public function showDelete(Request $request)
    {
        $user = $this->userRepository->get($request->userId);

        return view('users.delete', ['user' => $user]);
    }

    public function delete(Request $request)
    {
        $deleted = $this->userRepository->delete($request->userId);

        if (isset($deleted)) {
            return redirect()->route('users.index')->with('deleted', __('ui.messages.users.deleted'));
        }

        abort(500);
    }

}
