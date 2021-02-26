<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCreate extends Controller
{
	public function Userlist()
	{

		return "This Call From Post Method";
	    
	}
    public function CreateUser()
    {
    	return view('inputfild');
    }
    public function Update()
    {
    	return "This is a PUT Method" ;
    }
}
