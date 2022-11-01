<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        $user = User::all();
        print_r($user->toJson());
        TestJob::dispatch($user->toArray());
    }
}
