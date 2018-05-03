@extends('layouts.front')
@section('content')
<div class="box-head top-head">
    <h3 class="head-title text-center text-info">{{$company_category->name}} | Company List</h3>
</div>
<p></p>
<div class="container">
<div class="company-cat">
    <div class="row" >
        @foreach($companies as $cl)
            <div class="col-md-6">
                <div class="cc">   
                <a href="{{url('company-detail/'.$cl->id)}}">
                    &nbsp;&nbsp;<img src="{{url('images/'.$cl->logo)}}" alt="" width="50"> {{$cl->name}}
                </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{$companies->links()}}
</div>
<p></p>
@endsection