@props([
'certs'
])
@php 
  
@endphp
@foreach( $certs as $cer )
  @php 
      $script_destroy = "$('#destroy_cer_$cer->id ').submit()";
  @endphp
  <div class="mb-2 line-b">

    <div class="clearfix">
      <h4 class="pull-left"> {{ $cer->certificate }} </h4>

      <div class="pull-right">
        <button onclick="{{$script_destroy}}"  class="btn btn-sm btn-icon btn-danger">
          <i class="ft ft-x"></i></button>
        <button data-toggle="modal" data-target="#modal-edit-cer-{{$cer->id}}" class="btn btn-sm btn-icon btn-info">
          <i class="ft ft-edit"></i></button>
      </div>

    </div>

    <p> {{ $cer->issuer }}
      {{ __('lúc') }} : {{ $cer->at }}
    </p>

  </div>
  @push('outer')
  <x-form id="destroy_cer_{{$cer->id}}" method="DELETE" action="{{ route('certs.destroy',$cer) }}"> </x-form>
  <div class="modal fade" id="modal-edit-cer-{{$cer->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <x-profile.cer.edit :cert="$cer" />
      
      </div>
    </div>
  </div>
  @endpush
@endforeach


