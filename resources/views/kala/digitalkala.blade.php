@extends('master')

@section('content')

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
                        <a href="/digitalkala">کالای دیجیتال</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>

     <!--  ==========  -->
        <!--  = Featured Items =  -->
        <!--  ==========  -->
        <div class="row featured-items blocks-spacer">
            <div class="span12">
                
                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
            	<div class="main-titles lined">
            	    <h2 class="title" style="margin-top: 30px ; margin-right:30px"><span class="light">محصولات</span> ویژه</h2>
            	    <div class="arrows">
                        <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                        <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
                    </div>
            	</div>
            </div>
            
            <div class="span12">
                <!--  ==========  -->
                <!--  = Carousel =  -->
                <!--  ==========  -->
                <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
                    <div class="slide">
                        <div class="row">
                    	 
                    	 
                    	
                    	 
                	            	
    	            	<!--  ==========  -->
    					<!--  = Product =  -->
    					<!--  ==========  -->
    	            	<div class="span4" style="margin-right:20px">
    	            	    <div class="product">
    	            	        <div class="product-img featured">
    	            	            <div class="picture">
    	            	        	    <img src="webmarket/images/dummy/featured-products/featured-1.png" alt="" width="518" height="358" />
    	            	        		<div class="img-overlay">
    	            	        		    <a href="kalaexplanation" class="btn more btn-primary">توضیحات بیشتر</a>
    	            	        		    <a href="#" class="btn buy btn-danger">خرید</a>
    	            	        		</div>
    	            	            </div>
    	            	        </div>
    	            	        <div class="main-titles">
    	            	            <h4 class="title">$115</h4>
    	            	            <h5 class="no-margin">محصول ویژه 652</h5>
    	            	        </div>
    	            	        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
    	            	        <p class="center-align stars">
                    	            <span class="icon-star stars-clr"></span>
                    	            <span class="icon-star stars-clr"></span>
                    	            <span class="icon-star stars-clr"></span>
                    	            <span class="icon-star stars-clr"></span>
                    	            <span class="icon-star stars-clr"></span>
                    	             
                    	        </p>
    	            	    </div>
                          </div> <!-- /product -->
                          
                        </div> 
                	</div>
                </div> <!-- /carousel -->
            </div>
            
        </div>
    </div> <!-- /container -->
    	            	 
        @endsection
                    	