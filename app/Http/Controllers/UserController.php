<?php

namespace App\Http\Controllers;

use App\Data\Repositories\UserRepository;
use App\DataTables\UserDatatable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }
public function registration(){
        return view('users.registration');
}

    public function index(UserDatatable $datatable)
    {
        return $datatable->render('users.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = $this->users->store($data);
        return redirect()->route('auth.login');
    }

    /**
     * Display the specified Zone.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->users->find($id);

        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = $this->users->find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = $this->users->update($id, $data);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
