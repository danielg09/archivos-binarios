<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use Image;
use Illuminate\Support\Facades\Response;

class PicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $pictures = Picture::all();

        return view('pictures')->with('pictures',$pictures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createPicture');
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
         $img = Image::make($request->file('image')->getRealPath());
         Response::make($img->encode('jpeg'));

         $picture = new Picture();
         
         $picture->name = $request->name;

         $picture->data = $img;

         $picture->save();

         return redirect()->route('pictures');
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
       $picture = Picture::find($id);
       $response = Response::make($picture->data, 200);
       $response->header('Content-Type', 'image/jpeg');
       
       return $response;
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
