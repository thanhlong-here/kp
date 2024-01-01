@props([
'product',
])
@php
    $note_title      = Block::pull('service_overview_title','note')->first();
    $note_categories = Block::pull('service_overview_categories','note')->first();
   
@endphp
@push('script')
<script>
    $(".word-count .word").keydown(function() {
        var len = $(this).val().length;
        $(this).parent().find('.count').html(len);
    });
</script>
@endpush
<x-form class="form" action="{{ route('products.update',$product) }}" enctype="multipart/form-data" method="PUT">
    <input name="step" value="overview" type="hidden" />
    <div id="overview" class="content-wrapper card">
        <div class="card-header">
            <h2> {{__('Tổng quát')}} </h2>
        </div>
        <div class="card-body">
            <div class="card-block">
                <div class="form-group">


                    <div class="help fixed">
                    {!! $note_title->tran->content !!}
                    </div>
                    <div class="word-count">
                        <textarea rows="4" name="name" maxlength="120" placeholder="{{__('Tôi sẽ')}} " class="form-control font-large-1 shadow word">{{ $product->name }}</textarea>
                        <div class="pull-right"> <span class="count">0</span>/120 </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="help fixed">
                        {!! $note_categories->tran->content !!} 
                    </div>
                    <livewire:category.service :product="$product" />
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