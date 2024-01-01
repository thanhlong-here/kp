@props(['cert'])
<x-form class="form" action="{{  route('certs.update',$cert) }}" enctype="multipart/form-data" method="PUT">

  <div class="form-body">
    <div class="card-body">
      <div class="card-block">

        <div class="row form-group">
          <div class="col-xs-8">
            <label>{{__('Chứng nhận') }}</label>
            @error('certificate')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input type="text" class="form-control" value="{{ $cert->certificate }}" name="certificate" />
          </div>
          <div class="col-xs-4">

            <label>{{__('Ngày phát hành') }}</label>
            @error('issued')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group">
              <span class="input-group-addon">
                <span class="fa fa-calendar-o"></span>
              </span>
              <input type='text' class="form-control  pickadate" name="at" value="{{ $cert->at }}" />
            </div>
          </div>
        </div>


        <div class="row form-group">
          <div class="col-xs-6">
            <label>{{__('Cấp bởi') }}</label>
            @error('issuer')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="text" placeholder="{{ __('Cấp bởi') }}" class="form-control" value="{{ $cert->issuer }}" name="issuer" />
          </div>

          <div class="col-xs-6">
            <label>{{ __('Tài liệu đính kèm') }}</label>
            <input type="file" class="form-control" name="doc" />
          </div>
        </div>

      </div>
    </div>

  </div>


  <div class="form-actions clearfix">

    <div class="buttons-group float-xs-right">
      <button type="reset" data-dismiss="modal" class="btn ">
        {{__('Làm lại')}}
      </button>
      <button type="submit" class="btn btn-primary mr-1">{{__('Cập nhật')}}</button>
    </div>
  </div>


</x-form>