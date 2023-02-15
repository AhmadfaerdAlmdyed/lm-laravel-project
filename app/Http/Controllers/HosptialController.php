<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HosptialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // DB Builder
        // $data = DB::table('hospitals')->get();
        // foreach($data as $hospital){
        //     echo "<pre>";
        //     var_dump($hospital);
        //     echo "</pre>";
        // }
         ///////// Model
         $data = Hospital::get();
          foreach($data as $hospital){
            echo "<pre>";
            var_dump($hospital);
            echo "</pre>";
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return form for register hospital
        // query builder
    //    $satuts = DB::table('hospitals')->insert([
    //         'name'=> 'yhaya2',
    //         'location' => 'gaza',
    //         'is_active' => true,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    //     return  $satuts  ? 'created Succefully' : 'Eroorrrrrrrrr';
        // Elqouent :
        // $hospital = new Hospital();
        // $hospital->name = "ali";
        // $hospital->location ="rafah";
        // $hospital->is_active = true;
        // $hospital->save();
        // return "success";
        // $name = "aaa"
        // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store hospitla
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show single elemet
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
}
