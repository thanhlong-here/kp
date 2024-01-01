<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Freelancer;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Classes\Search;
use Hash;

class ProfileController extends Controller
{
  
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelancer $freelancer)
    {
        $freelancer->update($request->input());
        return redirect()->back()->withInput();
    }

   
}
