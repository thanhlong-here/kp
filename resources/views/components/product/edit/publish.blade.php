@props([
'product',
])

@php
$note_publish = Block::pull('service_publish','note')->first();

@endphp

<x-form class="form" action="{{ route('products.update',$product) }}" enctype="multipart/form-data" method="PUT">
    <input name="step" value="publish" type="hidden" />
    <div id="overview" class="content-wrapper card">
        <div class="card-header">
            <h2> {{__('Xuất bản')}}
                <h2>
        </div>
        <div class="card-body">


            <div class="card-block">
                <label> {{__("Điều khoản hoàn tiền và đền bù")}} </label>
                        <div class="form-group">
                            <textarea rows="10" class="form-control font-medium-2">{{strip_tags($note_publish->tran->content)}}</textarea>
                        </div>
            </div>
        </div>
        <div class="card-footer">

            <div class="pull-right">
                <button name="publish" value="save" type="submit" class="btn btn-primary">
                    {{__('Hoàn thành')}}
                </button>

            </div>
        </div>
    </div>

</x-form>