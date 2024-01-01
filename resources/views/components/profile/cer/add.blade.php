@props(['freelancer'])
<x-form class="form" action="{{  route('freelancer.certs.store',$freelancer) }}"
    enctype="multipart/form-data">

    <div class="form-body">
      <div class="card-body">
        <div class="card-block">

          <div class="row form-group">
              <div class="col-xs-8">
                <label>{{__('Chứng chỉ') }}</label>
                @error('certificate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text"  placeholder="{{__('Chứng chỉ') }}"
                class="form-control"  value="{{old('certificate')}}"
                name="certificate" />
              </div>
              <div class="col-xs-4">

                <label>{{__('Ngày cấp chứng chỉ') }}</label>
                @error('issued')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="input-group">
    								<span class="input-group-addon">
    									<span class="fa fa-calendar-o"></span>
    								</span>
    								<input type='date' class="form-control  pickadate"
                    name="at"
                     value="{{old('at')}}" />
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

                <input type="text"  placeholder="{{__('Cấp bởi') }}"
                class="form-control"  value="{{old('issuer')}}"
                name="issuer" />
              </div>

              <div class="col-xs-6">
                <label>{{__('Tài liệu đính kèm') }}</label>
                <input type="file"
                class="form-control" name="doc"  value="{{old('doc')}}"/>
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
         <button type="submit" class="btn btn-primary mr-1">{{__('Thêm mới')}}</button>
       </div>
    </div>

</x-form>
