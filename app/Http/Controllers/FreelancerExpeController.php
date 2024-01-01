<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;
use App\Models\FreelancerExpe;

use Route;

class FreelancerExpeController extends DevController
{
    protected $reg  = [
        'company'   => 'string|min:3',
        'position'  => 'string|min:3',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request, Freelancer $freelancer)
    {
        $this->beforeSave($request);

        if ($this->validator()->fails()) return $this->backErr();
        $this->data['freelancer_id']    =   $freelancer->id;
        $model = FreelancerExpe::create($this->data);

        return $this->afterSave($request, $model);
    }
    ///extend resource
    function beforeSave(Request $request)
    {
        $this->data = $request->input();
        if ($request->start) {
            $this->data['start'] = date('Y-m-d', strtotime($request->start));
        }
        if ($request->end) {
            $this->data['end'] = date('Y-m-d', strtotime($request->end));
        }
    }
    function afterSave(Request $request, FreelancerExpe $freelancerExpe)
    {
        return redirect()->back()->with('toastr', [
            'status' => 'success', 'message' => 'Record updated!'
        ]);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FreelancerExpe $expe)
    {

        $this->beforeSave($request);
        if ($this->validator()->fails()) return $this->backErr();

        $expe->update($this->data);
        return $this->afterSave($request, $expe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function destroy(FreelancerExpe $expe)
    {
        $expe->delete();
        return $this->back(['status' => 'success', 'message' => 'Record deleted!']);
    }
}
