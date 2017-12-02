<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gogi's Web</title>
  <meta charset="utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery-3.2.1.slim.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>

    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    
    
  <style>
      .main_body{
          
          margin-left: 20%;
          margin-right: 30%;
          display: inline-block;
        
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
  
      #wip{
          
          margin-right: 30% ;
      }
      #wip a:hover{
         color: black !important;  
      }
      #top{
          margin-top:-5%;
      }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 800px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
      
 
      
      #footer{
        border-top:0.5px solid #ccc9c9 ;
        height: 280px;
        padding-top: 10px;
        margin-top:200px;
       
    
      background: url('img/denmark.png') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
  
          
      }
      
     @font-face {
        font-family: 'Unkempt-Bold.woff';
        src: url('Unkempt-Bold.woff') format('woff');
        font-weight: normal;
        font-style: normal;

      }
      
 
      
      #qote_widget{
          margin-top: 30px;
          margin-bottom: 30px;
      } 
      

      #footer_style a{
          color: #020202b3;
          font-family:fantasy;
          font-size: 18px;
          letter-spacing: 0.12em;
      }
      #footer_style h3{
          color: #020202b3;
          font-family:monospace;
          font-size: 30px;
          letter-spacing: 0.12em;
      }
      .btn-info{
          color:#100000;
          font-family: monospace;
          font-size: large;
          background-color: #06060600;
          border-style: none;
      }
      #social i{
          margin-top: 20px;
          margin-right:10px;
      }

  </style>
    
</head>
    
<body>
    {{--nav--}}
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
{{--          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">--}}
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>

        </div>
        <div class="main_body" class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/photography') }}">Photography</a></li>
            <li><a href="{{ url('/projects') }}">Projects</a></li>
            <li><a href="{{ url('/resources') }}">Resources</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/resume') }}">Resume Summary</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>   
          </ul >
        </div>
        <div id="wip">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> WIP</a></li>
          </ul>
        </div>      
      </div>
    </nav>
    
    {{--main_body--}}
    <div class="main_body" id="top" class="container" >
        <div class="container-fluid text-center">  
          <div class="row content">

            <div  class="text-left" class="col-sm-8 " class="panel panel-default" > 
              <img src="img/logo.png" style="width:500px;margin-top:40px;">
                
                @yield('header_content')
                
              </div>
         
              <div id="qote_widget" align="left">
                <iframe align="center" src="http://widget.calendarlabs.com/v1/quot.php?                         cid=101&uid=3423316097&c=random&l=en&cbg=FFFFFF&cb=1&cbc=000000&cf=calibri&cfg=000000&qfs=bi&qta=center&tfg=000000&tfs=bi&afc=000000&afs=i" width="188" height="210" marginwidth=0 marginheight=0 frameborder=0 scrolling=no allowtransparency='true'>Loading...
                </iframe>
                  <div align="center" style="width:240px;font-size:10px;color:#333;">Daily Quotes by 
                      <a href="https://www.calendarlabs.com/" target="_blank" rel="nofollow" style="font-size:10px;text-decoration:none;color:#333;">CalendarLabs</a>
                  </div>
              </div>
         
              
{{--              <hr class="hr_override">--}}
              
            <div  class="text-left" class="col-sm-8 " class="main_body"> 
                @yield('body_content')
            </div> 
                      
          </div>{{--/ row content--}}
        </div>
           

    </div>{{--/ main_body--}}
        
{{--footer--}}

  

                
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
          
                    <div id="footer_style">
                        <div class="col-lg-4  col-md-2 col-sm-4 col-xs-6">
                            <h3> Where To Next </h3>
                            <ul>
                                <li> <a href="{{url('/photography')}}"> Wiew My Photography </a> </li>
                                <li> <a href="{{url('/projects')}}"> Projects </a> </li>
                                <li> <a href="{{url('/resources')}}"> Resources </a> </li>
                                <li> <a href="{{url('/about')}}"> About </a> </li>
                                <li> <a href="{{url('/resume')}}"> Resume Summary </a> </li>
                                <li> <a href="{{url('/contact')}}"> Contact </a> </li>
                            </ul>
                        </div>
                    </div>  
                    <div id="footer_style">
                    <div class="col-lg-3  col-md-2 col-sm-4 col-xs-6">
                        <h3> My Points Of Interest </h3>
                        <ul>
                            <li> <a href="https://laravel.com/docs/5.4/installation"> Laravel </a> </li>
                            <li> <a href="https://www.mailgun.com/"> Mailgun </a> </li>
                            <li> <a href="https://github.com/fundocro?tab=repositories"> Github </a> </li>
                            <li> <a href="https://www.hosting24.com/"> Hosting24 </a> </li>
                        </ul>
                    </div>
                        </div>
                    <div id="footer_style">
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> Message Me! </h3>
                        
                      
                        <div class="form-group">
             
                      
                        </div>
                       
                        <div class="input-append newsletter-box text-center">
                            {!!Form::open(['action'=>'mail@store'])!!}

                              <div class="form-group">
                                  
                                  {!!Form::text('title','Name:',['class'=>'form-control'])!!}
                              </div>
                            
                              <div class="form-group">
                                  
                                  {!!Form::text('email','Email:',['class'=>'form-control'])!!}
                              </div>
                            
                               <div class="form-group" style="display: inline-block">
                                  
                                   {!!Form::textarea('body','Your Question Here',['class'=>'formcontrol','rows'=>3,'cols'=>25])!!}
                               </div>
                           
                              <div class="form-group" style="display: inline-block">
                                  {!!Form::submit('SEND',['class'=>'btn btn-info'])!!}
                              </div>

                            {!!Form::close()!!}
{{--
                                    <input type="text" class="full text-left" placeholder="Name ">
                                    <input type="text" class="full text-left" placeholder="Email ">
                                    <textarea rows="4" cols="25" placeholder="Your question here" style="margin-left: 100px;margin-top: 5px;"></textarea>
                                    <button class="btn btn-info" type="button"> SUBMIT ... <i class="fa fa-long-arrow-right"> </i> </button>
--}}
                                </div>
                      </div>
                        
                    </div>
                    
                     <div id="social" class="col-lg-2  col-md-3 col-sm-6 col-xs-12 ">
                     
                     
                    <a href="https://twitter.com/Yugostorm"> <i class="fa fa-twitter fa-3x" style="color:#4a4c4e;"> </i> </a> 
                    <a href="https://github.com/fundocro"> <i class="fa fa-github fa-3x" style="color:#4a4c4e;" > </i> </a> 
                     <a href="https://www.youtube.com/channel/UC7rCwik9X_4EcPtcoM6LyzA"> <i class="fa fa-youtube fa-3x" style="color:#4a4c4e;"> </i> </a> 
             
                    </div>
                </div>
                <!--/.row--> 
            </div>
            <!--/.container--> 
        </div>
        <!--/.footer-->

        <div class="footer-bottom">
            <div class="container">
                <p class="text-center" > <span style="">2017 <a href="https://github.com/fundocro/website"><i class="fa fa-link"> G.F </i></a> </span>   </p>

            </div>
        </div>
    </footer>
                    <!--/.footer-bottom--> 

    
</body>
</html>