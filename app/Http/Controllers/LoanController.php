<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClientDetail;

class LoanController extends Controller
{
    //



    public function applyforloan(Request $request, $id){
        
        return view('applyforloan', compact('id'));

    }

    
    public function loanprofile(Request $request, $id){

        $client = ClientDetail::find(decrypt($id));
        
        return view('loanprofile', compact('client'));
    }

    
    public function loanhistory(Request $request, $id){

        return view('loanhistory', compact('id'));
        
    }

    
    public function settlebalance(Request $request, $id){

        return view('settlebalance', compact('id'));
        
        
    }
}
