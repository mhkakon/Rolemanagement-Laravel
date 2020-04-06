<?php

namespace App\Http\Controllers;

use App\Reunion;
use App\User;
use Illuminate\Http\Request;

class ReunionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Reunion::all();

        return view('reunion.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('reunion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Reunion;

        $data->title = request('title');
        $data->description = request('description');
        $postOwner = auth()->user()->name;
        $data->postOwner = $postOwner;

        
        

        $data->save();

        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Reunion::find($id);

        return view('reunion.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = Reunion::find($id);

        if($data->id == auth()->user()->id){

            
            return view('reunion.edit', compact('data'));


        }
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = Reunion::find($id);

        $data->title = request('title');
        $data->description = request('description');

        $data->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reunion  $reunion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Reunion::find($id);

        $data->delete();


        return redirect('/');
    }


    public function test(){
        
        $username = auth()->user()->name;
        return "$username";
            
    }
}
