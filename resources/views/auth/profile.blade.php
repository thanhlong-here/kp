@php
$url_service_create = route('freelancers.products.create',$freelancer);

@endphp
@push('script')
<script>
  $('.pickadate').pickadate();
</script>

@endpush
@push('outer')
<x-modal id="modal-src" class="modal-xl h-100 mt-0"></x-modal>

<x-modal id="modal-description">
  <div class="modal-content">
    <x-profile.intro :freelancer="$freelancer" />
  </div>
</x-modal>

<x-modal id="modal-edu-add">
  <div class="modal-content">
    <x-profile.edu.add :freelancer="$freelancer" />
  </div>
</x-modal>
<x-modal id="modal-exp-add">
  <div class="modal-content">
    <x-profile.exp.add :freelancer="$freelancer" />
  </div>
</x-modal>
<x-modal id="modal-cer-add">
  <div class="modal-content">
    <x-profile.cer.add :freelancer="$freelancer" />
  </div>
</x-modal>
@endpush

@section('side')
<div class="card">
  <div class="card-block  text-xs-center box">
    <div class="media profil-cover-details">
      <x-avatar :item="$freelancer" />

    </div>
    <div class="block text-xs-center">
      <div class="p-1">
        {{ $freelancer->job }}
      </div>
      <a class=" btn btn-info btn-block " href="{{url($freelancer->link->pretty)}}">
        <i class="fa fa-eye"></i>
        <span class="text-bold-600 "> {{__('Xem ở chế độ public')}} </span>
      </a>
    </div>

  </div>
</div>

<div class="card  box">
  <div class="card-header">
    <h4 class="card-title">
      {{__('Mô tả')}}
    </h4>
    <div class="heading-elements">
      <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modal-description"> {{__('Chỉnh sửa')}} </button>
    </div>
  </div>
  <div class="card-body ">
    @if($freelancer->intro)

    <div class="card-block">
      {!! $freelancer->intro !!}
    </div>

    @endif
  </div>
</div>

<div class="card  box">
  <div class="card-header">
    <h4 class="card-title">
      {{ __('Giáo dục') }}
    </h4>
    <div class="heading-elements">
      <button type="button" class="btn btn-sm" data-target="#modal-edu-add" data-toggle="modal"> {{__('Thêm')}} </button>
    </div>
  </div>
  <div class="card-body ">

    <div class="card-block">
      <x-profile.edu :educations="$freelancer->educations" />
    </div>
  </div>
</div>
<div class="card  box">
  <div class="card-header">
    <h4 class="card-title">
      {{__('Chứng nhận')}}
    </h4>
    <div class="heading-elements">
      <button type="button" class="btn btn-sm" data-target="#modal-cer-add" data-toggle="modal"> {{__('Thêm')}} </button>
    </div>
  </div>
  <div class="card-body ">
    <div class="card-block">
      <x-profile.cer :certs="$freelancer->certificates" />
    </div>
  </div>
</div>
<div class="card box">
  <div class="card-header">
    <h4 class="card-title">
      {{__('Kinh nghiệm')}}
    </h4>
    <div class="heading-elements">
      <button type="button" class="btn btn-sm" data-target="#modal-exp-add" data-toggle="modal"> {{__('Thêm')}} </button>
    </div>
  </div>
  <div class="card-body ">


    <div class="card-block">
      <x-profile.exp :experiences='$freelancer->experiences' />
    </div>


  </div>
</div>
@endsection
@section('content')
<div class="content-body row">
  <div class="col-md-4 sid">
    @yield('side')
  </div>
  <div style="z-index:99" class="offset-md-1 col-md-7">

    @if( empty($freelancer->job) || empty($freelancer->work_phone) || empty($freelancer->tax_code) || empty($freelancer->city_id) )
    @push('outer')
    <x-modal id="modal-start">
      <div class="modal-content">
        <x-profile.register :freelancer="$freelancer" />
      </div>
    </x-modal>

    @endpush
    <div class="card box">
      <div class="card-block">
        <div class="pull-left">
          {{ __("Bắt đầu kinh doanh") }}
        </div>

        <button type="button" class="btn pull-right  btn-primary" data-target="#modal-start" data-toggle="modal">
          <i class="ft ft-plus"> </i>
          {{__('Bắt đầu') }}
        </button>
      </div>


    </div>
    @else
    @if($query->count())
    <div class="card box">
      <div class="card-block">
        <div class="pull-left">
          <h4 id='service' class="card-title">
            {{__('Dịch vụ')}}
          </h4>
        </div>

        <button type="button" class="btn pull-right  btn-primary" onclick="modal_src('modal-src','{{$url_service_create}}')">
          <i class="ft ft-plus"> </i>
          {{__('Tạo mới')}}
        </button>
      </div>
    </div>
    <div class="card box">
      <ul class="nav nav-tabs nav-iconfall">
        <li class="nav-item">
          <a class="nav-link {{request('tab') == 'publish' ? 'active' : '' }}" href="{{ Theme::url(['tab' => 'publish' ]) }}">{{__('Xuất bản')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request('tab') == 'draft' ? 'active' : '' }} " href="{{ Theme::url(['tab' => 'draft' ]) }}">{{__('Nháp')}}</a>
        </li>


      </ul>

      <div class="card-body">
        @if(request('tab') =='draft' )
        <x-product.devlist :query="$query->whereStatus('draft')" col='2' />
        @else
        <x-product.devlist :query="$query->whereStatus('publish')" col='2' />
        @endif

      </div>
    </div>

    @else

    <div class="card box">
      <div class="card-block">
        <div class="pull-left">
          {{ __("Chưa có dịch vụ nào thật sự hoạt động") }}
        </div>

        <button type="button" class="btn pull-right  btn-primary" onclick="modal_src('modal-src','{{$url_service_create}}')">
          <i class="ft ft-plus"> </i>
          {{__('Tạo dịch vụ mới') }}
        </button>
      </div>


    </div>

    @endif
    @endif

  </div>
</div>
@endsection
<x-layout.master />