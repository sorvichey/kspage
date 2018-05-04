@extends('layouts.front')
@section('content')
    <div class="box-head top-head">
        <h3 class="head-title text-center"><img src="{{asset('images/'.$event_category->icon)}}" width="30" alt=""> {{$event_category->name}} | Event List</h3>
    </div>
    <style>
        .price {
            padding: 0px 10px;
            color: #fff;
            background: #2196F3;
            position: absolute;
        }
    </style>
    <p></p>
    <div class="container">
        <div class="row">
            @foreach($events as $ev)
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb20">
                <div class="product-block h-100">
                    <div class="product-img">
                        <aside class="price">
                            {{$ev->price}}
                        </aside>
                        <a href="{{url('/event/detail/'.$ev->id)}}"><img src="{{asset('./images/s2.jpeg')}}" width="100%" alt=""></a>
                    </div>
                    <div align="left" class="product-content">
                        <h5  class="text-info">
                            <i class="fa fa-calendar-check-o"></i> {{$ev->event_date}} <b>-</b> <i class="fa fa-clock-o" ></i> {{$ev->start_time }}
                        </h5>
                        <h4>{{$ev->title}}</h4>
                        <h5  class="text-info">
                            <i class="fa fa-map-marker"></i> {{$ev->location}}
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>
        <div class="row">
            <div class="col-md-12">
            {{$events->links()}}
            </div>
        </div>
    </div>
    @endsection