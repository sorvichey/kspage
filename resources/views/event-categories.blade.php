@extends('layouts.front')
@section('content')
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
    <div class="row" >
        <div class="col-md-3">
            @foreach($event_categories as $cc)
            <?php
                $counter = DB::table('events')->where('active',1)->where('event_category', $cc->id)->count();
            ?>
                <div class="col-md-12 card card-c">
                    <a href="{{url('event-list/'.$cc->id)}}">
                        <div class="ec h-100">
                    &nbsp;<img src="{{asset('images/'.$cc->icon)}}" alt="" width="25"> &nbsp;&nbsp;&nbsp;{{$cc->name}} (<span class="text-info">{{$counter}}</span>)
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-md-9">
            <div class="row">
            @foreach($events as $ev)
            <div class="col-lg-6 col-md-6 col-sm-6 mb20">
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
    </div>
</div>
@endsection