@props([
'list',
'user',

])

<div id="inbox" class="table-responsive">
    <table class="table">

        <tbody>

            @foreach ($list as $row)

            @php
            if($row->prefix == 'message'){
            $src = route('auth.chat.with',[ $row->sender,$row->receiver ]);
            $attb = "class='pointer openmess' data-src='$src'";
            }
            else{
            $attb = "class='pointer' data-toggle='modal' data-target='#modal-read-".$row->id."' ";
            }
            @endphp
            <tr {!!$attb!!}>

                <th style="width:6rem">
                    @if( $row->sender_id == $user->id )
                    {{__('Tới')}} : {{ $row->receiver->freelancer->name}}
                    @else
                    {{__('Từ')}} : {{$row->sender->name}}
                    @endif

                </th>
                <td>

                    {{ $row->title }}

                </td>


                <td style="width:8rem">
                    <p class="pull-right"> {{ $row->created_at }} </p>
                </td>

            </tr>
            @push('outer')

            <x-modal id="modal-read-{{$row->id}}">
                <x-inbox.read :row='$row' :user="$user" />
            </x-modal>
            @endpush
            @endforeach
        </tbody>


    </table>
    <div class="pull-right">
        {{$list->appends(request()->input())->render('vendor.pagination.simple')}}
    </div>
</div>
@push('outer')
<x-modal id="mess" class="h-100 mt-0">

    <div class="modal-content h-100">
        
        <iframe src="about:blank"  class="hw-100" />
    </div>
</x-modal>
@endpush
@push('script')
<script>
    function swtab(type, id) {
        if (type == 'reply') {
            $('#read-' + id).hide();
            $('#reply-' + id).show();
        } else {
            $('#read-' + id).show();
            $('#reply-' + id).hide();
        }
    }

    function trap(action) {
        $('#inbox_remove').attr('action', action);
        $('#inbox_remove').submit();
    }

    
    $(".openmess").click(function() {
        wid = $("#mess");
        widdoc = $('#mess iframe');
        widdoc.attr('src', $(this).data('src'));
        wid.modal('toggle');
        wid.fadeIn('slow');
    });
</script>

@endpush