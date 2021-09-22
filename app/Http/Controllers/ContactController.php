<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\support\facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class ContactController extends Controller
{
    public function index(){

            return view('home.index');

    }


    function contactStore(Request $req){
        $req->validate([
            'name' =>'required',
            'email' =>'required',
            'contact' =>'required',
            'accept' =>'required',
        ]);


        $c = new contact();
        $c->name = $req->name;
        $c->email = $req->email;
        $c->contact = $req->contact;
        $c->accept = $req->accept;
        $c->save();
        // Alert::toast('Contact Successfully !', 'success');
        alert()->success('SuccessAlert','Contact successfully.');
        return redirect()->back();

    }

    public function contactView(){

        $data['contacts']=contact::all();
        return view('home.table',$data);
    }

    public function destroyContact(Request $req, $id) {
        contact::find($id)->delete();
        // alert()->success('SuccessAlert','Contact delete successfully.');
        Alert::toast('Contact Successfully Deleted!', 'success');

        return redirect()->back();
     }
}
