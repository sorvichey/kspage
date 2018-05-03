@extends('layouts.front')
@section('content')
<div class="box-head top-head">
    <div class="container">
        <ul class="alpha">
            <li><a href="{{url('/company-category?al=All')}}">All</a></li>
            <li><a href="{{url('/company-category?al=A')}}">A</a></li>
            <li><a href="{{url('/company-category?al=B')}}">B</a></li>
            <li><a href="{{url('/company-category?al=C')}}">C</a></li>
            <li><a href="{{url('/company-category?al=D')}}">D</a></li>
            <li><a href="{{url('/company-category?al=E')}}">E</a></li>
            <li><a href="{{url('/company-category?al=F')}}">F</a></li>
            <li><a href="{{url('/company-category?al=G')}}">G</a></li>
            <li><a href="{{url('/company-category?al=H')}}">H</a></li>
            <li><a href="{{url('/company-category?al=I')}}">I</a></li>
            <li><a href="{{url('/company-category?al=J')}}">J</a></li>
            <li><a href="{{url('/company-category?al=K')}}">K</a></li>
            <li><a href="{{url('/company-category?al=L')}}">L</a></li>
            <li><a href="{{url('/company-category?al=M')}}">M</a></li>
            <li><a href="{{url('/company-category?al=N')}}">N</a></li>
            <li><a href="{{url('/company-category?al=O')}}">O</a></li>
            <li><a href="{{url('/company-category?al=P')}}">P</a></li>
            <li><a href="{{url('/company-category?al=Q')}}">Q</a></li>
            <li><a href="{{url('/company-category?al=R')}}">R</a></li>
            <li><a href="{{url('/company-category?al=S')}}">S</a></li>
            <li><a href="{{url('/company-category?al=T')}}">T</a></li>
            <li><a href="{{url('/company-category?al=U')}}">U</a></li>
            <li><a href="{{url('/company-category?al=V')}}">V</a></li>
            <li><a href="{{url('/company-category?al=W')}}">W</a></li>
            <li><a href="{{url('/company-category?al=X')}}">X</a></li>
            <li><a href="{{url('/company-category?al=Y')}}">Y</a></li>
            <li><a href="{{url('/company-category?al=Z')}}">Z</a></li>
        </ul>
    </div>
</div>
<p></p>
<div class="container">
<div class="company-cat">
    <div class="row" >
        @foreach($company_categories as $cc)
        <?php
            $counter = DB::table('companies')->where('active',1)->where('category_id', $cc->id)->count();
        ?>
            <div class="col-md-6">
                <div class="cc">   
                <a href="{{url('company-list/'.$cc->id)}}">
                   &nbsp; <i class="fa fa-play"></i>&nbsp;&nbsp;&nbsp;{{$cc->name}} (<span class="text-danger">{{$counter}}</span>)
                </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{$company_categories->appends(request()->input())->links()}}
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