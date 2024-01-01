<?php

namespace App\Http\Controllers;

use App\Models\PostRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class PostRequestController extends Controller
{
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
    public function store(User $user, Request $request)
    {
        $data = $request->input();
        $validator = Validator::make($request->all(), [
            'description'   => 'required',
            'category_id'   => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->delivery_day) {
            $data['delivery'] = $request->delivery_day;
            $data['delivery_unit'] = 'days';
        } else {
            $delivery = explode("_", $request->delivery);
            $data['delivery'] = $delivery[0];
            $data['delivery_unit'] = $delivery[1];
        }
        $data['auth_id']   =   $user->id;
        PostRequest::create($data);
        return redirect()->back()->with('toastr', [
            'status' => 'success', 'message' => __('Yêu cầu đã được gửi')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PostRequest $postRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PostRequest $postRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostRequest $postRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostRequest  $postRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostRequest $postRequest)
    {
        //
    }
}
