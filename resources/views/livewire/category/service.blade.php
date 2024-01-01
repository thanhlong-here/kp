<div class="service">

    <div class="form-group row mb-2">


        <div class="col-xs-8">
            <select wire:model='service_id' wire:change="serviceSelected" class="form-control input-lg">
                <option value="0">-- {{__('Chọn danh mục')}} --</option>
                @foreach($this->services as $item)
                <option value="{{$item->id}}">{{ $item->tran->name}}</option>
                @endforeach
            </select>

        </div>
    </div>
    @if(isset($categories) && $categories->count())
    <div class="form-group row mb-2">
        <div class="col-xs-4">

            <label class="font-medium-2 ">{{ __('Danh mục') }} :</label>


        </div>
        <div class="col-xs-8">
            <select name="category_id" wire:model='category_id' wire:change="categorySelected" class="form-control input-lg">
                @foreach($categories as $item)
                <option value="{{$item->id}}">{{$item->tran->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @if(isset($types) && $types->count())
    <div class="form-group row mb-2">
        <div class="col-xs-4">
            <label class="font-medium-2 ">{{ __('Loại dịch vụ') }} :</label>


        </div>
        <div class="col-xs-8">

            <select name="type_id" wire:model='type_id' class="form-control input-lg">
                @foreach($types as $item)
                <option value="{{$item->id}}">{{$item->tran->name}}</option>
                @endforeach
            </select>

        </div>
    </div>
    @endif

    @if( isset($metadatas) && $metadatas->count())
    <div class="form-group">

        <label class="font-medium-2 ">{{ __('meta data') }} :</label>
        <div class="nav-vertical">
            <ul class="nav nav-tabs nav-left">
                @foreach($metadatas as $meta)

                <li class="nav-item">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }} " data-toggle="tab" href="#tab-{{$meta->id}}"> {{$meta->tran->name}} </a>
                </li>
                @push('tab-panel')
                <div class="tab-pane {{ $loop->first ? 'active' : '' }}" id="tab-{{$meta->id}}">
                
                    @if(isset($meta_options))
                    @foreach ($meta->childs('service_metadata_option')->get() as $option)


                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" name="meta[]" {{ in_array($option->id,$meta_options) ? 'checked' :'' }} value="{{$option->id}}" />

                            {{$option->tran->name}}
                        </label>
                    </fieldset>
                    @endforeach
                    @else

                    @foreach ($meta->childs('service_metadata_option')->get() as $option)
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" name="meta[]" value="{{$option->id}}" />

                            {{$option->tran->name}}
                        </label>
                    </fieldset>
                    @endforeach
                    @endif


                </div>
                @endpush
                @endforeach
            </ul>
            <div class="tab-content px-1">
                @stack('tab-panel')
            </div>
        </div>
    </div>
    @endif
    @endif
</div>