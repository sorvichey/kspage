@extends('layouts.front')
@section('content')
<div class="box-head top-head">
    <h3 class="head-title text-center text-danger"> {{$company_category->name}} | Company Detail</h3>
</div>
<p></p>
<div class="container">
<div class="company-cat">
    <div class="row" >
            <div class="col-md-3">
                <div align="center">
                <img src="{{url('images/'.$company->logo)}}" alt="" width="120">
                        <h3 class="text-danger"> {{$company->name}}</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-md-12">
                        Office Email :&nbsp;&nbsp; <span class="text-info">{{$company->office_email}}</span>
                </div>
                <div class="col-md-12">
                        Office Phone :&nbsp;&nbsp;<span class="text-info">{{$company->office_phone}}</span>
                </div>
                <div class="col-md-12">
                        Business Type :&nbsp;&nbsp; <span class="text-info">{{$business_type->name}}</span>
                </div>
                <div class="col-md-12">
                    Link to Profile :&nbsp;&nbsp; <a href="{{$company->website}}" target="_blank"><span class="text-info">{{$company->website}}</span></a>
                </div>
                <div class="col-md-12">
                    Address :&nbsp;&nbsp; <span class="text-info">{{$company->address}}</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12">
                    <hr>
                        <h4 align="center" class="text-danger">Company Profile </h4>
                    <hr>
                      {!!$company->profile!!}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<p></p>
@endsection