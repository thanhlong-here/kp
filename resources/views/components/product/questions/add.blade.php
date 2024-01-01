@props(['requiment']);
@push('script')
<script>
    $("#question_type").change(function() {
        var val = $(this).val();
        if (val == 'text') {
            $("#multi_option").hide();
            $("#attachment_option").hide();
        }
        if (val == 'multi') {
            $("#multi_option").show();
            $("#attachment_option").hide();
        }
        if (val == 'attachment') {
            $("#multi_option").hide();
            $("#attachment_option").show();
        }

    });

    $("#add_new_opt").click(function() {
        $("#option_ext").append(
            "<div class='input-group mb-2'>" +
            "<input type='text' name='multi_op[]' class='form-control' placeholder='add option' />" +
            "<span onclick='$(this).parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>" +
            "</div>"
        );
    });
</script>

@endpush
<x-form action="{{route('forms.elements.store',$requiment)}}" class="card">
    <div class="card-block">
        <div class="form-group">
            <textarea name="name" rows="5" class="form-control" placeholder=""></textarea>
        </div>
        <div class="form-group mb-2">
            <div class="row">
                <div class="col-xs-6">
                    <label> {{__('Chọn dạng câu hỏi') }} : </label>

                </div>
                <div class="col-xs-6">
                    <select id="question_type" name="question_type" class="form-control">
                        <option value="text"> {{__('Định dạng văn bản')}} </option>
                        <option value="multi"> {{__('Chọn lựa')}} </option>
                        <option value="attachment"> {{__('Tài liệu đính kèm')}} </option>
                    </select>
                </div>
            </div>

        </div>
        <div class="none" id="multi_option">
            <div class="form-group">
                <input type="text" name="multi_op[]" class="form-control" placeholder="add option" />
            </div>
            <div class="form-group">
                <input type="text" name="multi_op[]" class="form-control" placeholder="add option" />
            </div>
            <div id="option_ext" class="mb-2">

            </div>

            <div class="form-group row  mb-2">
                <div class="col-xs-8">
                    <label>
                        <input type="checkbox" name="is_multi" selected />
                        {{__('Cho phép chọn nhiều') }}
                    </label>
                </div>

                <div class="col-xs-4">
                    <button id="add_new_opt" type="button" class="btn btn-secondary pull-right">+{{__('Thêm lựa chọn')}}</button>
                </div>
            </div>
        </div>
        <div class="none" id="attachment_option">
            <input type="file" name="attachment" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
        </div>


        <div class="card-footer">
            <div class="pull-right">
                <button class="btn  btn-secondary" data-dismiss="modal">{{__('Hủy')}}</button>
                <button type="submit" class="btn btn-primary">{{__('Tạo mới')}}</button>
            </div>
        </div>
    </div>
</x-form>
