@props([
'freelancer',
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
<div style="padding-top: 8rem;" class="container form-body">
  <div class="container fixed">
    <div class="col-xs-2 ">
      <ul class="nav nav-bar text-xs-right mr-2">
        <li class="nav-item mb-1">
          <a class="nav-link">
            {{__('Tổng quan')}} <span class="btn btn-primary btn-sm ml-1"> 1 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            {{__('Định giá')}} <span class="btn btn-secondary btn-sm ml-1"> 2 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            {{__('Giới thiệu')}} <span class="btn btn-secondary btn-sm ml-1"> 3 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            {{__('Yêu cầu')}} <span class="btn btn-secondary btn-sm ml-1"> 4 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            {{__('Gallery')}} <span class="btn btn-secondary btn-sm ml-1"> 5 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            {{__('Xuất bản')}} <span class="btn btn-secondary btn-sm ml-1"> 6 </span> </a>
        </li>
      </ul>

    </div>
  </div>


  <div class="offset-xs-2 col-xs-6 ">
    <x-form class="form" action="{{ route('freelancers.products.store',$freelancer) }}">


      <div id="overview" class="content-wrapper card">
        <div class="card-header">
          <h2> {{__('Tổng quát')}} </h2>
        </div>
        <div class="card-body">
          <div class="card-block">
            <div class="form-group">
              <label>{{__('Tiêu đề')}}</label>


              <div class="help fixed">
              {!! $note_title->tran->content !!}</div>
              <div class="word-count">
                <textarea rows="4" name="name" maxlength="120" placeholder="{{__('Tôi sẽ thực hiện')}} " class="form-control font-large-1 shadow word"></textarea>
                <div class="pull-right"> <span class="count">0</span>/120 </div>
              </div>


            </div>
            <div class="form-group">
            <div class="help fixed">
            {!! $note_categories->tran->content !!} 
                        </div>
            
              <livewire:category.service />
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
  </div>
</div>

<div style="top:0" class="fixed block ">
  <div class="row bg-white line-b p-1">
    <div class="col-md-6">
      <h2 class="content-title">
        {{__('Tạo dịch vụ')}}
      </h2>
    </div>
    <div class="col-md-6">
      <div class="pull-right">

        <button type="button" class="btn btn-info" onclick="parent.location.reload();">
          <span aria-hidden="true"> X </span>
        </button>
      </div>
    </div>
  </div>
</div>