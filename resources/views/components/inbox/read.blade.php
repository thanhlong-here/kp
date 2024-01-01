@prop([
row,user
])
<div class="modal-content">
    <div class="modal-header">
        <h4 class="pull-left">
            @if( $row->sender_id == $user->id )
            {{__('Gửi tới')}} : {{ $row->receiver->freelancer->name}}
            @else
            {{__('Phản hồi')}} : {{$row->sender_id }}
            @endif
        </h4>

        <div class="pull-right">

            <button type="button" class="btn btn-icon" data-dismiss="modal"><i class="ft ft-x"></i> </button>
        </div>
    </div>
    <div class="modal-body">

        <x-form action="{{route('user.contacts.store',$user)}}" class="form card-block">
            <input value="{{$row->title}}" name="title" type="hidden" />
            <input value="{{$row->id}}" name="parent_id" type="hidden" />
            <input value="reply" name="type" type="hidden" />
            @if( $row->sender_id == $user->id )
            <input value="{{$row->receiver_id}}" name="receiver_id" type="hidden" />
            @else
            <input value="{{$row->sender_id}}" name="receiver_id" type="hidden" />
            @endif

            <div class="tab-content" id="read-{{$row->id}}">
                <div class="p-1 mb-1 box"> {!! $row->content !!} </div>
                @foreach($row->childs()->get() as $child )
                    <div class="p-1 mb-1 box"> 
                    @if( $child->sender_id == $user->id )
                        <span class="text-bold-600" >{{__('Phản hồi')}} :</span>
                 
                    @endif
                        {!! $child->content !!} 
                    </div>
                @endforeach

                <div class="form-action float-xs-right">
                    <button type="button" onclick="swtab('reply',{{$row->id}})" class="btn round"> {{__('Phản hồi')}} </button>

                </div>
            </div>
            <div class="tab-panel none" id="reply-{{$row->id}}">

                <textarea name="content" placeholder="{{__('Viết gì đó...')}}" class="form-control mb-2 font-medium-2" rows="8"></textarea>
                <div class="form-action float-xs-right">
                    <button type="button" onclick="swtab('read',{{$row->id}})" class="btn  round"> {{__('Quay lại')}} </button>
                    <button type="submit" class="btn btn-primary round"> {{__('Gửi')}} </button>
                </div>


            </div>
        </x-form>
    </div>
</div>