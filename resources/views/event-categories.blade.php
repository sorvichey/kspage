@extends('layouts.front')
@section('content')
<style>
    .ac {
        color: #fff;
        background: #000!important;
    }
    ul.alpha li a:hover {
        color: #fff;
        background: #000;
    }
</style>
<div class="box-head top-head">
    <div class="container">
        <ul class="alpha">
            <li><a href="{{url('/event-category?al=All')}}">All</a></li>
            <li><a href="{{url('/event-category?al=A')}}">A</a></li>
            <li><a href="{{url('/event-category?al=B')}}">B</a></li>
            <li><a href="{{url('/event-category?al=C')}}">C</a></li>
            <li><a href="{{url('/event-category?al=D')}}">D</a></li>
            <li><a href="{{url('/event-category?al=E')}}">E</a></li>
            <li><a href="{{url('/event-category?al=F')}}">F</a></li>
            <li><a href="{{url('/event-category?al=G')}}">G</a></li>
            <li><a href="{{url('/event-category?al=H')}}">H</a></li>
            <li><a href="{{url('/event-category?al=I')}}">I</a></li>
            <li><a href="{{url('/event-category?al=J')}}">J</a></li>
            <li><a href="{{url('/event-category?al=K')}}">K</a></li>
            <li><a href="{{url('/event-category?al=L')}}">L</a></li>
            <li><a href="{{url('/event-category?al=M')}}">M</a></li>
            <li><a href="{{url('/event-category?al=N')}}">N</a></li>
            <li><a href="{{url('/event-category?al=O')}}">O</a></li>
            <li><a href="{{url('/event-category?al=P')}}">P</a></li>
            <li><a href="{{url('/event-category?al=Q')}}">Q</a></li>
            <li><a href="{{url('/event-category?al=R')}}">R</a></li>
            <li><a href="{{url('/event-category?al=S')}}">S</a></li>
            <li><a href="{{url('/event-category?al=T')}}">T</a></li>
            <li><a href="{{url('/event-category?al=U')}}">U</a></li>
            <li><a href="{{url('/event-category?al=V')}}">V</a></li>
            <li><a href="{{url('/event-category?al=W')}}">W</a></li>
            <li><a href="{{url('/event-category?al=X')}}">X</a></li>
            <li><a href="{{url('/event-category?al=Y')}}">Y</a></li>
            <li><a href="{{url('/event-category?al=Z')}}">Z</a></li>
        </ul>
    </div>
</div>
<p></p>
<div class="container">

    <div class="row" >
        @foreach($event_categories as $cc)
        <?php
            $counter = DB::table('events')->where('active',1)->where('event_category', $cc->id)->count();
        ?>
            <div class="col-md-4 card card-c">
                <a href="{{url('event-list/'.$cc->id)}}">
                    <div class="ec h-100">
                   &nbsp;<img src="{{asset('images/'.$cc->icon)}}" alt="" width="30"> &nbsp;&nbsp;&nbsp;{{$cc->name}} (<span class="text-danger">{{$counter}}</span>)
                   </div>
                </a>
            </div>
        @endforeach
        </div>
        <br>
    <div class="row">
    {{$event_categories->appends(request()->input())->links()}}
    </div>
</div>
<p></p>
@endsection
@section('js')
<script>
    var al = "{{$al}}";
    $(document).ready(function(){
        $("ul.alpha li a").removeClass('ac');
        $("ul.alpha li a:contains('"+al+"')").addClass('ac');
    });
</script>
@endsection