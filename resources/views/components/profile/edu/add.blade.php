@props([
    'freelancer',
  ])
<x-form class="form" action="{{  route('freelancer.edus.store',$freelancer) }}"
    enctype="multipart/form-data" >
    
    <div class="form-body">
      <div class="card-body">
        <div class="card-block">

          <div class="row form-group">
              <div class="col-xs-8">
                <label>{{__('Trường học') }}</label>
                @error('school')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text"  placeholder="{{__('Tên trường') }}"
                class="form-control"  value="{{old('school')}}"
                name="school" />
              </div>
              <div class="col-xs-4">
                <label>{{__('Trạng thái') }}</label>
                  <select name="state"  class="form-control">
                      <option value="graduated">  {{ __('Đã tốt nghiệp') }} </option>
                      <option value="attending">  {{__('Dự thính')}}  </option>
                      <option value="learning">   {{__('Tiếp tục học')}}</option>
                      <option value="incomplete"> {{ __('Chưa hoàn thành') }}  </option>
                      <option value="complete"> {{ __('Hoàn thành') }}  </option>
                  </select>
              </div>
          </div>

          <div class="row form-group">
              <div class="col-xs-6">
                <label>{{__('Chuyên ngành') }}</label>
                @error('majors')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text"  placeholder="{{ __('Chuyên ngành') }}"
                class="form-control"  value="{{old('majors')}}"
                name="major" />
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
      <button type="reset"  data-dismiss="modal" class="btn ">
                    {{__('Làm lại')}}
      </button>
         <button type="submit" class="btn btn-primary mr-1">{{__('Thêm mới')}}</button>
     </div>
  </div>
</x-form>
