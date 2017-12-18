

@extends('layouts.master')

@section('header_content')
<div id="layout_head">
    <p>Hi! Feel free to browse true my photos ... </p> 
    <p>To view my full photo gallery visit my <a id="a_style" href="https://www.flickr.com/photos/135275254@N04/"><span style="text-decoration: underline">flickr page</span></a> </p> 
</div>

@endsection

@section('body_content')




    <style>
        
        .circle_img{
            display: inline-block;
            height:200px;
            width:250px;
        }
         .imageDiv{
             
      
            margin-left: 50px;
            background: #fff;
           
            width: 200px;
            height: 200px;
          

                -moz-border-radius: 50%; 
                -webkit-border-radius: 50%; 
                border-radius: 50%;
            
                -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
                -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
                box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5), 0 0 40px rgba(0, 0, 0, 1) inset;
            }
        
            .imageDiv1 {
                
                width: 190px;
                height: 195px;
                background-color: transparent;
                background-size:cover;
            }

        .bottomDiv {
            
           position:relative;
           bottom:200px;
           left:5px;
        }
 
        
        /* CAROUSEL ---------------- */
        #myCarousel1{
            margin-top: 100px;
        }

        .carousel-control {
            height: 80px;
            margin-top: 0;
            font-size: 120px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .4);
            background-color: transparent;
            border: 0;
            z-index: 10;
        }
        .carousel .item {
            height: 500px;
        }


        @media (max-width: 979px) {

            .navbar-inner {
                border-radius: 0;
                margin: -20px 0;
            }
            .carousel .item {
                height: 500px;
            }

        @media (max-width: 767px) {
            .navbar-inner {
                margin: -20px;
            }
            .carousel {
                margin-left: -20px;
                margin-right: -20px;
            }
/*
            .carousel .container-fluid {
            }
*/
            .carousel .item {
                height: 300px;
            }
  
        }

    </style>


    <div id="myCarousel1" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <img src="/img/1.jpg" alt="">
          
            </div>
            <div class="item">
                <img src="/img/2.jpg" alt="">
              
            </div>
            <div class="item">
                <img src="/img/3.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/4.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/5.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/6.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/7.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/8.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/9.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/10.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/11.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/12.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/13.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/14.jpg" alt="">
           
            </div>
            <div class="item">
                <img src="/img/15.jpg" alt="">
           
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next">&rsaquo;</a>
    </div>

<hr class="hr_override"> 

<div clas="col-lg-6  col-md-2 col-sm-4 col-xs-12">
<div class="circle_img">
    
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/12.png')"></div>
</div>

<div class="circle_img">
        <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/8.png')"></div>
</div>

<div class="circle_img">
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/11.png')"></div>
</div>

<div class="circle_img">
    
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/7.png')"></div>
</div>

<div class="circle_img">
        <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/4.png')"></div>
</div>

<div class="circle_img">
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/15.png')"></div>
</div>
<div class="circle_img">
    
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/1.png')"></div>
</div>

<div class="circle_img">
        <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/2.png')"></div>
</div>

<div class="circle_img">
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/14.png')"></div>
</div>
<div class="circle_img">
    
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/9.png')"></div>
</div>

<div class="circle_img">
        <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/13.png')"></div>
</div>

<div class="circle_img">
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/6.png')"></div>
</div>
<div class="circle_img">
    
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/3.png')"></div>
</div>

<div class="circle_img">
        <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/5.png')"></div>
</div>

<div class="circle_img">
    <div class="imageDiv"></div>
    <div class="imageDiv imageDiv1 bottomDiv" style="background-image: url('img/10.png')"></div>
</div>
</div>

    <!-- /.navbar-wrapper -->
    <!-- Carousel -->



    
    <!-- /.container -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script>
        ! function($) {
            $(function() {
                // carousel demo
                $('#myCarousel1').carousel()
            })
        }(window.jQuery)
    </script>






@endsection

