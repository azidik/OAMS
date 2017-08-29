<?php

namespace App\Http\Controllers;

use App\Animal_Registration;
use App\User_Account;
use Illuminate\Http\Request;
use App\Http\Requests;

class animal_registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers = Animal_Registration::all()->sortBy('reg_animal_id');
        return view('animal_registration.index', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User_Account::all();
        return view('animal_registration.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ANimal_RegistrationRequest $request)
    {
        Animal_Registration::create($request->all());
        return redirect('animal_registration');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $register = Animal_Registration::find($id);
        $users = User_Account::all();
        return view('animal_registration.show', compact('register', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $register = Animal_Registration::find($id);
        $users = User_Account::all();
        return view('animal_registration.edit', compact('register', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Animal_RegistrationRequest $request, $id)
    {
        $register = Animal_Registration::find($id);
        $input = $request->all();
        $register->find($input)->save();
        return redirect('animal_registration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal_Registration::find($id)->delete();
        return redirect('animal_registration');
    }
}
