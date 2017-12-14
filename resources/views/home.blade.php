@extends('layouts.master')
@section('header_content')
 
<div id="layout_head"> 
    
 <p>Hi, welcome to my digital world!</p>
    <p> 
        I really didn't know what to put here so I decided to put some of my favorite quotes...
    </p> 

</div>

      <div id="qote_widget" align="left">
                <iframe align="center" src="http://widget.calendarlabs.com/v1/quot.php?                         cid=101&uid=3423316097&c=random&l=en&cbg=FFFFFF&cb=1&cbc=000000&cf=calibri&cfg=000000&qfs=bi&qta=center&tfg=000000&tfs=bi&afc=000000&afs=i" width="188" height="210" marginwidth=0 marginheight=0 frameborder=0 scrolling=no allowtransparency='true'>Loading...
                </iframe>
                  <div align="center" style="width:240px;font-size:10px;color:#333;">Daily Quotes by 
                      <a href="https://www.calendarlabs.com/" target="_blank" rel="nofollow" style="font-size:10px;text-decoration:none;color:#333;">CalendarLabs</a>
                  </div>
              </div>
           

@endsection

@section('body_content')
<style>
    
 
    .body_content{
       margin: 0 auto;
    }
    
    .quote_container{
        
        position:inherit;
        width: 710px;
        height: 350px;
        left: 365px;
        top: 158px;

        background: rgb(208, 208, 208);
        box-shadow: 4px 8px 5px rgba(144, 144, 144, 0.5);
    }
    
     @font-face {
    font-family: 'croissant_oneregular';
    src: url('fonts/croissantone-regular-webfont.woff2') format('woff2'),
         url('fonts/croissantone-regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
    .quote_text_head{
        
        position: absolute;
        
        margin: 5px;
        font-family: 'croissant_oneregular';
        line-height: normal;
        font-size: 24px;
        text-align: center;
        letter-spacing: 0.12em;

        color: #2d2d2d;
    }
    .quote_text_body{
        
        position: inherit;
        
        padding: 35px;
        font-family:serif;
        font-style:oblique;
        font-weight: normal;
        line-height: 34px;
        font-size: 21px;
        letter-spacing: 0.06em;
        text-indent: 20px;

        color: #000000;
    }
    
    .quote_text_author{
        position: inherit;
       
        font-family: 'croissant_oneregular';
        line-height: normal;
        font-size: 24px;
        text-align:right;
        letter-spacing: 0.12em;

        color: #a5a5a5;
    }
    
    @font-face {
    font-family: 'croissant_oneregular';
    src: url('fonts/croissantone-regular-webfont.woff2') format('woff2'),
         url('fonts/croissantone-regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
    .inline{
 
        margin: 10px;
        width: 200px;
        height:300px;
        display: inline-block;

        background: rgb(105, 105, 105);
        box-shadow: 4px 8px 5px rgba(144, 144, 144, 0.5);
    }
    

</style> 
<div class="body_content"> 
    

              <div class="quote_container">
                <div class="quote_text_head">
                    <p>"The Secret" Day 96:</p>
                </div>
                  
                <div class="quote_text_body">
                           
        <br> 
        <br>
        <p>When you ask for happiness and a beautiful life, ask not just for you, but for everyone. When you ask for something better, ask not just for you, but for everyone. By all means ask for abundance and health for you, but also ask for it to be given to everyone. Can you imagine what would happen if six billion people asked for these things for you?<br> </p>  
             <div class="quote_text_author">
                <p>Rhonda Byrne</p>
            </div>
                </div>
        
              </div>

    <hr class="hr_override"> 
    {{--end container fluid 1 --}}
    

              <div class="quote_container">
                <div class="quote_text_head">
                    <p>"The Secret" Day 28:</p>
                </div>
                  
                <div class="quote_text_body">
                           
        <br> 
        <p> To create your tomorrow, go over your day when you are in bed tonight just before you fall asleep, and feel gratitude for the good moments. If there was something you wanted to happen differently, replay it in your mind the way you wanted it to go. As you fall asleep, say, "I will sleep deeply and wake up full of energy. Tomorrow is going to be the most beautiful day of my life." Good night!<br> </p>  
             <div class="quote_text_author">
                <p>Rhonda Byrne</p>
            </div>
                </div>
        
              </div>
   
   
    <hr class="hr_override"> 
    {{--end container fluid 2--}}
    

              <div class="quote_container">
                <div class="quote_text_head">
                    <p>"The Secret" Day 35:</p>
                </div>
                  
                <div class="quote_text_body">
                           
            <br> 
            <p> 
            The thought manifests as the word;<br> 
            The word manifests as the deed;<br> 
            The deed develops into habit;<br> 
            And habit hardens into character.<br> 
            So watch the thought and its ways with care,<br> 
            And let it spring from love<br> 
            Born out of concern for all beings.<br>
            </p>  
             <div class="quote_text_author">
                <p>Budha</p>
            </div>
                </div>
        
              </div>
   
    <hr class="hr_override"> 
    {{--end container fluid 3--}}
    

              <div class="quote_container">
                <div class="quote_text_head">
                    <p>"The Secret" Day 38:</p>
                </div>
                  
                <div class="quote_text_body">
                           
            <br> 
            <p> 
            We are entirely free to choose whatewer we want. The power is in your hands now, and you are the one 
            who chooses how to use that power in your own life.<br> 
            You can choose:<br> 
            To have a happier life today, or put it off until tomorrow.
            What feels better? You choose.<br> </p>  
             <div class="quote_text_author">
                <p>Rhonda Byrne</p>
            </div>
                </div>
        
              </div>

    <hr class="hr_override"> 
    {{--end container fluid 4--}}
    
    
    <div class="container-fluid ">
      <div class="row-fluid ">
          <div class="span8  ">
              

                  <a href="https://www.thesecret.tv/products/the-secret-book/"><img class="inline" style="background-image: url('img/secret.jpg');background-size:cover;"></a>
            </div>   

              
          </div>
      </div>  
         

</div>{{--body_content--}}

@endsection

