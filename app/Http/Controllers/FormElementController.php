<?php

namespace App\Http\Controllers;

use App\Models\FormElement;
use Illuminate\Http\Request;
use App\Models\Form;

class FormElementController extends Controller
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
    public function store(Request $request, Form $form)
    {
        $type   =   $request->question_type;

        $options = array();
        if ($type =='multi') {
            $options['is_multi'] = $request->is_multi;
            $options['data']     = $request->multi_op; 
        }

        $formElement = FormElement::create([
            'name' => $request->name,
            'type'     => $request->question_type,
            'options'  => $options,
            'form_id'  => $form->id, 
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormElement  $formElement
     * @return \Illuminate\Http\Response
     */
    public function show($formElement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormElement  $formElement
     * @return \Illuminate\Http\Response
     */
    public function edit(FormElement $formElement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormElement  $formElement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $formElement)
    {
        $formElement = FormElement::find($formElement);
        $type   =   $request->question_type;
       
        if ($type =='multi') {
            $options['is_multi'] = $request->is_multi;
            $options['data']     = $request->multi_op; 
        }else{
            $options = array();
        }
        
        $formElement->update([
            'name' => $request->name,
            'type'     => $request->question_type,
            'options'  => $options,
        ]);
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormElement  $formElement
     * @return \Illuminate\Http\Response
     */
    public function destroy( $formElement)
    {
        FormElement::find($formElement)->delete();
        return redirect()->back();
    }
}
