@props([
'user'
])
@php
$inbox = Contact::Inbox($user)->OrderBy('updated_at')->take(6);
@endphp
<ul class="nav nav-tabs flex nav-underline">
    <li class="nav-item flex-1 ">
        <a class="nav-link active" id="base-tab31" data-toggle="tab" href="#show-message" aria-expanded="true">
            <i class="ft ft-bell"></i> {{__('Thông báo')}}
        </a>
    </li>
    <li class="nav-item flex-1">
        <a class="nav-link" id="base-tab32" data-toggle="tab" href="#show-inbox" aria-expanded="false">
            <i class="ft ft-inbox"></i> {{__('Hộp thư')}}</a>
    </li>

</ul>

<div class="tab-content line-top px-1 pt-1">
    <div role="tabpanel" class="tab-pane active" id="show-message" aria-expanded="true">

        <div class="p-1 text-xs-center">

            <i class="icon-magnifier"></i>
            {{ __("Bạn chưa có tin nhắn") }}
        </div>


        <div class="inbox-footer p-1">
            <a class="text-muted" href="{{route('auth.notifies',$user)}}"> {{__('Xem tất cả tin nhắn')}} </a>
        </div>
    </div>
    <div class="tab-pane" id="show-inbox">


        @if($inbox->count())
        @foreach ($inbox->get() as $row)
        @php
    
        $iframe = route('auth.chat.with',[$row->sender,$row->receiver]);
        @endphp
     

        <div class="line-t p-1 pointer oframe" data-src="{{$iframe}}" data-target="#mess">
            <h6 class="text-bold-600">{{__('Từ')}} : {{$row->sender->name}}</h6>
            <p class="notification-text font-small-3 text-muted"> {{ $row->title }}</p>
            <div class="mb-2">
                <small class="pull-right"> {{ $row->created_at }} </small>
            </div>
        </div>

        @endforeach
        @else
        <div class="p-1 text-xs-center">
            <i class="icon-magnifier"></i>
            {{ __("Bạn chưa có tin nhắn") }}
        </div>
        @endif


        <div class="inbox-footer p-1">

            <a class="text-muted" data-toggle="modal" data-target="#mess"> {{__('Xem tất cả thư đến')}} </a>
        </div>
    </div>

</div>

@push('outer')

<x-modal id="mess" class="modal-xl mt-0 h-100">

    <div class="modal-content h-100">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-title">
                @if($user->avatar)
                <img src="{{asset(Auth::user()->avatar->src)}}" class="x45 rounded-circle img-border box-shadow-1">
                @else
                <img src="{{asset('theme/images/portrait/small/avatar-s-1.png')}}" class="x45  rounded-circle img-border box-shadow-1">
                @endif
                <span class="ml-2"> {{$user->name}} </span>
            </div>
        </div>
        <iframe src="{{route('auth.chat')}}" class="hw-100" />
    </div>
</x-modal>
@endpush