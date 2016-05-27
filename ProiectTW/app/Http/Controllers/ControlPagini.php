<?php

namespace App\Http\Controllers;

Class ControlPagini extends Controller { 


	public function getHomePage() {


		return view('Home');

	}

	public function getContacts() { 

		return "hello contact page";

	}

	public function getAbout() { 


	}

	public function getIndex() { 


	}

}