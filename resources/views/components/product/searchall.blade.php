@php
$search = (new App\Classes\Search('product_all'))->get();
$choices= empty($search->categories) ? [] : $search->categories;
$name   = empty($search->name) ? '' : $search->name;
$status = empty($search->status) ? '' : $search->status;
@endphp

<x-form class="form row" action="{{route('search.find','product_all')}}">

  <div class="col-md-4">
    <label class="text-bold-600">{{__('Categories')}}: </label>
    <x-select.multi class="form-control" :choices="$choices" :list="App\Models\Category::root()->wherePrefix('service')->get()" name="categories[]" />
  </div>
  <div class="col-md-2">
    <label class="text-bold-600">{{__('Status')}}:</label>
    <select name="status" class="form-control">
      <option value="" > ------ </option>
      <option {{ ($status == "preview") ? "selected" : "" }} value="preview"> {{__('Preview')}} </option>
      <option {{ ($status == "publish") ? "selected" : "" }} value="publish"> {{__('Publish')}} </option>
    </select>
  </div>
  <div class="col-md-6">
    <label class="text-bold-600">{{__('Search by keyword')}}: </label>
    <div class="input-group">
      <input type="text" value="{{$name}}" name="name" placeholder="{{__('input keyword')}} ..." class="form-control" />

      <span class="input-group-btn">
        <button class="btn btn-info" type="submit" type="button"><i class="ft ft-search"></i> {{__('search')}}</button>
      </span>
    </div>

  </div>
</x-form>