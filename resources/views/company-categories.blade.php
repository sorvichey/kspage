@extends('layouts.front')
@section('content')
<div class="box-head top-head">
    <h3 class="head-title text-center">Company List</h3>
</div>
<p></p>
<div class="container">
<div class="company-cat">
    <div class="row" >
        @foreach($company_categories as $cc)
            <div class="col-md-6">
                <div class="cc">   
                <a href="{{url('company-list/'.$cc->id)}}">
                    &nbsp;&nbsp;<img src="{{url('images/default.png')}}" alt="" width="20"> {{$cc->name}}
                </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{$company_categories->links()}}
</div>
<p></p>
@endsection