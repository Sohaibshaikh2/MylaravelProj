<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{


    public function getsubj()
    {
        $subj = DB::table('subjects')->get();

        return view('subjects.index', ['data' => $subj]);
    }


    public function Singleview(string $id)
    {
        $subj = DB::table('subjects')->find($id);

        return view('subjects.Update', ['data' => $subj]);
    }

    public function subupdt(Request $req, $id)
    {

        $subj = DB::table('subjects')->where('id', $id)->update([


            'SubName' => $req->name

        ]);

        if ($subj == true) {
            return redirect('/');
        } else {
            return 404;
        }
    }

    public function addview()
    {
        return view('subjects.insert');
    }

    public function addsubj(Request $req)
    {
        $subj = DB::table('subjects')->insert(
            [
                'SubName' => $req->name,
            ]

        );

        if ($subj == true) {
            return redirect('/');
        } else {
            return 404;
        }
    }

    public function subdlt(Request $req,$id){
        $subj=DB::table('subjects')->where('id',$id)->delete();

        if($subj==1){
            return redirect('/');
        }

    }
}
