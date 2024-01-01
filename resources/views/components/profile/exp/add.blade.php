<x-form class="form" action="{{  route('freelancer.expes.store',$freelancer) }}">

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
              class="form-control"  value="{{ old('company')}}"
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
                   value="{{ old('at')}}" />
  							</div>
            </div>
        </div>


        <div class="row form-group">
            <div class="col-xs-6">
              <label>{{__('Vị trí') }}</label>
              @error('postition')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              <input type="text"  placeholder="{{ __('Vị trí') }}"
              class="form-control"  value="{{ old('position')}}"
              name="position" />
            </div>
            <div class="col-xs-6">
              <label>{{ __('Tài liệu đính kèm') }}</label>
              <input type="file"  placeholder="{{ __('Tài liệu') }}"
              class="form-control" name="doc"  value="{{  old('doc')}}"/>
            </div>
        </div>

      </div>
    </div>

  </div>

  <div class="form-actions clearfix">

    <div class="buttons-group float-xs-right">
      <button type="reset" data-dismiss="modal" class="btn ">
                    {{__('Làm lại') }}
      </button>
         <button type="submit" class="btn btn-primary mr-1">{{__('Thêm mới') }}</button>
     </div>
  </div>

</x-form>
