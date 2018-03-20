<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gogi's Web</title>
  <meta charset="utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--footer styles-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!--footer styles-->
  
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.2.1.slim.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>

    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    
    
  <style>
      .main_body{
          
          margin-left: 20%;
          margin-right: 30%;
/*          display: inline-block;*/
        
      }
    
      .navbar-inverse{
          background-color: transparent;
          border: none;
          
    
      }
      .main_body a:hover {
        color: black !important;
      }
      
      #name{
          font-family:"Comic Sans MS", "Comic Sans", cursive;
          font-weight: 600;
          margin: 50px;
      }
    /* Remove the navbar's default margin-bottom and rounded borders */ 

      .hr_override{
        border:0.5px solid #ccc9c9;
        margin-top:5%;
        margin-bottom:5%;
      }
  
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 800px}
    
    /* Set gray background color and 100% height */

    
    /* Set black background color, white text and some padding */

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
        
    
          
        
/*      
          
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
*/

       
       
      


   
/*
      background: url('img/denmark.png') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
*/
  
          
   
/*
      
     @font-face {
        font-family: 'Unkempt-Bold.woff';
        src: url('Unkempt-Bold.woff') format('woff');
        font-weight: normal;
        font-style: normal;

      }
*/
      
 
      
      #qote_widget{
          margin-top: 30px;
          margin-bottom: 30px;
      } 
      
      #a_style{
          color: #636570;
      }
      
    .wheretn{
    
      margin-left: 20px;
    
    }
      .sidebar a {
          color: #636570;
          font-family:fantasy;
          font-size: 18px;
          letter-spacing: 0.12em;
      }
      .sidebar h3{
          color: #636570;
          font-family:monospace;
          font-size: 30px;
          letter-spacing: 0.12em;
      }
      .btn-info{
          color:#100000;
          font-family: monospace;
          font-size: large;
          background-color: #636570;
          border-style: none;
      }
    
    .contact{
      margin-right: 20px;
      margin-left: 20px;
      margin-bottom: 550px;
      
    }
      #social i{
          margin-top: 20px;
          margin-left:50px;
      }
      .twitter{
          
          margin: auto;
          width:300px;
         
          margin-top: 30px;
      }
      #logo{
          margin-bottom: 20px;
      }
         #layout_head p{
        
        font-family:serif;
        font-style:oblique;
        font-weight: normal;
        line-height: 34px;
        font-size: 21px;
        letter-spacing: 0.06em;
        text-indent: 20px;
    }
          #layout_head_mini p , label{
        
        font-family:serif;
        font-style:oblique;
        font-weight: normal;
        line-height: 34px;
        font-size: 20px;
        letter-spacing: 0.03em;
        text-indent: 10px;
    }
    .body_content{
        
        margin-top: 100px;
        display: block;
    }
       .body_job{
        
        padding-top: 100px;  
        display:inline-block;
        
    }
        #body_job_right{
          margin-left: 20px;
          position: absolute;
          width:550px;
          text-align: left;
      }
   
    .img_project{
        margin-top: 50px;
        width: 800px;
        height: 450px;
    }
       .img_about{
           
        margin-bottom: 50px;
        width: 450px;
        height:500px;
        background: rgb(208, 208, 208);
        box-shadow: 4px 8px 5px rgba(144, 144, 144, 0.5);
    }
      .img_barb{
           
        margin-bottom: 50px;
        width: 700px;
        height:500px;
        background: rgb(208, 208, 208);
        box-shadow: 4px 8px 5px rgba(144, 144, 144, 0.5);
    }
        .img_job{
           
/*        margin-bottom: 50px;*/
        margin: 20px;
        width: 200px;
        height:200px;
            background: rgb(208, 208, 208);
        box-shadow: 4px 8px 5px rgba(144, 144, 144, 0.5);
/*
        background: rgb(208, 208, 208);
        box-shadow: 4px 8px 5px rgba(144, 144, 144, 0.5);
            
*/
           
    }
       #contact_forms input{
           
        box-shadow: 4px 8px 5px rgba(144, 144, 144, 0.5);   
            }
  </style>
  <script src='https://www.google.com/recaptcha/api.js'></script>  
</head>
    
<body>
    {{--nav--}}
    <div class="wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="main_body" class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/photography') }}">Photography</a></li>
            <li><a href="{{ url('/projects') }}">Projects</a></li>
            <li><a href="{{ url('/resources') }}">Resources</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/job_history') }}">Job History</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>   
          </ul >
        </div>
      </div>
    </nav>

      

  <div class="sidebar">

  <div class="w3-sidebar" 
       style="width:25%;display:none;right:0;" id="rightMenu">
    
    <button 
            onclick="closeRightMenu()" 
            class="w3-bar-item w3-button w3-large"
    >
            Close &times;
    
    </button>
    
    <a href="#" class="w3-bar-item w3-button"></a>

  <!--WHERE TO NEXT-------------------> 
                  <div class="wheretn">
                    <h3> Where To Next </h3>
                    <ul>
                        <li> <a href="{{url('/photography')}}"> Wiew My Photography </a> </li>
                        <li> <a href="{{url('/projects')}}"> Projects </a> </li>
                        <li> <a href="{{url('/resources')}}"> Resources </a> </li>
                        <li> <a href="{{url('/about')}}"> About </a> </li>
                        <li> <a href="{{url('/job_history')}}"> Job History </a> </li>
                        <li> <a href="https://laravel.com/"> Laravel </a> </li>
                        <li> <a href="https://www.hosting24.com/"> Hosting24 </a> </li>
                        <li> <a href="https://twitter.com/Yugostorm"> Twitter </a> </li>
                        <li> <a href="https://github.com/fundocro"> Github </a> </li>
                        <li> <a href=" https://www.youtube.com/channel/UC7rCwik9X_4EcPtcoM6LyzA/featured"> Youtube </a> </li>

                        <li>
                            <p> 
                                <span style="">2017 
                                    <a href="{{url('/contact')}}"><i class="fa fa-link"> G.F </i></a> 
                                </span> 
                            </p>

                        </li>
                    </ul>
                  </div>
    <hr>
      <!--TWITTER-------------------> 
                             <div  class="twitter">

                           <a class="twitter-timeline"  href="https://twitter.com/hashtag/laravel" data-widget-id="939926524760920064">#laravel Tweets</a>
                              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                             </div> 

  
      <!--SOCIAL------------------->
    
                            <h3> Contact ... </h3>
                            <div id="social">


                              <a href="https://twitter.com/Yugostorm"> <i class="fa fa-twitter fa-3x" style="color:#4a4c4e;"> </i> </a> 
                              <a href="https://github.com/fundocro"> <i class="fa fa-github fa-3x" style="color:#4a4c4e;" > </i> </a> 
                               <a href="https://www.youtube.com/channel/UC7rCwik9X_4EcPtcoM6LyzA"> <i class="fa fa-youtube fa-3x" style="color:#4a4c4e;"> </i> </a> 

                            </div>

    <hr>
    
    <!--CONTACT------------------->
                          <div class="contact">
                            <div class="input-append newsletter-box text-center">
                                {!!Form::open(['action'=>'Send_Mail@store'])!!}

                                  <div class="form-group">
                                      {!!Form::label('namee','Name:')!!}
                                      {!!Form::text('namee',null,['class'=>'form-control'])!!}
                                  </div>

                                  <div class="form-group">
                                      {!!Form::label('email','Email:')!!}
                                      {!!Form::text('email',null,['class'=>'form-control'])!!}
                                  </div>

                                   <div class="form-group" style="display: inline-block">

                                       {!!Form::textarea('body','',['class'=>'formcontrol','rows'=>6,'cols'=>40])!!}
                                   </div>

                                  <div class="form-group" style="display: inline-block">
                                      {!!Form::submit('SEND',['class'=>'btn btn-info'])!!}
                                  </div>

                                {!!Form::close()!!}
                            </div>
                          </div>


  </div>

  <div class="w3-teal">

    <button class=" w3-xlarge w3-right" style="margin-right: 20%;"
            onclick="openRightMenu()">&#9776; 
    </button>

  </div>


  <script>


  function openRightMenu() {
      document.getElementById("rightMenu").style.display = "block";
  }
  function closeRightMenu() {
      document.getElementById("rightMenu").style.display = "none";
  }
  </script>     
    
</div>
<!--END SIDEBAR-->
      
      
      
      
    
    {{--main_body--}}
    <div class="main_body" class="container" >
        <div class="container-fluid text-center">  
          <div class="row content">
            <p class="text-left" style="margin-top: 20px;color:#df6e6e;font-size:large;text-decoration: underline;">{{ Session::get('message') }}</p>
            @include('includes.error')
            <div  class="text-left" class="col-sm-8 " class="panel panel-default" > 
              <img id="logo" src="img/logo.png" style="width:500px;margin-top:40px;">
                
                @yield('header_content')
                
              </div>
         
              
            <div  class="text-left" class="col-sm-8 " class="main_body"> 
                  
                @yield('body_content')
                
            </div> 
            
            
                      
          </div>{{--/ row content--}}
        </div>
           

    </div>{{--/ main_body--}}
  
        
</div>{{--/ wrapper--}}
 
    
</body>
   
</html>