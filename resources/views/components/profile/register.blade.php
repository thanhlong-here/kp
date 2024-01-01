@props([
    'freelancer'
  ])

@php 
  $cities = \App\Models\City::get();
@endphp
<x-form class="form"  action="{{route('auth.profile.update',$freelancer)}}">
  <input type="hidden" name="status" value="registed" />
  <div class="modal-body">
    <div class="form-group row">
      <div class="col-xs-6">

        <label>{{__('Số điện thoại') }}</label>
        @error('work_phone')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        <input type="number" required value="{{$freelancer->work_phone}}" placeholder="{{Str::title(__('contact phone')) }}" class="form-control" value="{{$freelancer->work_phone}}" name="work_phone" id="work_phone" />

      </div>
      <div class="col-xs-6">
        <label>{{__('Email') }}</label>
        @error('work_email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
        <input type="email" required placeholder="{{Str::title(__('contact email')) }}"
         class="form-control" value="{{$freelancer->user->email}}" name="work_email" id="work_email" />

      </div>

    </div>

    <div class="form-group row">
      <div class="col-xs-8">
        <label> {{__('Địa chỉ')}} </label>
        <input type="text" class="form-control" name="work_address" value="{{$freelancer->work_address}}" />
      </div>
      <div class="col-xs-4">
        <label> {{__('Khu vực')}} </label>
        <select name="city_id" class="form-control">
          @foreach($cities as $city)
            <option {{$city->postcode == '700000' ? 'selected' : ''}} value="{{$city->id}}" >{{$city->name}}</option>
          @endforeach
        </select>

      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label> {{__('Nghề nghiệp')}} </label>
        <input class="form-control" name="job" />
      </div>
      <div class="col-xs-6">
        <label> {{__('Mã số thuế')}} </label>
        <input type="text" required placeholder="{{Str::title(__('tax code')) }}" value="{{$freelancer->tax_code}}" class="form-control" name="tax_code" />
      </div>
    </div>

    <div class="form-group">
      <label>
        {{__('Bạn là doanh nghiệp?')}}
        <input type="checkbox" value="1" {{$freelancer->is_company ? 'checked' : ''}} name="is_company" />
      </label>

    </div>



    <div class="form-actions clearfix">
      <div class="pull-left">

       {{__('Thông tin này sẽ không hiển thị trên hồ sơ')}}
      </div>
      <div class="buttons-group float-xs-right">
        <button type="reset" data-dismiss="modal" class="btn ">
          {{__('Làm lại')}}
        </button>
        <button type="submit" class="btn btn-primary mr-1">{{__('Cập nhật')}}</button>
      </div>
    </div>
  </div>
</x-form>