@extends('layouts.front')
@section('content')
<div class="box-head top-head">
    <h3 class="head-title text-center"><img src="{{url('images/'.$company->logo)}}" alt="" width="50"> | {{$company->name}}</h3>
</div>
<p></p>
<div class="container">
<div class="company-cat">
    <div class="row" >
            <div class="col-md-4">
                    Company Name :&nbsp;&nbsp; {{$company->name}}
            </div>
            <div class="col-md-4">
                    Office Email :&nbsp;&nbsp; {{$company->office_email}}
            </div>
            <div class="col-md-4">
                    Office Phone :&nbsp;&nbsp; {{$company->office_phone}}
            </div>
            <div class="col-md-4">
                    Business Type :&nbsp;&nbsp; {{$business_type->name}}
            </div>
            <div class="col-md-4">
                    Category :&nbsp;&nbsp; {{$company_category->name}}
            </div>
            <div class="col-md-4">
                Link to Profile :&nbsp;&nbsp; <a href="{{$company->website}}" target="_blank">{{$company->website}}</a>
            </div>
            <div class="col-md-12">
                    Address :&nbsp;&nbsp; {{$company->address}}
            </div>
            <div class="col-md-12">
                <b>prifile:</b>  {!!$company->profile!!}</a>
            </div>
        </div>
    </div>
</div>
<p></p>
@endsection