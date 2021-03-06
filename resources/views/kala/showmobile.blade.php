@extends('master')

@section('content')

<style>
    .check1
    {
        border-radius: 4px !important;
        background: #fff !important;
        border: 1px solid #d8d8d8 !important;
    }
</style>
  
    
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
                            <a href="/shopmobile">موبایل</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up blocks-spacer">
            <div class="row">
                
                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
                <aside class="span3 left-sidebar" id="tourStep1">
                    <div class="sidebar-item sidebar-filters" id="sidebarFilters">
                        
                        <!--  ==========  -->
                        <!--  = Sidebar Title =  -->
                        <!--  ==========  -->
                        <div class="underlined">
                        	<h3><span class="light">بر اساس فیلتر</span> خرید کنید</h3>
                        </div>
                        
                        <!--  ==========  -->
                        <!--  = Categories =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep2">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">دسته بندی ها <b class="caret"></b></a>
                            </div>
                            <div id="filterOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
<input type="checkbox"   class="check1"   > سامسونگ <br>
<input type="checkbox"   class="check1"> اپل <br>
<input type="checkbox"   class="check1"> هواوی<br>
<input type="checkbox"   class="check1" > شیائومی<br>
<input type="checkbox"   class="check1" > نوکیا<br>
<input type="checkbox"   class="check1" > بلک‌بری<br>
<input type="checkbox"   class="check1" > ال‌جی<br>
<input type="checkbox"   class="check1"> ‌اچ‌تی‌سی<br>
<input type="checkbox"   class="check1" > ایسوس<br>
<input type="checkbox"   class="check1"> سونی<br>
<input type="checkbox"  class="check1"> موتورلا<br>
<input type="checkbox"  class="check1" > لنوو<br>
 
                                
<input type="checkbox" class="check1" > آنر<br>
                            
                        </div> <!-- /categories -->
                        
                        <!--  ==========  -->
                        <!--  = Prices slider =  -->
                        <!--  ==========  -->
                        <!-- <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">قیمت <b class="caret"></b></a>
                            </div>
                            <div id="filterPrices" class="accordion-body in collapse">
                                <div class="accordion-inner with-slider">
                                    <div class="jqueryui-slider-container">
                                        <div id="pricesRange"></div>
                                    </div>
                                    <input type="text" data-initial="432" class="max-val pull-right" disabled />
                                    <input type="text" data-initial="99" class="min-val" disabled />
                                </div>
                            </div>
                        </div> -->
                         <!-- /prices slider -->
                        
                        <!--  ==========  -->
                        <!--  = Size filter =  -->
                        <!--  ==========  -->
                        <!-- <div class="accordion-group" id="tourStep3">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterTwo">سایز <b class="caret"></b></a>
                            </div>
                            <div id="filterTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="xs" data-type="size" class="selectable detailed"><i class="box"></i> XS</a>
<a href="#" data-target="s" data-type="size" class="selectable detailed"><i class="box"></i> S</a>
<a href="#" data-target="m" data-type="size" class="selectable detailed"><i class="box"></i> M</a>
<a href="#" data-target="l" data-type="size" class="selectable detailed"><i class="box"></i> L</a>
<a href="#" data-target="xl" data-type="size" class="selectable detailed"><i class="box"></i> XL</a>
<a href="#" data-target="xxl" data-type="size" class="selectable detailed"><i class="box"></i> XXL</a>
 
                                </div>
                            </div>
                        </div>  -->
                        <!-- /size filter -->
                        
                        <!--  ==========  -->
                        <!--  = Color filter =  -->
                        <!--  ==========  -->
                        <!-- <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterThree">رنگ <b class="caret"></b></a>
                            </div>
                            <div id="filterThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="red" data-type="color" class="selectable detailed"><i class="box"></i> قرمز</a>
<a href="#" data-target="green" data-type="color" class="selectable detailed"><i class="box"></i> سبز</a>
<a href="#" data-target="blue" data-type="color" class="selectable detailed"><i class="box"></i> آبی</a>
<a href="#" data-target="pink" data-type="color" class="selectable detailed"><i class="box"></i> صورتی</a>
<a href="#" data-target="purple" data-type="color" class="selectable detailed"><i class="box"></i> بنفش</a>
<a href="#" data-target="orange" data-type="color" class="selectable detailed"><i class="box"></i> نارنجی</a>
 
                                </div>
                            </div>
                        </div>  -->
                        <!-- /color filter -->
                        
                        <!--  ==========  -->
                        <!--  = Brand filter =  -->
                        <!--  ==========  -->
                        <!-- <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterFour">برند <b class="caret"></b></a>
                            </div>
                            <div id="filterFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="s-oliver" data-type="brand" class="selectable detailed"><i class="box"></i> S. Oliver</a>
<a href="#" data-target="nike" data-type="brand" class="selectable detailed"><i class="box"></i> Nike</a>
<a href="#" data-target="naish" data-type="brand" class="selectable detailed"><i class="box"></i> Naish</a>
<a href="#" data-target="adidas" data-type="brand" class="selectable detailed"><i class="box"></i> Adidas</a>
<a href="#" data-target="puma" data-type="brand" class="selectable detailed"><i class="box"></i> Puma</a>
<a href="#" data-target="shred" data-type="brand" class="selectable detailed"><i class="box"></i> Shred</a>
 
                                </div>
                            </div>
                        </div> -->
                         <!-- /brand filter -->
                        
                        <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> حذف همه فیلتر ها</a>
                        
                    </div>
                </aside> <!-- /sidebar -->
                
                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span9">
                    
                    <!--  ==========  -->
                    <!--  = Title =  -->
                    <!--  ==========  -->
                    <div class="underlined push-down-20">
                        <div class="row">
                            <div class="span5">
                                <h3><span class="light">همه</span> محصولات</h3>
                            </div>
                            <div class="span4">
                                <div class="form-inline sorting-by" id="tourStep4">
                                    <label for="isotopeSorting" class="black-clr">چینش :</label>
                                    <select id="isotopeSorting" class="span3">
                                        <option value='{"sortBy":"popularity"}'>محبوب‌ترین</option>
                                        <option value='{"sortBy":"low-price"}'>ارزانترین </option>
                                        <option value='{"sortBy":"high-price"}'>گرانترین </option>
                                        <option value='{"sortBy":"newest"}'>جدیدترین</option>
                                        <option value='{"sortBy":"off"}'>پرتخفیف‌ترین </option>
                                        <!-- <option value='{"sortBy":"popularity", "sortAscending":"false"}'>بر اساس محبوبیت (زیاد به کم) &darr;</option> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /title -->
                    
                    <!--  ==========  -->
                    <!--  = Products =  -->
                    <!--  ==========  -->
                    <table id="mytable" class="table table-bordred table-striped">
                   
                            <thead>

                                <th>ردیف</th>
                                <th>نام</th>
                                <th>توضیحات</th>
                                <th>دسته بندی</th>
                                <th>قیمت</th>
                                
                            </thead>
                            <tbody>
                            @foreach($Temp['kala'] as $kala)
                            
                                <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                {{-- <td>{{$kala->id}}</td> --}}
                                <td>{{$kala->name}}</td>
                                <td>{{$kala->description}}</td>
                                <td>{{$kala->categori->name}}</td>
                                <td>{{$kala->price}}</td>
                                
                                
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                
                </section>
            </div>
        </div>
    </div>
    



    @endsection














    