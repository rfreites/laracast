<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    public function getUser(User $user)
    {
        return $user;
    }
}
