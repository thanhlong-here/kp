@props([
'block',
'lang'  => 'en',
'title' => 'Chuyển ngữ'
])
@php

$action = route('blocks.store');
$prefix = $block->prefix."_$lang";
$method = 'POST';
$parent_id  = $block->id;

$tran   = App\Models\Block::wherePrefix($prefix)->whereParentId($parent_id)->first();
if($tran){
  $block  = $tran;
  $method = 'PUT';
  $action = route('blocks.update',$block);
}

@endphp
<div class="modal-content">
  <x-form action="{{ $action }}" method="{{ $method }}" enctype="multipart/form-data">

    <input type="hidden" name="prefix" value="{{$prefix}}" />
    <input type="hidden" name="parent_id" value="{{$parent_id}}" />

    <div class="modal-header">

      <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i>{{ __($title) }}</h4>

      <div class="pull-right">

        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('Đóng')}}</button>
      </div>
    </div>
    <div class="modal-body h-100">
      <div class="card-block">
        <div class="form-group">
          <input type="text" value="{{ $block->title }}" class="form-control" placeholder="title" name="title" />
        </div>


        <div class="form-group">
          <x-editor height="120">{{$block->content}}</x-editor>
        </div>

      </div>

    </div>

  </x-form>
</div>