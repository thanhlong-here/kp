@props([
'category',
'lang' => 'en',
'title' => 'Chuyển ngữ',
])
@php

$action = route('categories.store');
$prefix = $category->prefix."_$lang";
$method = 'POST';
$parent_id = $category->id;

$tran = App\Models\Category::wherePrefix($prefix)->whereParentId($parent_id)->first();
if($tran){
$category = $tran;
$method = 'PUT';
$action = route('categories.update',$category);
}

@endphp
<div class="modal-content">
  <x-form action="{{ $action }}" method="{{ $method }}" enctype="multipart/form-data">

    <input type="hidden" name="prefix" value="{{$prefix}}" />
    <input type="hidden" name="parent_id" value="{{$parent_id}}" />

    <div class="modal-header">

      <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i>{{__($title)}}</h4>

      <div class="pull-right">

        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('Đóng')}}</button>
      </div>
    </div>
    <div class="modal-body h-100">
      <div class="card-block">
        <div class="form-group">
          <input type="text" value="{{ $category->name}}" class="form-control" name="name" />
        </div>


        <div class="form-group">
          <textarea class="form-control" rows="5" placeholder="description" name="description" id="description">{{$category->description}}</textarea>
        </div>

      </div>

    </div>

  </x-form>
</div>