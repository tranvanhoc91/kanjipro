<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;

class PagesController extends Controller{
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



    public function getGridCardByRadical(){
        return view('page.radical');
    }


	public function getGridCardByOnyomil(){
        return view('page.onyomi');
    }


	public function getGridCardByKakusu(){
        return view('page.kakusu');
    }

	public function getGridCardByJlpt(){
        return view('page.jlpt');
    }

	public function getGridCardByKanken(){
        return view('page.kanken');
    }


	public function getGridCardByTopic(){
        return view('page.topic');
    }


	public function getGridCardBySchool(){
        return view('page.school');
    }


	public function getGridCardByBookmark(){
        return view('page.bookmark');
    }


	public function getGridCardByTag(){
        return view('page.tag');
    }   
}
