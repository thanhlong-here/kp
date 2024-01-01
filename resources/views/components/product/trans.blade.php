@props([
'product',
'lang' => 'en',
])
@php
$title = ($lang == 'en') ? 'Dịch tiếng Anh' : 'Dịch tiếng Hàn';

@endphp

<div class="modal-content">

    <x-form action="{{route('products.update',$product)}}" method="PUT" class="form">
        <input type="hidden" name="lang" value="{{$lang}}" />
        <input type="hidden" name="step" value="trans" />
        <div class="modal-header">
            <h4 class="pull-left">
                {{$title }}
            </h4>
            <div class="pull-right">
                <button type="submit" class="btn  btn-primary"> {{Theme::title('translate')}} </button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
               
                <div class=" row">
                    <div class="col-md-5">

                        <p class="font-large-1">
                            {{ $product->name }}
                        </p>
                    </div>
                    <div class="col-md-7">
                        <label class="text-bold-600 font-medium-3"> {{Theme::title('title')}} </label>
                   
                        <div class="word-count">
                        
                            <textarea rows="2" name="trans[name]"
                            maxlength="120" class="form-control font-medium-3 shadow word">{!! $product->propTrans('name',$lang,false) !!}</textarea>
                            <div class="pull-right"> <span class="count">0</span>/120 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-5 font-large-1">

                    {!! $product->content !!}
                </div>
                <div class="col-md-7">
                    <label class="text-bold-600 font-medium-3"> {{Theme::title('content')}} </label>
                    <x-editor name="trans[content]" mode="editor">{!! $product->propTrans('content',$lang,false) !!}</x-editor>
                </div>

            </div>
        </div>
    </x-form>


</div>