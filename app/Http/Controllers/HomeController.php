<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home', [
            'packs'=>Pack::all()
        ]);
    }

    public function getPack(Request $request, Pack $pack)
    {

    }

    public function dashboard(Request $request)
    {
        if($request->user()->hasRole('entreprise')){
            return redirect('ent.dashboard');
        }elseif ($request->user()->hasRole('particular')){
            return redirect('part.dashboard');
        }elseif ($request->user()->hasRole('admin')){
            return redirect('admin.dashboard');
        }
        return redirect('login');
    }

    public function dashboardEntreprise(Request $request)
    {
        return view('ent.dashboard');
    }

    public function dashboardParticular()
    {
        return view('part.dashboard');
    }
}
