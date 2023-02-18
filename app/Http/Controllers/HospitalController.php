<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hospital::all();
        return view('admin.hospitals.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hospitals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'info' => 'nullable|string',
            'is_active' => 'in:on|string',
            'cover' => 'nullable|image|mimes:jpg,png'

        ]);
        $hospital = new Hospital();
        $hospital->name = $request->get('name');
        $hospital->location = $request->get('location');
        $hospital->info = $request->get('info');
        if ($request->has('cover')) {
            $hospital->cover = $request->file('cover')->store('uploads/hospitals');
        }
        $hospital->is_active = $request->has('is_active');
        $saved = $hospital->save();
        if ($saved) {
            return redirect()->back();
        }
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

        $item = Hospital::find($id);
        $deleted = $item->delete();
        if ($deleted) {
            return redirect()->back();
        } else {
            return 'error';
        }
    }
}
