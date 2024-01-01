<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;



class MediaController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
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
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Media  $Media
   * @return \Illuminate\Http\Response
   */
  public function show(Media $media)
  {
    //if ($media->isAccess()) return response($media->content)->header('Content-type', 'image/png');
  }

  public function web(Media $media)
  {
    if ($media->isAccess()) return response($media->content)->header('Content-type', 'image/png');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Media  $Media
   * @return \Illuminate\Http\Response
   */
  public function edit(Media $Media)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Media  $Media
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Media $Media)
  {
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Media  $Media
   * @return \Illuminate\Http\Response
   */
  public function destroy(Media $Media)
  {
    $Media->delete();
    return redirect()->back()->with('toastr', [
      'status' => 'success', 'message' => 'Record deleted!'
    ]);
  }
}
