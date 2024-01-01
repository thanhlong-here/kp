@props([
'freelancer',
'route'
])
@php 
$avatar = empty($freelancer->avatar)
      ? asset('theme/images/portrait/small/avatar-s-1.png')
      : asset($freelancer->avatar->src);
@endphp

<div class="card shadow box-round">

    <x-app.open style="height:8rem;overflow:hidden" route="{{$route}}">
       
    <img class="w-100 img-top" loading="lazy" src="{{ $avatar }}">
    </x-app.open>
    <x-app.open route="{{$route}}" class="card-body p-1">
        <p class="font-medium-2 primary text-bold-600">{{$freelancer->name}}</p>
        <p>{{$freelancer->job}}</p>
    </x-app.open>
</div>