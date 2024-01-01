@props([
'experiences'
])
@foreach( $experiences as $exp )
@php
$script_destroy = "$('#destroy_exp_$exp->id ').submit()";
@endphp

@push('outer')
<x-form id="destroy_exp_{{$exp->id}}" method="DELETE" action="{{ route('expes.destroy',$exp) }}"> </x-form>
<div class="modal fade" id="modal-exp-edit-{{$exp->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <x-profile.exp.edit :expe="$exp" />
    </div>
  </div>
</div>
@endpush
<div class="mb-2">

  <div class="clearfix line-bot">
    <h4 class="pull-left"> {{ $exp->position }} </h4>

    <div class="pull-right">
      <button onclick="{{$script_destroy}}" class="btn btn-sm btn-icon btn-danger">
        <i class="ft ft-x"></i></button>
      <button data-toggle="modal" data-target="#modal-exp-edit-{{$exp->id}}" class="btn btn-sm btn-icon btn-info">
        <i class="ft ft-edit"></i></button>
    </div>


  </div>

  <p> {{ $exp->company }}
    {{ __('from at') }} : {{ $exp->from_at }}
  </p>

</div>
@endforeach