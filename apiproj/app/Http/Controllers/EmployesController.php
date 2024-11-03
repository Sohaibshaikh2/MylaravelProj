<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployesController extends Controller
{
    public function get()
    {
        return Employe::all();
    }

    public function Add(Request $req)
    {

        $rules = array(
            'name' => 'required|min:2|max:10',
            'age' => 'required',
            'email' => 'email|required'

        );

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {

            return $validator->errors();
        } else {

            $employe = new Employe();

            $employe->Employe_Name = $req->name;
            $employe->Employe_age = $req->age;
            $employe->Employe_Email = $req->email;

            if ($employe->save()) {
                return response()->json(['message' => 'Employe created successfully'], 200);
            } else {
                return response()->json(['message' => 'Failed to create employe'], 500);
            }
        }
    }


    public function update(Request $req)
    {

        $employes = Employe::find($req->id);
        $employes->Employe_Name = $req->name;
        $employes->Employe_age = $req->age;
        $employes->Employe_Email = $req->email;

        if ($employes->save()) {
            return ["result" => "Employe Updated"];
        } else {
            return ["result" => "Opration Failed"];
        }
    }

    public function delete($id)
    {
        $employes = Employe::destroy($id);

        if ($employes) {
            return ["result" => "Record Deleted"];
        } else {
            return ["result" => "opration failed"];
        }
    }
}
