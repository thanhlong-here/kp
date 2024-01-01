
@php
$search = (new App\Classes\Search('product'))->get();
$choices= empty($search->categories) ? [] : $search->categories;
$name = empty($search->name) ? '' : $search->name;
@endphp

<x-form class="form row" action="{{route('search.find','product')}}">

  <div class="col-md-3">
    <label class="text-bold-600">{{__('Danh mục')}}: </label>
    <x-select.multi class="form-control" :choices="$choices" :list="App\Models\Category::root()->wherePrefix('product')->get()" name="categories[]" />
  </div>
  
  <div class="col-md-6">
    <label class="text-bold-600">{{__('Từ khóa cần tìm')}}: </label>
    <div class="input-group">
      <input type="text" value="{{$name}}" name="name" placeholder="{{__('Nhập từ khóa')}} ..." class="form-control" />

      <span class="input-group-btn">
        <button class="btn btn-info" type="submit" type="button"><i class="ft ft-search"></i> {{__('Tìm kiếm')}}</button>
      </span>
    </div>

  </div>
</x-form>