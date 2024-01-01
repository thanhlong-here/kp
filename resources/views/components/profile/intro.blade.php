@props([
'freelancer'
])

<x-form action="{{route('auth.profile.update',$freelancer)}}">

   
    <div class="modal-body">
        <div class="card-block">
            <div class="form-group">
                <label> {{__('Tên hiển thị')}} </label>
                <input class="form-control" name="name" value="{{$freelancer->name}}" />
            </div>
            <div class="form-group">
                <label> {{__('Nghề nghiệp')}} </label>
                <input class="form-control" name="job" value="{{$freelancer->job}}" />
            </div>
            <div class="form-group">
                <label> {{__('Giới thiệu')}} </label>
                <textarea class="form-control" rows="8" placeholder="{{__('Giới thiệu bản thân')}}" name="intro">{{$freelancer->intro}}</textarea>
            </div>

        </div>
    </div>

    <div class="form-actions clearfix">

        <div class="buttons-group float-xs-right">
            <button type="reset" data-dismiss="modal" class="btn ">
                {{__('Quay lại')}}
            </button>
            <button type="submit" class="btn btn-primary mr-1">{{__('Cập nhật')}}</button>
        </div>
    </div>

</x-form>