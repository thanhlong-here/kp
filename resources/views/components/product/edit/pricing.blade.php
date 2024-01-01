@props([
'product',
])

@push('script')
@once
<script>
    function opack(e) {
        $(e).closest('.card').children('.card-body').collapse('toggle');
    }
    $("#add_ext").click(function() {
        $("#ext_services").append(
            "<div class='shadow p-2 mb-1'>" +
            "<div class='form-group row mb-2'>" +
            "<div class='col-xs-7'><input type='text' name='ext_option[title][]' class='form-control' placeholder='{{__('title your extra service')}}' /></div>" +
            "<div class='col-xs-5'>" +
            "<div class='input-group'>" +
            "<input type='number' name='ext_option[price][]' class='form-control' placeholder='{{__('price')}}' />" +
            "<span class='input-group-addon'>đ</span>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "<div class='input-group mb-2'>" +
            "<input type='text' name='ext_option[description][]' class='form-control' placeholder='{{__('i will describe your offering')}}' />" +
            "<span onclick='$(this).parent().parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>" +
            "</div>" +
            "</div>"
        );
    });
</script>
@endonce
@endpush


<x-form class="form" action="{{ route('products.update',$product) }}" enctype="multipart/form-data" method="PUT">
    <input name="step" value="pricing" type="hidden" />
    <div id="pricing" class="content-wapper bg-white p-1 mb-2">
        <div class="content-header pt-1 pb-1">
            <h2> {{__('Định giá')}} </h2>
        </div>
        <div class="content-body">
            <div class="card shadow">
                <div id="price" class="card-header row">
                    <h2 class="card-title"> {{__('standard pack')}} :</h2>
                </div>
                <div class="card-body row">
                    <x-product.pack :product="$product" />

                </div>
            </div>

            @foreach( config('dev.packs') as $p)
            @php
            $item = $product->getPacks()->wherePack($p)->firstOrNew();
            $item->pack = $p;
            @endphp
            <div class="card shadow">
                <div id="price" class="card-header">
                    <h2 class="card-title"> {{__("$p price")}} : </h2>
                    <div class="heading-elements">
                        <input onclick="opack(this)" {{ empty($pack)?'':'checked' }} type="checkbox" name="extend[]" value="{{$p}}" />
                    </div>
                </div>
                <div class="card-body {{ empty($item->id)? '':'in' }} collapse">
                    <x-product.pack :product="$item" />
                </div>
            </div>
            @endforeach
            <div class="card">
                <div id="price" class="card-header row">
                    <h2 class="card-title"> {{__('Dịch vụ cộng thêm')}} :</h2>
                </div>
                <div class="card-block">


                    <div id="ext_services" class="row mb-2">
                        @foreach($product->ext_service as $option)
                        <div class='shadow p-2 mb-1'>
                            <div class='form-group row mb-2'>
                                <div class='col-xs-7'><input type='text' name='ext_option[title][]' value="{{$option->title}}" class='form-control' placeholder='{{__('Tiêu đề dịch vụ đi kèm')}}' /></div>
                                <div class='col-xs-5'>
                                    <div class='input-group'>
                                        <input type='number' name='ext_option[price][]' value="{{$option->price}}" class='form-control' placeholder='{{__('Giá')}}' />
                                        <span class='input-group-addon'>đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class='input-group mb-2'>
                                <input type='text' name='ext_option[description][]' value="{{$option->description}}" class='form-control' placeholder='{{__('Mô tả dịch vụ sẽ cung cấp')}}' />
                                <span onclick='$(this).parent().parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="form-group row  mb-2">
                        <button id="add_ext" type="button" class="btn btn-secondary pull-right">+{{__('Thêm dịch vụ đi kèm')}}</button>
                    </div>
                </div>
            </div>
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