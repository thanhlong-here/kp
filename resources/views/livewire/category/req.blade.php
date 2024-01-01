<div class="row">


    <div class="col-xs-6">
        <select wire:model='service_id' wire:change="serviceSelected" class="form-control input-lg">
            <option value="0">-- {{__('Chọn danh mục')}} --</option>
            @foreach($this->services as $item)
            <option value="{{$item->id}}">{{ $item->tran->name}}</option>
            @endforeach
        </select>

    </div>
    <div class="col-xs-6">

        @if(isset($categories) && $categories->count())

        <select name="category_id" wire:model='category_id' wire:change="categorySelected" class="form-control input-lg">
            @foreach($categories as $item)
            <option value="{{$item->id}}">{{$item->tran->name}}</option>
            @endforeach
        </select>

        @endif
    </div>
</div>