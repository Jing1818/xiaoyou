<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserbbsResourece;
use App\Models\Userbb;
use Illuminate\Http\Request;

class UserbbsController extends Controller
{
    //
    public function show(Userbb $userbb,Request $request)
    {
        return new UserbbsResourece($userbb);
    }
}
