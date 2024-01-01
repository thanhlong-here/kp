@props([
'product',
])
@php

$note_description = Block::pull('service_description','note')->first();

@endphp
<x-form class="form" action="{{ route('products.update',$product) }}" enctype="multipart/form-data" method="PUT">
    <input name="step" value="description" type="hidden" />
    <div id="description" class="card">
        <div class="card-header">
            <h2> {{__('Mô tả')}} </h2>
        </div>
        <div class="card-block form-group shadow">
            <div class="help fixed">
                {!!$note_description->tran->content!!}.
            </div>
            <x-editor mode="editor">{!!$product->content!!}</x-editor>
        </div>
        <div class="card-footer">
            <div class="pull-right">
                <button id="btn_send" type="submit" class="btn btn-primary">
                    {{__('Lưu & tiếp tục')}}
                </button>

            </div>
        </div>
    </div>
</x-form>