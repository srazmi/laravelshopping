@extends('master')

@section('content')

    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">صفحه اصلی</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="/profile">پروفایل {{Auth::user()->name}}</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container" >
        <div class="row" >

            
        
        </div>
    </div> <!-- /container -->

    @endsection
    