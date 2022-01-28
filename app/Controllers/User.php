<?php

namespace App\Controllers;

class User extends BaseController
{
    public function liste()
    {
        return view('users/userListe');
    }
}
