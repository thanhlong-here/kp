@props(['element']);
@push('script')
<script>
    $("#question_type_{{$element->id}}").change(function() {
        var val = $(this).val();
        if (val == 'text') {
            $("#multi_option_{{$element->id}}").hide();
            $("#attachment_option_{{$element->id}}").hide();
        }
        if (val == 'multi') {
            $("#multi_option_{{$element->id}}").show();
            $("#attachment_option_{{$element->id}}").hide();
        }
        if (val == 'attachment') {
            $("#multi_option_{{$element->id}}").hide();
            $("#attachment_option_{{$element->id}}").show();
        }

    });

    $("#add_new_opt_{{$element->id}}").click(function() {
        $("#option_ext_{{$element->id}}").append(
            "<div class='input-group mb-2'>" +
            "<input type='text' name='multi_op[]' class='form-control' placeholder='add option' />" +
            "<span onclick='$(this).parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>" +
            "</div>"
        );
    });

    $("#question_type_{{$element->id}}").val("{{$element->type}}");
    $("#question_type_{{$element->id}}").trigger("change");
</script>

@endpush
<x-form action="{{route('elements.update',$element)}}" method="PUT" class="form card">
    <div class="card-block">
        <div class="form-group">
            <textarea name="name" rows="5" class="form-control" placeholder="">{{$element->name}}</textarea>
        </div>
        <div class="form-group mb-2">
            <div class="row">
                <div class="col-xs-6">
                <label> {{__('Chọn dạng câu hỏi') }} : </label>

                </div>
                <div class="col-xs-6">
                    <select id="question_type_{{$element->id}}" name="question_type" class="form-control">
                        <option value="text"> {{__('Định dạng văn bản')}} </option>
                        <option value="multi"> {{__('Chọn lựa')}} </option>
                        <option value="attachment"> {{__('Tài liệu đính kèm')}} </option>
                    </select>
                </div>
            </div>

        </div>
        <div class="none" id="multi_option_{{$element->id}}">
            <div id="option_data">
                @if($element->type=='multi')
                @foreach($element->options['data'] as $opt)

                @if($loop->index > 2 )
                <div class='input-group mb-2'>
                    <input type='text' name='multi_op[]' class='form-control' placeholder='add option' />
                    <span onclick='$(this).parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>
                </div>
                @else
                <div class="form-group mb-2">
                    <input type="text" name="multi_op[]" value="{{$opt}}" class="form-control" placeholder="add option" />
                </div>
                @endif
                @endforeach
                @else
                <div class="form-group">
                    <input type="text" name="multi_op[]" class="form-control" placeholder="add option" />
                </div>
                <div class="form-group">
                    <input type="text" name="multi_op[]" class="form-control" placeholder="add option" />
                </div>

                @endif
            </div>
            <div id="option_ext_{{$element->id}}" class="mb-2">

            </div>

            <div class="form-group row  mb-2">
                <div class="col-xs-8">
                    <label>
                        <input type="checkbox" name="is_multi" {{ isset($element->options['is_multi']) ? "checked" : ""  }} />
                        {{__('Cho phép chọn nhiều') }}
                    </label>
                </div>

                <div class="col-xs-4">
                    <button id="add_new_opt_{{$element->id}}" type="button" class="btn btn-secondary pull-right">+{{__('Thêm lựa chọn')}}</button>
                </div>
            </div>
        </div>
        <div class="none" id="attachment_option_{{$element->id}}">
            <input type="file" name="attachment" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
        </div>


        <div class="card-footer">
            <div class="pull-right">
                <button class="btn  btn-secondary" data-dismiss="modal">{{__('Hủy')}}</button>
                <button type="submit" class="btn btn-primary">{{__('Cập nhật')}}</button>
            </div>
        </div>
    </div>
</x-form>