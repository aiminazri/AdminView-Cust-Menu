<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cust;
class CustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custs = Cust::all()->toArray();
        return view('cust.index',compact('custs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cust.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'  => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'phoneno' => 'required'
        ]);
        $cust = new Cust([
            'name'  => $request->get('name'),
            'address' => $request->get('address'),
            'postcode' => $request->get('postcode'),
            'phoneno' => $request->get('phoneno'),
        ]);
        $cust->save();
        return redirect()->route('cust.create')->with('success','Data Added');
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
        $custs = Cust::find($id);
        $custs->delete();
        return redirect()->route('cust.index');
    }
}
