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