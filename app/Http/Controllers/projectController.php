<?php
/**
 * Created by PhpStorm.
 * User: moses
 * Date: 1/6/16
 * Time: 2:54 PM
 */
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class projectController extends Controller{
    public function returnView()
    {
        return view('user.register');
    }
}