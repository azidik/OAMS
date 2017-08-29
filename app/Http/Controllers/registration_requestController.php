<?php

namespace App\Http\Controllers;

use App\Notifications\UserRequest;
use App\Registration_Request;
use App\User_Account;
use App\Animal_Registration;
use Illuminate\Http\Request;
use App\Http\Requests;

class registration_requestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regrequests = Registration_Request::all()->sortBy('reg_requestDate');
        return view('registration_request.index', compact('regrequests'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reject($id)
    {
        Registration_Request::find($id)->delete();

        
    }

    public function approve(Request $request, Registration $registration_request)
    {
        $regrequests = Animal_Registration::create([
            'reg_animal_id' => $registration_request->reg_id,
            'reg_animal_name' => $registration_request->reg_animal_name,
            'reg_animal_species' => $registration_request->reg_animal_species,
            'reg_animal_breed' => $registration_request->reg_animal_breed,
            'reg_animal_age' => $registration_request->reg_animal_age,
            'reg_animal_gender' => $registration_request->reg_animal_gender,
            'reg_animal_color' => $registration_request->reg_animal_color,
            'reg_owner' => $registration_request->reg_owner
        ]);

        $registration_request->delete();

        return redirect('registration_request');
    }
}
