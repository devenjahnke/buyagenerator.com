<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;

class UserAccountController extends UserProfileController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function show(Request $request)
    {
        return Inertia::render('Partner/Account', [
            'sessions' => $this->sessions($request)->all(),
        ]);
    }
}
