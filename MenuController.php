<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all()->toArray();
        return view('menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
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
            'price' => 'required',
            'quantity' => 'required'
        ]);
        $menu = new Menu([
            'name'  => $request->get('name'),
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity')
        ]);
        $menu->save();
        return redirect()->route('menu.index')->with('success','Data Added');

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
        $menus = Menu::find($id);
        return view('menu.edit',compact('menu','id'));
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
        $this->validate($request,[
            'name'  => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);
        $menu = Student::find($id);
        $menu->name = $request->get('name');
        $menu->price = $request->get('price');
        $menu->quantity = $request->get('quantity');
        $menu->save();
        return redirect()->route('menu.index')->with('success','Data Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menus = Menu::find($id);
        $menus->delete();
        return redirect()->route('menu.index');
    }

}
