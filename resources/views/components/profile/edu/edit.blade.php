@props([
    'edu',
  ])
<x-form class="form" action="{{  route('edus.update',$edu) }}"
    enctype="multipart/form-data"
    method="PUT">
  

    <div class="form-body">
      <div class="card-body">
        <div class="card-block">

          <div class="row form-group">
              <div class="col-xs-8">
                <label>{{ __('Trường học') }}</label>
                @error('school')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text"  placeholder="{{__('Trường học') }}"
                class="form-control"  value="{{ $edu->school }}"
                name="school" />
              </div>
              <div class="col-xs-4">
                <label>{{ __('Trạng thái') }}</label>
                  <select name="state"  class="form-control">

                    @foreach(config('dev.state_edu') as $state)
                        <option value="{{ $state }}">  {{ __($state) }} </option>
                    @endforeach
                  </select>
              </div>
          </div>

          <div class="row form-group">
              <div class="col-xs-6">
                <label>{{ __('Bằng cấp') }}</label>
                @error('majors')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text"
                class="form-control"  value="{{ $edu->major }}"
                name="major" />
              </div>
              <div class="col-xs-6">
                <label>{{ __('Tài liệu đính kèm') }}</label>
                <input type="file"
                class="form-control" name="doc"/>
              </div>
          </div>

        </div>
      </div>

    </div>

  <div class="form-actions clearfix">

    <div class="buttons-group float-xs-right">
      <button type="reset" data-dismiss="modal"
      class="btn ">
                    {{__('Cancel')}}
      </button>
         <button type="submit" class="btn btn-primary mr-1">{{__('Save')}}</button>
     </div>
  </div>
</x-form>
