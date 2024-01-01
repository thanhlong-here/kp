@props([
'product',
])

@php
$note_gallery = Block::pull('service_gallery','note')->first();

@endphp
<x-form class="form" action="{{ route('products.update',$product) }}" enctype="multipart/form-data" method="PUT">
    <input name="step" value="gallery" type="hidden" />
    <div id="gallery" class="card">
        <div class="card-header">
            <h2> {{__('Hình ảnh nổi bật')}} </h2>
        </div>
        <div class="card-block  form-group mb-2">
        <div class="help">
                {!!$note_gallery->tran->content!!}
            </div>
            @if(empty($product->avatar))
            <x-temp class="img-fluid" src="{{asset('theme/images/carousel/26.jpg')  }}" />
            @else

            <x-temp class="img-fluid" src="{{ asset($product->avatar->src) }}" />
            @endif
        </div>

        <div class="card-header ">
            <h2> {{__('Slide')}} </h2>
        </div>
        <div class="card-block form-group">
        <div class="help">
                    {!!$note_gallery->tran->content!!}     
            </div>
        
            @if($product->medias->count()>1)
            <div class="row">
                @php
                $index = 0;
                @endphp
                @foreach($product->medias as $media)
                @if($media->id != $product->avatar_id)
                @php
                $index++;
                @endphp
                <div class="col-md-4">
                    <img src="{{ asset($media->src) }}" data-toggle="modal" data-target="#modal-delete-{{$media->id}}" class="img-fluid shadow" />
                </div>
                @push('outer')

                <x-modal.delete :row="$media" action="medias.destroy" />
                @endpush('outer')
                @endif
                @endforeach
                @for($i = $index ; $i< 3 ;$i++) <div class="col-md-4">
                    <x-temp name="slide[]" class="img-fluid shadow" />
            </div>
            @endfor

        </div>
        @else
        <div class="row">
          

            <div class="col-md-4">
                <x-temp name="slide[]" class="img-fluid shadow" />
            </div>
            <div class="col-md-4">
                <x-temp name="slide[]" class="img-fluid shadow" />
            </div>
            <div class="col-md-4">
                <x-temp name="slide[]" class="img-fluid shadow" />
            </div>
        </div>

        @endif
        
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