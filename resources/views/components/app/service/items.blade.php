@props([
'services',
])

@foreach($services as $service)
@php
$route=route('app.product',$service);
@endphp
<div class="row">
    <div class="card shadow">
        <div class="card-block">
            <div class="col-xs-4 p-0">
                @if($service->avatar)
                <x-app.open style="height:8rem;overflow:hidden" route="{{$route}}">
                    <img class="img-fluid img-top" loading="lazy" src="{{ url($service->avatar->src) }}">
                </x-app.open>
                @endif
                <label class="pull-left">
                    <span class="primary">

                        <x-star />
                    </span>
                    <livewire:auth.like :item="$service" count="{{$service->likes->count()}}" />
                </label>
            </div>
            <div class="col-xs-8 pr-0">
                <x-app.open route="{{$route}}" class="clear pb-2">
                    <p class="text-bold-400">{{$service->name}}</p>
                    <p class="font-medium-2 pull-right primary">
                        {{ __('Từ') }} :
                        <span class=" text-bold-600">
                            {{$service->price_format}}
                        </span>
                    </p>
                </x-app.open>

            </div>
        </div>

    </div>
</div>
@endforeach