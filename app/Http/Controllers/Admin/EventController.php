<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{

    public function backend_ajax($action, Request $request){

        switch($action){

            case 'submit-event':
                $this->add_event($request);
                break;

        }

    }

    public function add_event($request){

        

    }

}

