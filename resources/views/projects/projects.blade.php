

@extends('layouts.master')

@section('header_content')

    <div id="layout_head">
        <p>
            I bet you were expecting something fancy here :) <br>
            But it's just some of my noob web projects. <br>
            Take a peek! 
        </p>
    </div>
@endsection

@section('body_content')

<div class="body_content" id="layout_head_mini" >
        
    <h4>First of them is of course my website.</h4><br>
    <p>
    I can say it is my first website crated from scratch.<br>
    As you can see I try to make it simple and readable, constantly implementing newly learned skills.<br>
    So I could say that my site is a direct representation of my skills as a beginner web developer...<br>
    To describe my site in a few words, and not trying to be smart about it, I could say:<br>
    " It's a slow old-timer with Bootstrap body, Laravel engine under the hood, and poorly painted by good old CSS:)<br>
    Definitely work in progress...

    </p>
    
    
</div>
<hr class="hr_override">

{{--//foto--}}

<div class="body_content" id="layout_head_mini" >
        
    <h4>Fotocubicle is my biggest occupation and challenge</h4><br>
    <p>
        <a href="https://fotocubicle.com/"><span style="text-decoration: underline">Fotocubicle</span></a>
         is a photo-stock like website that allow's you to upload and store your photography with possibillity to sell or buy new photos.<br>
        Website offers more that that, it can be set-up to sell prints, phone cases, bags, T-shirts. 

    </p>
    <img  class="img_project" src="/img/fotocubi.png"  alt="whops something went wrong lol!">
    
</div>
<hr class="hr_override">




{{--/foto--}}






<div class="body_content" id="layout_head_mini">
        
    
<h4>Third project that I would like to present here</h4><br>
    <p>
Is my little <a href="#"><span style="text-decoration: underline">Snippets app</span></a>  that I made to store my snippets dooh :)<br>
It is powered by Laravel of course, with possibility to login/register <br>
Therefore enabling new user -> admin controls/using app functions.<br>
Functions are simple CRUD data(snippets) manipulation to belonging database.<br>
The main idea behind this was for me to be able to access my snippets on any device.
    </p>
    
  
       <img  class="img_project" src="/img/snippets.jpg"  alt="whops something went wrong lol!">

    

</div>
<hr class="hr_override">

<div class="body_content" id="layout_head_mini">
        
    
<h4>Now we come to my mini newb TwitterShoutout </h4><br>
    <p>
<a href="#"><span style="text-decoration: underline">TwitterShoutout's</span></a>
Intention was to store custom shout out messages from my followers and keep them in order,
so I can inspect/save/reuse/modify them later and give shout outs at convenient time.
    </p>
    
  
       <img  class="img_project" src="/img/shoutout.png"  alt="whops something went wrong lol!">

    

</div>
<hr class="hr_override">

<div class="body_content" id="layout_head_mini">
        
    
<h4>Next project is similar to one above, TwitterRandomizer </h4><br>
    <p>
<a href="#"><span style="text-decoration: underline">TwitterRandomizer</span></a>
Is mostly used to aid my Twitter follow trains.<br>
TwitterRandomizer just randomize bunch of stored Twitter account names, from the database.<br>
Then those unique randomised combinations of names are to be added to custom messages, to help promote or gain new followers...
    </p>
    
  
       <img  class="img_project" src="/img/random.png"  alt="whops something went wrong lol!">

    

</div>
<hr class="hr_override">
@endsection


