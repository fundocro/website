
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>title</title>
    
    <style>
    

    
    </style>
      
				
			
      
      
  </head>
  <body>

             
<footer>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="width:20%;display:none;right:0;" id="rightMenu">
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
    <a href="#" class="w3-bar-item w3-button"></a>

  <!--WHERE TO NEXT-------------------> 
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
      <!--TWITTER-------------------> 
                             <div  class="twitter">

                           <a class="twitter-timeline"  href="https://twitter.com/hashtag/laravel" data-widget-id="939926524760920064">#laravel Tweets</a>
                              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                             </div> 

      <!--SOCIAL-------------------> 
                            <div id="social" class="col-lg-2  col-md-4 col-sm-6 col-xs-12 ">


                              <a href="https://twitter.com/Yugostorm"> <i class="fa fa-twitter fa-3x" style="color:#4a4c4e;"> </i> </a> 
                              <a href="https://github.com/fundocro"> <i class="fa fa-github fa-3x" style="color:#4a4c4e;" > </i> </a> 
                               <a href="https://www.youtube.com/channel/UC7rCwik9X_4EcPtcoM6LyzA"> <i class="fa fa-youtube fa-3x" style="color:#4a4c4e;"> </i> </a> 

                            </div>

    <!--CONTACT-------------------> 

                              <h2> Contact ... </h2>


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

  <div class="w3-teal">

    <button class=" w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>

  </div>


  <script>


  function openRightMenu() {
      document.getElementById("rightMenu").style.display = "block";
  }
  function closeRightMenu() {
      document.getElementById("rightMenu").style.display = "none";
  }
  </script>     
    
</footer>   

  </body>
</html>

