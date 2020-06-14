<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Traits\Permission;
use App\User;
use Illuminate\Http\Request;
use App\Traits\MorphDeleting;


class UserController extends Controller
{
    use Permission;
    use MorphDeleting;

    public function index()
    {
        $this->checkAccess('index', User::class);

        $users = User::paginate(10);
        $targetType = 'User';

        return view('layouts.user_list', compact('users'),compact('targetType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->checkAccess('create', User::class);

        return view('layouts.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->phone = $request->get('phone');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $user->position = $request->get('position');
        $user->about = $request->get('about');
        $user->save();

        return redirect(route('user_list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $this->checkAccess('edit', User::class);
        $user = User::findOrFail($id);

        return view('layouts.user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->checkAccess('update', User::class);
        $user = User::findOrFail($id);
        $user->phone = $request->get('phone');
        $user->name = $request->get('name');
        $user->position = $request->get('position');
        $user->about = $request->get('about');
        $user->save();

        return redirect(route('user_list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $this->checkAccess('destroy', User::class);
//        User::destroy($id);
        $this->deleteMorph(User::class, $id);

        return redirect(route('user_list'));
    }
}
