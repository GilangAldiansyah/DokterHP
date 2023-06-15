<?php

namespace App\Http\Controllers;
//import model Handphone
use App\Models\Handphone;
use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class StatusPerbaikanController extends Controller
{
    public function index(): View
    {
        //get data Handphone
        $data_handphone = Handphone::latest()->paginate(5);

        //render view with data Handphone
        return view('statusperbaikan.index', compact('data_handphone'));
    }
}
