@push('css')
<link href="{{asset('theme/css/home.css')}}" rel="stylesheet">
<style>
  .ph {
    padding-top: 10rem;
  }
</style>
@endpush

@section('body')
<x-block id="sticky-wrapper" class="bg-white sticky-wrapper line-b">
  <x-layout.inc.header />
</x-block>

<x-block class="container ph">
  <div class="content-header text-xs-center">
    <h2>{{ __('Dịch vụ bạn cần tìm kiếm')}} ? </h2>
  </div>
  <div class="content-body">
    <x-form class="form" action="{{ route( 'user.requests.store',Auth::user() ) }}">
      <div class="offset-xs-2 col-md-8">
        <div class="card shadow">
          <div class="card-block">
            <div class="form-group mb-2">
              <label class="font-medium-2 text-bold-600 mb-1">{{ __("Mô tả dịch vụ bạn muốn tìm - vui lòng càng chi tiết càng tốt") }}</label>

              <div class="word-count">
                <textarea rows="4" name="description" required maxlength="2500" class="form-control shadow word"></textarea>
                <div class="pull-right"> <span class="count">0</span>/2500</div>
              </div>
              <x-button.attach name="attachfile" />
            </div>
            <div class="form-group mb-2">
              <livewire:category.req name="category_id" />

            </div>
            <div class="form-group">
              <label class="font-medium-2 text-bold-600">{{__('Thời gian bàn giao')}}</label>
              <div class="row">
                <label class="col-xs-3">
                  <input type="radio"   value="24_hours" name="delivery" />
                
                  {{__("24 giờ")}}
                </label>
                <label class="col-xs-3">
                  <input type="radio" value="3_days" name="delivery" />
                
                  {{__("3 ngày")}}
                </label>
                <label class="col-xs-3">
                <input type="radio" value="7_days" name="delivery" />
               
                  {{__("7 ngày")}}
                </label>
                <label class="col-xs-3">
                  <input type="number" class="form-control" name="delivery_day" />
               
                </label>

              </div>

            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-xs-4"><label class="font-medium-2 text-bold-600"> {{ __("Ngân sách cho dịch vụ") }} </label></div>
                <div class="col-xs-4">
                  <input type="number" required class="form-control" name="budget" />
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer ">
            <button class="pull-right btn btn-primary"> {{__('Gửi yêu cầu')}} </button>
          </div>
        </div>
      </div>
    </x-form>
  </div>


</x-block>





@endsection
@push('script')
<script>
  $(".word-count .word").keydown(function() {
    var len = $(this).val().length;
    $(this).parent().find('.count').html(len);
  });
</script>
@endpush
@section('footer')
<x-layout.inc.footer />
@endsection
@push('outer')
<x-layout.inc.outer />
@endpush
<x-layout.simple class="bg-white" />