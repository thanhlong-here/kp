@props([
'query',
'total' => 12,
])

@php
$list = $query->paginate($total);

@endphp
@push('script')

<script>
  function changeState(sta, route) {
    data = new FormData();
    data.append("status", sta);
    data.append("_token", "{{ csrf_token() }}");
    $.ajax({
      data: data,
      type: "POST",
      url: route,
      cache: false,
      contentType: false,
      processData: false,
      success: function() {
        location.reload();
      },
      error: function(xhr, status, error) {
        console.log(status + ': ' + error);
      }
    });

  }
</script>
@endpush
<div class="mb-2">
  <x-product.searchall />
</div>
<div id="table" class="table-responsive">
  <table class="table">
    <thead>

      <th style="width:24rem">
        Name
      </th>
      <th>
        Category
      </th>



      <th>
        Freelancer
      </th>
      <th>
        <span class="float-xs-right">
          Price
        </span>
      </th>
      <th>

      </th>
    </thead>
    <tbody>

      @foreach ($list as $row)
      @php
      $edit = route('products.edit',$row);
      $change = route("products.change",$row );
      $road = $row->category->road();
      $root = (count($road) == 1 ) ? $road[0] : end($road);
      @endphp
      @push('outer')
      <x-modal class="modal-xl mt-0" id="trans_en_{{$row->id}}">
        <x-product.trans :product="$row" lang="en" />
      </x-modal>
      <x-modal class="modal-xl mt-0" id="trans_kr_{{$row->id}}">
        <x-product.trans :product="$row" lang="kr" />
      </x-modal>
      @endpush

      <tr>


        <td>
          <div class="font-medium-1 text-bold-600">
            {{$row->name}}
          </div>
          <div>
            {{Theme::title('at')}} : {{$row->created_at}}
          </div>
          <div>

            <button class="btn  btn-secondary btn-sm" data-toggle="modal" data-target="#trans_en_{{$row->id}}">
              <i class="flag-icon flag-icon-gb"></i> {{Theme::title('english')}}</button>
            <button class="btn  btn-secondary btn-sm" data-toggle="modal" data-target="#trans_kr_{{$row->id}}">
              <i class="flag-icon flag-icon-kr"></i> {{Theme::title('korean')}}</button>

          </div>
        </td>
        <td>
          <span class="tag tag-pill tag-info">
            {{ $root->name ?? '' }} : :
          </span>
          <span class="font-medium-1">
            {{$row->category->name}}
          </span>
        </td>



        <td>{{$row->freelancer->name}}</td>
        <td class="font-medium-1 text-bold-600">
          <span class="float-xs-right">
            {{number_format($row->price)}}đ
          </span>
        </td>
        <td>

          <span class="tag tag-pill tag-success">
            {{$row->status}}
          </span>
          @switch($row->status)
          @case('publish')
          <button onclick="changeState('unpublish','{{$change}}' )" class="tag tag-pill">
            unpublish
          </button>
          @break
          @case('preview')
          <button onclick="changeState('publish','{{$change}}' )" class="tag tag-pill">
            publish
          </button>
          @break
          @default
          <button onclick="changeState('publish','{{$change}}' )" class="tag tag-pill">
            publish
          </button>
          @endswitch
        </td>

      </tr>
      @endforeach
    </tbody>

  </table>


  <div class="pull-right">
    {{$list->render('vendor.pagination.simple')}}

  </div>
</div>