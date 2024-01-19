@include('admin/master/tieude')
@include('admin/master/danhmuc')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                        <span><img src="{{asset('admin/icon/dash1.svg')}}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="{{$data['countOrderInMonth']}}"></span> đơn</h5>
                        <h3 class="page-header">Số đơn trong tháng: {{number_format($data['countOrderInMonth'])}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="{{asset('admin/icon/dash2.svg')}}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="{{$data["sumPriceOrderInMonth"]}}"></span> VNĐ</h5>
                        <h3 class="page-header">Danh thu trong tháng: {{number_format($data["sumPriceOrderInMonth"]). ' VNĐ'}} </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><img src="{{asset('admin/icon/dash4.svg')}}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="{{$data['tanglen']}}"></span> đơn</h5>
                        <h3 class="page-header">Đơn hàng tăng so với tháng trước: {{number_format($data['tanglen'])}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="{{asset('admin/icon/dash3.svg')}}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5><span class="counters" data-count="{{$data["giamdi"]}}"></span> đơn</h5>
                        <h3 class="page-header">Đơn hàng giảm so với tháng trước: {{number_format($data["giamdi"])}}</h3>
                    </div>
                </div>
            </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	@include('admin/master/thongtin')