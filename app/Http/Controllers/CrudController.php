<?php

namespace App\Http\Controllers;

use App\Crud;
use App\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  
     public function __construct(){
         $this->middleware('subscriber', ['only' => ['show']]);
         $this->middleware('editor', ['only' => ['edit']]);
         $this->middleware('admin', ['only' => ['destroy']]);
     }


    public function index()
    {
        

        $alldata = Crud::all();
        
        return view('home', compact('alldata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = new Crud;

        $data->title = request('title');
        $data->description = request('description');

        $data->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        


        $data = Crud::find($id);

        return view('crud.show', compact('data'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $data = Crud::find($id);
        return view('crud.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = Crud::find($id);

        $data->title = request('title');
        $data->description = request('description');

        $data->save();

        return view('crud.show', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $data = Crud::find($id);

        $data->delete();

        return redirect('/');
    }



    public function adminReturn(){

        $datas = User::all();

        return view('crud.admin', compact('datas'));
    
    }


    public function updateRole($id)
    {
        $data = User::find($id);

        $data->role = request('role');

        $data->save();

        return redirect('/admin');
    }
}
