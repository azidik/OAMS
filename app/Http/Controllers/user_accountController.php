<?php
namespace App\Http\Controllers;

use App\User_Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

//use App\User_Account;
//use App\Http\Requests\User_AccountRequest;


class user_accountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User_Account::all()->sortBy('user_id');
        return view('user_account.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        return view('user_account.create');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User_AccountRequest $request)
    {
        User_Account::create($request->all());
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User_Account::find($id);
        return view('user_account.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        $users = User_Account::find($id);
        return view('user_account.edit', compact('users'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        $users = User_Account::find($id);
        $input = $request->all();
        $users->fill($input)->save();

        return redirect('users');
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User_Account::find($id)->delete();
        return redirect('users');
    }
}
