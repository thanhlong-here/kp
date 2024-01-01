<form wire:submit.prevent="register" >

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
            <input placeholder="{{__('enter input password')}}"
            wire:model="password"
            type="password" class="form-control" name="password" required  autofocus >
        </div>
        
        <div class="form-group row">
            
            <input placeholder="{{__('Tên hiển thị')}} : {{$email}}"
            wire:model="name" 
            type="text" class="form-control" name="name">
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Đăng ký') }}
            </button>
        </div>
      
    @else 
        
        <div class="form-group row">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <input placeholder="{{__('Nhập Email của bạn')}}"
                    wire:model="email"
                    type="email"
                    class="form-control"
                    name="email" value="{{ old('email') }}" required  autofocus>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Tiếp tục') }}
            </button>
        </div>
        <label class="row text-justify">

            <input type="checkbox" name="accepted" value="1" checked required >
            <a href="{{ url(Post::findCode('term-use')->link->pretty) }}">
            {{ __('Tôi đã đọc và đồng ý với các điều khoản của KingPang') }}
             </a>
        </label>
    
    @endif
    
</form>