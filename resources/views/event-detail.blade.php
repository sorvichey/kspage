@extends('layouts.front')
@section('content')
<style>
    .price {
        padding: 5px 15px;
        color: #fff;
        background: #2196F3;
        position: absolute;
        font-size: 17px;
    }
    .text-gray {
        color: #666;
        font-size: 17px;
    }
</style>
<div class="box-head top-head">
    <h3 class="head-title text-center"><img src="{{asset('images/'.$event_category->icon)}}" width="30" alt=""> {{$event_category->name}} | Event Detail</h3>
</div>
<div class="container">
    <div class="company-cat">
        <div class="product-img">
            <aside class="price">
                {{$event->price}}
            </aside>
            <img src="{{asset('./images/s2.jpeg')}}" width="100%" alt="">
        </div>
        <div class="col-md-12">
            <h1> {{$event->title}}</h1>
            <div class="text-gray"><i class="fa fa-calendar-check-o text-info" ></i> {{$event->event_date}} <i class="fa fa-clock-o text-info" ></i> {{$event->start_time }}  <b>-</b> {{$event->end_time }}</div>
            <div class="text-gray"><i class="fa fa-map-marker text-info"></i> {{$event->location}}</div>
            <div class="text-gray"> <i class="fa fa-user text-info"></i> <b>{{$event->event_organizor}}</b> <a class="btn btn-success btn-xs float-right" href="{{$event->register_link}}">Register Now</a> </div>
            <hr>
            <aside>{!!$event->description!!}</aside>
            <hr>
            <div>
                <iframe src="{{$event->map}}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<p></p>
@endsection