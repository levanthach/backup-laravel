<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetUrlController extends Controller
{
    function index($name_page){
    	return view('baas.layout.index');
    }

    function hop_tac($name_page){
    	return view('baas.page.cooperate');
    }

    function video($name_page){
    	return view('baas.page.video');
    } 

    function backup($name_page){
    	return view('baas.page.baas_sv');
    }
}
