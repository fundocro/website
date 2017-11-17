<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gogi's Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    
  <script src="jquery/jquery-3.2.1.slim.min.js"></script>
    
  <script src="js/bootstrap.min.js"></script>
    
    
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
    .row.content {height: 450px}
    
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
        
        margin-top:5%;
        margin-bottom:5%;
      }
  </style>
    
</head>
    
<body>
    {{--    nav--}}
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
            <li><a href="#">Home</a></li>
            <li><a href="#">Photography</a></li>
            <li><a href="#">Resume Summary</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Contact</a></li>
         
            
          </ul >
            

        </div>

        <div id="wip">
          <ul class="nav navbar-nav navbar-right" >
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> WIP</a></li>
          </ul>
        </div>

            
      </div>
    </nav>
    
    @yield('content')
    
{{--footer--}}
  <hr class="hr_override">
    <footer id="footer"  class="site-footer">
      
        <div class="footer_wrapper">
             <div class="container">
             <p>liqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in </p>
            </div>
        </div>
    </footer>
</body>
</html>