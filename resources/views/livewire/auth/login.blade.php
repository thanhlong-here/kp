
<form wire:submit.prevent="login" >
    @if( $ok )
        <div class="form-group row text-xs-center">
            <button wire:click ='sw' class="btn btn-block round text-bold-600 dropdown-toggle">
                <i class="ft ft-user mr-1"></i>{{$email}} 
            </button>
        </div>
        <div class="form-group row">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input placeholder="enter input password"
            wire:model="password"
            type="password" class="form-control" name="password" required  autofocus >
            <label class="form-check-label pull-left" for="remember">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Ghi nhớ') }}
            </label>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Đăng nhập') }}
            </button>
        </div>
      
    @else 
        
        <div class="form-group row">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <input placeholder="{{__('Nhập email của bạn')}}"
                    wire:model="email"
                    type="email"
                    class="form-control"
                    name="email" value="{{ old('email') }}" required  autofocus>
            @if (Route::has('password.request'))
                <a class="btn-link" href="{{ route('password.request') }}">
                    {{ __('Quên mật khẩu') }} ?
                </a>
            @endif
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Tiếp tục') }}
            </button>
        </div>
    
        <div class="form-group row">
            <button type="button" data-toggle="modal" data-dismiss="modal" data-target="#modal-register" class="btn  btn-block">
                {{ __('Tạo tài khoản với Email') }}
            </button>
        </div>
    @endif
    
</form>
