@php
$labels = "['".implode("','",$x)."']";
$customer= "[".implode(",",$customer)."]";
$order = "[".implode(",",$order)."]";
$service = "[".implode(",",$service)."]";
@endphp

@push('css')

<link rel="stylesheet" type="text/css" href="{{ asset('theme/css/core/colors/palette-gradient.css') }}">

@endpush

@section('title')
<div class="content-header-left col-md-6 col-xs-12 mb-1">
    <h3 class="content-header-title">
        {{ __("Dashboard") }}

    </h3>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-primary bg-darken-2 media-left media-middle">
                        <i class="icon-social-dropbox font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-primary white media-body">
                        <h5>{{__("Số dịch vụ")}}</h5>
                        <h5 class="text-bold-400">{{ $summary['product'] }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-danger bg-darken-2 media-left media-middle">
                        <i class="icon-user font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-danger white media-body">
                        <h5>{{__("Số khách hàng")}}</h5>
                        <h5 class="text-bold-400">{{ $summary['customer'] }} </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-warning bg-darken-2 media-left media-middle">
                        <i class="icon-basket-loaded font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-warning white media-body">
                        <h5>{{__('Số đơn hàng')}}</h5>
                        <h5 class="text-bold-400">{{ $summary['order'] }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-success bg-darken-2 media-left media-middle">
                        <i class="icon-wallet font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-success white media-body">
                        <h5>{{__("Số doanh thu")}}</h5>
                        <h5 class="text-bold-400"> {{ $summary['total'] }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{__('7 ngày gần nhất')}}</h4>

            </div>
            <div class="card-body collapse in">
                <div class="card-block chartjs">
                    <canvas id="line-chart" height="500"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{__('Freelancer mới tham gia')}}</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

            </div>
            <div class="card-body px-1">
                <div id="recent-buyers" class="list-group height-300 position-relative">
                    @foreach($freelancers as $freelancer)
                    @php
                    $avatar = empty($freelancer->avatar->src) ? asset('theme/images/avatar/king.png') : asset($freelancer->avatar->src);
                    @endphp
                    <a href="#" class="list-group-item list-group-item-action media no-border">
                        <div class="media-left">
                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="{{ $avatar }}" alt="{{$freelancer->name}}">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h6 class="list-group-item-heading">{{$freelancer->name}}</h6>
                            <p class="list-group-item-text"><span class="tag tag-primary">{{$freelancer->job}}</span></p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script src="{{asset('theme/js/charts/chart.min.js')}}"></script>
<script src="{{asset('theme/js/charts/chartist.min.js')}}"></script>
<script src="{{asset('theme/js/charts/raphael-min.js')}}"></script>
<script src="{{asset('theme/js/charts/morris.min.js')}}"></script>
<script src="{{asset('theme/js/charts/chartist-plugin-tooltip.js')}}"></script>

<script>
    $('#recent-buyers').perfectScrollbar({
        wheelPropagation: true
    });

    $(window).on("load", function() {

        //Get the context of the Chart canvas element we want to select
        var ctx = $("#line-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
            },
            hover: {
                mode: 'label'
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: '{{__("Thời gian")}}'
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: '{{__("Tổng số")}}'
                    }
                }]
            },
            title: {
                display: true,
                text: '{{__("7 ngày gần nhất")}}'
            }
        };

        // Chart Data
        var chartData = {
            labels: {!!$labels!!},
            datasets: [{
                label: "{{__('Khách hàng')}}",
                data: {{$customer}},
                fill: false,
                borderDash: [5, 5],
                borderColor: "#9C27B0",
                pointBorderColor: "#9C27B0",
                pointBackgroundColor: "#FFF",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
            }, {
                label: "{{__('Dịch vụ')}}",
                data: {{$service}},
                fill: false,
                borderDash: [5, 5],
                borderColor: "#00A5A8",
                pointBorderColor: "#00A5A8",
                pointBackgroundColor: "#FFF",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
            }, {
                label: "{{__('Đơn đặt hàng')}}",
                data: {{$order}},
                lineTension: 0,
                fill: false,
                borderColor: "#FF7D4D",
                pointBorderColor: "#FF7D4D",
                pointBackgroundColor: "#FFF",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
            }]
        };

        var config = {
            type: 'line',

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var lineChart = new Chart(ctx, config);
    });
</script>
@endpush
<x-layout.back />