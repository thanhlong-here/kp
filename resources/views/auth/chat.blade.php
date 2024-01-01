@php
if(empty($group)) $group = null;
@endphp
@push('css')
<link href="{{asset('theme/css/page/app-chat.min.css')}}" rel="stylesheet">
<style>
  .chat-container {
    overflow: auto;
    scrollbar-width: thin;
    scrollbar-color: #90A4AE #CFD8DC;
  }

  .chat-container::-webkit-scrollbar {
    width: .5em;
  }

  .chat-container::-webkit-scrollbar-thumb {
    background-color: #90A4AE;
    border-radius: 6px;
  }

  .chat-application .chat-sidebar {
    height: calc(var(--vh, 1vh) * 100 - 5rem);
  }

  .chat-application .chat-window-wrapper .chat-container {

    height: calc(var(--vh, 1vh) * 100 - 12rem);
  }
</style>
@endpush

@if(isset($group))

@push('script')


<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-firestore.js"></script>
<script src="{{asset('theme/js/firebase.js')}}"></script>
<script>
  /************setting*******/
  var index = 0;
  var user_name = "{{ $user->name }}";
  var user_id = "{{ $user->id }}";
  var group = "{{ $group }}";
  var stamp = '{{$now}}';
  var last = 0;
  var block = [];
  var loud = $('#loud');
  var preview = $('#preview');
  var display = $('#display');


  function record() {
    return {
      'created': last,
      'group': group,
      'user_name': user_name,
      'user_id': user_id,
      'loud': block
    };
  }
  /**********UI********/

  function _preview() {
    out = '<div class="chat">';
    block.forEach(function(item) {
      out += inc(item);
    })
    out += '</div>';
    preview.html(out);
    preview.fadeIn(500);
    scroll();
  }

  function inc(val) {
    out = '<div class="chat-body m-0">'
    out += '<div class="chat-message" >' + val;
    out += '</div></div>';
    return out;
  }

  function line(item) {
    out = '';
    item.loud.forEach(function(val) {
      out += inc(val);
    })
    return out;
  }

  function view(items) {
    out = '';
    items.forEach(function(item) {
      side = (item.user_name == user_name) ? 'chat' : 'chat chat-left';

      out += '<div data-id=' + item.id + ' class="' + side + '" >';
      //out += '<div class="chat-avatar ">' + item.user_name + '</div>';
      out += line(item);
      out += '</div>';
    })
    display.html(out);
    preview.fadeOut(2000);
    preview.html('');
    scroll();
  }

  function scroll() {
    sh = $('.chat-container').prop("scrollHeight");
    $('.chat-container').scrollTop(sh);
  }
  //action press
  function press() {
    loud.keypress(function(event) {

      var keycode = (event.keyCode ? event.keyCode : event.which);
      if (keycode == '13') {
        if (val == '') return;
        var val = $(this).val();
        block.push(val);
        $(this).val('');
        _preview();
      }

    });
  }



  function render() {
    query.orderBy('created').onSnapshot({
        // Listen for document metadata changes
        includeMetadataChanges: true
      },
      (querySnapshot) => {
        const rows = querySnapshot.docs.map(
          function(doc) {
            row = doc.data();
            row.id = doc.id;
            return row;
          }
        );
        view(rows);

      });

  }

  function push() {
    if (block.length === 0) return;
    last = stamp - 1;
    collection.add(record()).then(function(result) {
      block = [];
    });
  }


  /***********Run************/

  $(window).on('load', function() {

    /********firebase********/
    db = firebase.firestore();
    db.settings({
      timestampsInSnapshots: true,
      cacheSizeBytes: firebase.firestore.CACHE_SIZE_UNLIMITED
    });
    collection = db.collection("kingloud");
    query = collection.where('group', '==', group);
    setInterval(() => {
    }, 1000);
    press();
    render();

    setInterval(() => {
        push();
      },
      2500);

  });

  $('.close-parent').click(function() {
    $('#mess', window.parent.document).fadeOut(250);
    $('body', window.parent.document).removeClass('modal-open');
    $('.modal-backdrop', window.parent.document).remove();
  });
</script>

@endpush
@section('chat-area')

<div class="chat-area">

  <!-- chat card start -->
  <div class="card chat-wrapper shadow-none mb-0">
    <div class="card-content">
      <div class="card-body chat-container">
        <div id="display" class="chat-content">

        </div>
        <div id="preview" class="chat-content">

        </div>

      </div>
    </div>
    <div class="card-footer chat-footer py-1 pb-0">
      <input type="text" id="loud" class="form-control chat-message-send" placeholder="...">

    </div>
  </div>
  <!-- chat card ends -->
</div>
@endsection

@else
@section('chat-area')
<div class="chat-start">
   
  </div>
@endsection
@endif

@section('body')

<div class="app-content mt-2 content container-fluid">
  <div class="content-body">
    <div class="sidebar-left">
      <div class="chat-sidebar card">
        
        <div class="chat-sidebar-list-wrapper ps ps--active-y">
          <ul class=" nav navbar-nav chat-sidebar-list">
            @foreach($rooms as $item)
            @php
            $active = ($item->title == $group ) ? 'active' : '';
            $other = ($item->sender_id == $user->id) ? $item->receiver : $item->sender;

            @endphp
            <li class="{{$active}}">
              <a class="nav-link" href="{{route('auth.chat.with',[$user,$other])}}">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-online m-0 mr-50">
                    <img src="{{asset('theme/images/portrait/small/avatar-s-1.png')}}" class="x45  rounded-circle img-border box-shadow-1">
                    <i></i>
                  </div>
                  <div class="chat-sidebar-name pl-1">
                    <h6 class="mb-0">{{$other->name}}</h6>
                  </div>
                </div>
              </a>
            </li>

            @endforeach

          </ul>
        </div>
      </div>
    </div>
    <x-block class="content-right">

      <section id="room" class="chat-window-wrapper">
        @yield('chat-area')

      </section>
    </x-block>
  </div>
</div>
@endsection
<x-layout.simple class="bg-white  chat-application vertical-layout  container " />