<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserComment extends Controller
{

	public function Showuser()
	{

		return User::all();
		
	}

	public function Showbyoneuser($id)
	{

		$oneuser = User::find($id);

		return $oneuser;

	}

	public function deleteuser($id)
	{

		$Delete = User::find($id);

		 $Delete->delete($id);

		 return "User Delete Successfully";
	}
   public function updateuser($id)
   {
   	$update = User::find($id);
   	$update->name="New Millat";
   	$update->email="New@gmail.com/new";
   	$update->password="127166millat";
   	$update->save();
   	return "User Name , Emile , And Password update Successfully";
   }
   // Create A User ;

   public function Createuser()
   {

   	$data=[

   		'name'=>'Millat Hussain',
   		'email'=>'Millat@gmail.com',
   		'password'=>'Millat1241Hussain'


   	];

   	User::create($data);

   	return "Data Insertead Successfully Bro";



   
   }


}
