@php
$search = (new App\Classes\Search('search_product'))->get();

$name = empty($search->name) ? '' : $search->name;
@endphp

<div class="container-fluid p-2 line-b">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="row">
          <div class="col-xs-5">
            <x-logo class="logo" />
          </div>
          <div class="col-xs-7 ">
            <fieldset class="position-relative">
              <x-form class="form row" action="{{route('search.find','product')}}">
              <input type="hidden" name="redirect" value="{{route('search')}}" />
              <fieldset class="position-relative">
              <input type="text" class="form-control " name="name" value="{{$name}}" placeholder="{{__('Thiết kế website')}}">
              <div class="form-control-position">
                <i class="ft-search danger "></i>
              </div>
            </fieldset>
              </x-form>
            </fieldset>

          </div>
        </div>
      </div>
      <div class="col-md-5">
        <x-menu.top :user="Auth::user()" />
      </div>
    </div>
  </div>
</div>
<div class="container-fluid line-b">
  <div id="menu-service" class="container">
    <x-menu.service />
  </div>
</div>