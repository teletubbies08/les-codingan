<?php

namespace App\Http\Controllers;

use App\Portofolio;
use Illuminate\Http\Request;
use Storage;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('portofolio.index',compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portofolio.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portofolio = new Portofolio;

        $portofolio->title = $request->title;

        $filename = md5($request->image->getClientOriginalName() . time()) . '.' .
        $request->image->getClientOriginalExtension();
        $path = $request->image->storeAs('public/image',$filename);

        $portofolio->image = $path;
        $portofolio->caption = $request->caption;

        $portofolio->save();

        return redirect()->route('portofolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portofolio=Portofolio::find($id);
        return view ('portofolio.edit',\compact(['portofolio']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portofolio=Portofolio::find($id);
        $portofolio->title= $request->title;
        $portofolio->caption= $request->caption;

        if($request->hasFile('image')){
            $oldfile = $portofolio->image;
            \Storage::delete($oldfile);

            $filename = md5($request->image->getClientOriginalName() . time()) . '.' .
            $request->image->getClientOriginalExtension();

            $path = $request->image->storeAs('public/image', $filename);
            $portofolio->image= $path;
        }
        $portofolio->update();
        return redirect()->route('portofolio.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portofolio = Portofolio::find($id);
        $portofolio->delete();

        return redirect()->route('portofolio.index');
    }
}
