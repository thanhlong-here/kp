@props([
'product' => new App\Models\Product,
])
@php
$name = $product->pack == "standard" ? '' :$product->pack;
$price= $product->price;
$delivery = $product->delivery;
$revisions = $product->revisions;
$description = $product->description;

$note_pricing = Block::pull('service_pricing','note')->first();
$note_description = Block::pull('service_pricing_description','note')->first();
$note_delivery = Block::pull('service_pricing_delivery','note')->first();
$note_revisions = Block::pull('service_pricing_revisions','note')->first();
@endphp

<div class="card-block">
  <div class="row">
    <div class="col-md-4 form-group">


      <label class="font-medium-1"> {{ __('Giá bán') }} : </label>
      <div style="margin-left: 320%;" class="help">
        {!!$note_pricing->tran->content!!}
      </div>
      @error($name."_price")
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
      <div class="input-group">

        <input type="number" value="{{$price}}" placeholder=">1.000.000" class="form-control" name='{{ $name ? $name."_price" : "price" }}'>
        <span class="input-group-addon">
          đ
        </span>
      </div>
    </div>
    <div class="col-md-4 form-group">

      <label class="font-medium-1"> {{ __('Bàn giao') }} : </label>
      <div style="margin-left: 180%;" class="help">
        {!!$note_delivery->tran->content!!}.
      </div>
      @error($name."_delivery")
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
      <div class="input-group">

        <input type="number" placeholder="delivery" class="form-control" value="{{$delivery}}" name='{{ $name ? $name."_delivery" : "delivery" }}'>
        <span class="input-group-btn">
          <select class="btn btn-info" name='{{ $name ? $name."_duration" : "duration" }}'>
            <option value="days"> {{__('Ngày')}} </option>
            <option value="hours"> {{__('Giờ')}} </option>
          </select>
        </span>
      </div>

    </div>
    <div class="col-md-4 form-group">


      <label class="font-medium-1"> {{ __('Số lần chỉnh sửa') }} : </label>
      <div class="help fixed">
        {!!$note_revisions->tran->content!!}
      </div>
      @error($name."_revisions")
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
      <div class="input-group">

        <input type="number" class="form-control" value="{{$revisions}}" name='{{ $name ? $name."_revisions" : "revisions" }}' />
        <span class="input-group-addon">
          {{__('Lần')}}
        </span>
      </div>
    </div>

  </div>
  <div class="form-group">

    <label class="font-medium-1"> {{__('Mô tả') }} : </label>
    <div style="margin-left: 105%;" class="help">
      {!! $note_description->tran->content !!}
    </div>

    @error($name."_description")
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
    <textarea rows="5" name='{{ $name ? $name."_decription" : "description" }}' class="form-control">{{$description}}</textarea>
  </div>


</div>