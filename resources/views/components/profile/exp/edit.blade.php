@props([
  'expe'
  ])

<x-form class="form" action="{{  route('expes.update',$expe) }}" method="PUT">

  <div class="form-body">
    <div class="card-body">
      <div class="card-block">

        <div class="row form-group">
            <div class="col-xs-8">
              <label>{{ __('Tên công ty') }}</label>
              @error('company')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <input type="text"  placeholder="{{ __('Tên công ty') }}"
              class="form-control"  value="{{ $expe->company }}"
              name="company" />
            </div>
            <div class="col-xs-4">
              <label>{{__('Từ ngày') }}</label>
              @error('at')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              <div class="input-group">
  								<span class="input-group-addon">
  									<span class="fa fa-calendar-o"></span>
  								</span>
  								<input type='text' class="form-control  pickadate"
                  name="at"
                   value="{{ $expe->at }}" />
  							</div>
            </div>
        </div>


        <div class="row form-group">
            <div class="col-xs-6">
              <label>{{__('Vị trí') }}</label>
              @error('position')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              <input type="text"  placeholder="{{ __('Vị trí') }}"
              class="form-control"  value="{{$expe->position}}"
              name="position" />
            </div>

        </div>

      </div>
    </div>

  </div>

  <div class="form-actions clearfix">

    <div class="buttons-group float-xs-right">
      <button type="reset" data-dismiss="modal"
      class="btn ">
                    {{__('Làm lại')}}
      </button>
         <button type="submit" class="btn btn-primary mr-1">{{__('Cập nhật')}}</button>
     </div>
  </div>

</x-form>

