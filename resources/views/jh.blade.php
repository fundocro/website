

@extends('layouts.master')

@section('header_content')

    <div id="layout_head">
        <p>
        So you want to know about my working skills? <br>Let's then go from the beggining... 
        </p>
    </div>
   
@endsection

@section('body_content')
<div class="body_content" id="layout_head_mini" >
   
    <h3>Sugar & Coffee adventure</h3>
    <div class="body_job">
         
        <img class="img_job"  src="img/sugar.png" alt="whops something went wrong :(">     
    </div>

    <div class="body_job">
      
        <p id="body_job_right">
            The first real paid job that I had was as a teenager, and it was related to sugar and coffee.<br>
            If you're thinking that I was a waiter you are mistaken. <br>
            This job was maybe a couple of days per month and only during the summer break. <br>
        </p>
    </div>

    <div class="body_job">
                  
         <img class="img_job" class="body_job"  src="img/bag.png" alt="whops something went wrong :(" style="float: right; margin-top: 50px;">
        <p>
            It was basically unloading 100 tons of sugar or coffee, contained in 50-kilo bags,
            from cargo trains onto wooden pallets... <br>
            Pay was good considering that I was usually working with my friends and only a few hours or until the job was done.
        </p>
        
         <img class="img_job" class="body_job"  src="img/coffee.png" alt="whops something went wrong :(" style="float: right;">
      <p> 
          <br>
          I would love to give it a go once more, but I doubt that I would have the same smile on my face now, 16 years later :)  
        </p>
  
        
        
    </div>
      
</div>
<hr class="hr_override">
@endsection
