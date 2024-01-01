@php
$arr_delivery = [
'24h' => '24 giờ',
'3days' => '3 ngày',
'7days' => '7 ngày',
];
$arr_budget = [
'less500' => '< 500.000', '500-1500'=> '500.000 - 1.500.000',
    'than1500' => '> 1.500.000',
    ];
    @endphp
    <div class="row">
        <div class="col-xs-8">
            <div class="btn-group mr-1 mb-1">
                <button type="button" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> {{__('Ngân sách')}}</button>
                <div class="dropdown-menu">
                    @foreach($arr_budget as $key=>$bud )
                    <a class="dropdown-item" href="{{Theme::url(['budget'=>$key])}}">{{ $bud }}</a>
                    @endforeach

                </div>
            </div>
            <div class="btn-group mr-1 mb-1">
                <button type="button" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> {{__('Thời gian bàn giao')}}</button>
                <div class="dropdown-menu">
                    @foreach($arr_delivery as $key=>$delivery )
                    <a class="dropdown-item" href="{{Theme::url(['delivery'=>$key])}}">{{ $delivery }}</a>
                    @endforeach

                </div>
            </div>

        </div>
        <div class="col-xs-4">
            <div class="float-xs-right btn-group mr-1 mb-1">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Sắp xếp')}}</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{Theme::url(['sortby'=>'sale'])}} ">{{__("Bán chạy nhất")}}</a>
                    <a class="dropdown-item" href="{{Theme::url(['sortby'=>'suggest'])}}">{{__("Theo đề xuất")}}</a>
                    <a class="dropdown-item" href="{{Theme::url(['sortby'=>'newest'])}} ">{{__("Dịch vụ mới")}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-1">
        @if(request('budget'))
        <a href="{{Theme::url(['budget'=>''])}}" class="tag tag-success tag-pill">
            {{$arr_budget[request('budget')]}}
        </a>
        @endif

        @if(request('delivery'))
        <a href="{{Theme::url(['delivery'=>''])}}" class="tag  tag-success tag-pill">
            {{$arr_delivery[request('delivery')]}}
        </a>
        @endif

    </div>