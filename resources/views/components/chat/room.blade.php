@props(['user','group'=>'public'])
@push('css')
@php
$now = now()->timestamp;
@endphp
<style>
  .chat .content {
    height: 420px;
    overflow: auto;
    scrollbar-width: thin;
    scrollbar-color: #90A4AE #CFD8DC;
  }

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

  /*
    #display,#preview{
      position:absolute;
      width: 100%;
      bottom:0;
    }
    */
</style>

@endpush

@push('script')


<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-firestore.js"></script>
<script src="{{asset('theme/js/firebase.js')}}"></script>
<script>
  /************setting*******/
  var index = 0;
  var name = "{{ $user }}";
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
      'name': name,
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
    out = '<div class="chat-body">'
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
      side = (item.name == name) ? 'chat' : 'chat chat-left';

      out += '<div data-id=' + item.id + ' class="' + side + '" >';
      out += '<div class="chat-avatar ">' + item.name + '</div>';
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
    //query = query.where('index','>',index);

    setInterval(() => {
      stamp++;
    }, 1000);
    press();
    render();

    setInterval(() => {
        push();
      },
      2500);

  });
</script>

@endpush

{{ now()->timestamp }}<br />
<div id="now"></div>
<div class="content-header">
  {{ $group }} : {{ $user }}
</div>
<section id="room" class="chat-window-wrapper">

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
      <div class="card-footer chat-footer px-2 py-1 pb-0">
        <input type="text" id="loud" class="form-control chat-message-send mx-1" placeholder="Type your message here...">

      </div>
    </div>
    <!-- chat card ends -->
  </div>
</section>