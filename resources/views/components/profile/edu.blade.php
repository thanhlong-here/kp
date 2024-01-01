@props([
'educations'
])

@foreach( $educations as $edu )
@php 
    $script_destroy = "$('#destroy_$edu->id ').submit()";
@endphp
<div class="mb-2 line-b">

  <div class="clearfix">
    <h4 class="pull-left"> {{ $edu->major }} </h4>

    <div class="pull-right">
      <button onclick="{{$script_destroy}}"  class="btn btn-sm btn-icon btn-danger">
        <i class="ft ft-x"></i></button>
      <button data-toggle="modal" data-target="#modal-edit-{{$edu->id}}" class="btn btn-sm btn-icon btn-info">
        <i class="ft ft-edit"></i></button>
    </div>

  </div>

  <p> {{ $edu->school }}
    {{ __('Tốt nghiệp') }} : {{ $edu->graduated }}
  </p>

</div>
@push('outer')
<x-form id="destroy_{{$edu->id}}" method="DELETE" action="{{ route('edus.destroy',$edu) }}"> </x-form>
<div class="modal fade" id="modal-edit-{{$edu->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <x-profile.edu.edit :edu="$edu" />
    </div>
  </div>
</div>
@endpush
@endforeach


