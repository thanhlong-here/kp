@props([
'product'
])
@php
$publish = true;
//dd($product->finishProgess())


@endphp


<div style="padding-top: 8rem;" class="container-fluid form-body">
  <div class="container fixed">
    <div class="col-xs-3 ">
      <ul class="nav nav-bar text-xs-right mr-2">
        @foreach($product->finishProgess() as $tab => $state)

        @php
        if(!$state) $publish = $state;

        if(request('tab') == $tab){
        $class = 'btn-primary';
        }else{
        $class = $state ? 'btn-success' : 'btn-info';
        }
        @endphp
        <li class="nav-item mb-1">


          <a href="{{ Theme::url(['tab'=>$tab ]) }}" class="nav-link">
            {{ __($tab) }} <span class="btn {{ $class }} btn-secondary btn-sm ml-1">{{$loop->index + 1 }} </span> </a>

        </li>


        @endforeach

        <li class="nav-item">
          @if($publish)
          <a class="nav-link" href="{{ Theme::url(['tab'=>'publish' ]) }}"> {{__('Xuất bản')}}
            <span class="btn {{request('tab') == 'publish' ? 'btn-primary' :'btn-info'  }}  btn-sm ml-1"> 6 </span> </a>
          @else
          <a class="nav-link"> {{__('Xuất bản')}}
            <span class="btn btn-secondary  btn-sm ml-1"> 6 </span> </a>
          @endif
        </li>

      </ul>

    </div>
  </div>
  <div class="offset-xs-3 col-xs-6">
  @switch(request('tab'))
      @case ('pricing')
      <x-product.edit.pricing :product="$product" />
      @break
      @case('description')
      <x-product.edit.description :product="$product" />
      @break
      @case('requirement')
      <x-product.edit.requirement :product="$product" />
      @break
      @case('gallery')
      <x-product.edit.gallery :product="$product" />
      @break
      @case('publish')
      <x-product.edit.publish :product="$product" />
      @break
      @default
      <x-product.edit.overview :product="$product" />
    @endswitch
  </div>



</div>

<div style="top:0" class="fixed block ">
  <div class="row bg-white line-b p-1">
    <div class="col-md-6">
      <h2 class="content-title">
        {{$product->name }}
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