@extends('layouts.master')
@section('header_content')
<p>HOME PAGE</p> 
<div id="home_head"> 
    <p>Hi, welcome to my digital world!</p> 
    <p> 
    I really didn't know what to put here so I decided to put some of my favorite quotes...
</p> 
</div> 
@endsection
@section('body_content')
<style>.inline{
        margin: 10px;
        width: 200px;
        height:300px;
        display: inline-block;
    }
    .body_content{
       margin: 0 auto;
    }
    .quotes{
        
    }</style> 
<div class="body_content"> 
    <div class="quotes"> 
        <h3>Day 96:</h3>
        <br> 
        <p>When you ask for happiness and a beautiful life, ask not just for you, but for everyone. When you ask for something better, ask not just for you, but for everyone. By all means ask for abundance and health for you, but also ask for it to be given to everyone. Can you imagine what would happen if six billion people asked for these things for you?<br> </p> 
        <p>Rhonda Byrne</p> 
        <hr class="hr_override"> 
        <p>Day 28:</p>
        <br> 
        <p> 
            To create your tomorrow, go over your day when you are in bed tonight just before you fall asleep, and feel gratitude for the good moments. If there was something you wanted to happen differently, replay it in your mind the way you wanted it to go. As you fall asleep, say, "I will sleep deeply and wake up full of energy. Tomorrow is going to be the most beautiful day of my life." Good night!<br> </p> 
        <p>Rhonda Byrne</p> 
        <hr class="hr_override"> 
        <p>Day 35:</p>
        <br> 
        <p> 
            The thought manifests as the word;<br> 
            The word manifests as the deed;<br> 
            The deed develops into habit;<br> 
            And habit hardens into character.<br> 
            So watch the thought and its ways with care,<br> 
            And let it spring from love<br> 
            Born out of concern for all beings.<br> </p> 
        <p>Budha</p> 
        <hr class="hr_override"> 
        <p>Day 38:</p>
        <br> 
        <p> 
            We are entirely free to choose whatewer we want. The power is in your hands now, and you are the one 
            who chooses how to use that power in your own life.<br> 
            You can choose:<br> 
            To have a happier life today, or put it off until tomorrow.
            What feels better? You choose.<br> </p> 
        <p>Rhonda Byrne</p> 
        <hr class="hr_override"> 
    </div>     
    <img class="inline" style="background-image: url('img/secret.jpg');background-size:cover;"> 
    <div class="inline"> 
        <ul> 
            <li>
                <a href="https://en.wikipedia.org/wiki/The_Secret_(book)">The Secret</a>
            </li>             
            <li>
                <a href="https://en.wikipedia.org/wiki/Rhonda_Byrne">Rhonda Byrne</a>
            </li>             
        </ul>         
    </div>     
</div>{{--body_content--}}
@endsection
@section('footer_content')
<p> 
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
</p>
@endsection
