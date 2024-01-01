
@if(empty(App\Classes\Setting::get()->device))
@push('script')
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
<script src="{{asset('theme/js/firebase.js')}}"></script>
@endpush

<div class="app-w">
  <div class="card-block">
    <div class="form-group row one">
      <a href="#" id="btnFacebook" onclick="loginFacebook()" class="btn btn-facebook block">
        <i class="fa fa-facebook"></i> <span class="ml-1">
          {{ __('Continue with Facebook') }} </span>

      </a>
    </div>
    <div class="form-group row one">
      <a href="#" id="btnGoogle" onclick="loginGoogle()" class="btn bg-google white  block">
        <i class="fa fa-google-plus"></i><span class="ml-1">
          {{ __('Continue with Google') }}
        </span>
      </a>
    </div>
  </div>
</div>

<x-form id="firebase_login" method="post" class="none" action="{{route('firebase.login')}}">
  <input type="hidden" name="login_by" id="login_by" />
  <input type="hidden" name="name" id="name" />
  <input type="hidden" name="email" id="email" />
  <input type="hidden" name="firebase_uid" id="firebase_uid" />
  <input type="hidden" name="firebase_token" id="firebase_token" />
</x-form>

@else

@php
$facebook = "#bot:login?by=facebook";
$google = "#bot:login?by=google";
$apple = "#bot:login?by=apple";

@endphp
<div class="app-w">
  <div class="card-block">
    <div class="form-group row one">
      <a href="{{$facebook}}" class="btn btn-facebook block">
        <i class="fa fa-facebook"></i> <span class="ml-1">
          {{ __('Continue with Facebook') }} </span>

      </a>
    </div>

    <div class="form-group row one">
      <a href="{{$google}}" class="btn bg-google white  block">
        <i class="fa fa-google-plus"></i><span class="ml-1">
          {{ __('Continue with Google') }}
        </span>
      </a>
    </div>

    <div class="form-group row one">
      <a href="{{$apple}}" class="btn bg-apple white block">
        <i class="fa fa-apple"></i><span class="ml-1">
          {{ __('Continue with Apple') }}
        </span>
      </a>
    </div>
  </div>
</div>

@endif