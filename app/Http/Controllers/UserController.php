<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    
    
    public function showLogin(){
        // show the form
        return view("user.login"); //goi den view login.blade.php
    }
    
    public function doLogin(){
        // process the form
        echo "test";
    }
    
    public function doLogout(){
        // process the form
    }
    
    
    public function showRegister(){
        return view("user.register");
    }
    
    public function doRegister(){
        return view("user.login"); 
    }
    
    
    
    
    
    public function getList(){
        $user = array('user1','user2','user3');
        return view('admin.user.list',['users'=>$user]);
    }
    
    public function getAdd(){
        return view('admin.user.add');
    }
    
    
    
    
    
    
    
    
   /*
    
	
	public function getLogin(){
		return view("user.login"); //goi den view login.blade.php
	}
	
	
	public function checkLogin(){
		
	}
	
	public function getRegister(){
		return view("user.register");
	}
	
	public function getRecoverPassword(){
		return view("user.recover-password");
	}
	
	
	
	
	/**
	public function getAdminLogin(){
		return view("admin.login");
	}
	
	public function postAdminLogin(){
		return redirect("menu/list/");
	}
	
	
	public function getAdminLogout(){
		//Delete seccion, cookie
		
		//logout and directer login page
		return view("admin.login");
	}



	//Users data screen
	public function getList(){
		$user = array('user1','user2','user3');
    	return view('admin.user.list',['users'=>$user]);
	}

	public function getAdd(){
    	return view('admin.user.add');
	}

	public function postEdit(){
    	return view('admin.user.edit');
	}

	*/



}
