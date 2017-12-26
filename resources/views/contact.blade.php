


@extends('layouts.master')

<style>
    #footer{
        display: none;
    }
</style>

@section('header_content')
   <div id="layout_head">
        <p>
        Contact 
        </p>
    </div>

 
@endsection

@section('body_content')
<div class="body_content" id="layout_head_mini" >
    <div class="col-lg-6  col-md-4 col-sm-6 col-xs-12 ">
                        
                       
                        <div class="input-append newsletter-box text-left" id="contact_forms">
                            {!!Form::open(['action'=>'Send_Mail@store'])!!}

                              <div class="form-group">
                                  
                                  
                                  <label>Your Name</label>
                                  {!!Form::text('name','',['class'=>'form-control'])!!}
                              </div>
                            
                              <div class="form-group">
                                  <label>Your Email</label>
                                  {!!Form::text('email','',['class'=>'form-control'])!!}
                              </div>
                            
                               <div class="form-group" >
                                    <label>Your Message</label>
                                    {!!Form::textarea('body','',['class'=>'formcontrol','rows'=>6,'cols'=>40])!!}
                               </div>
                           
                              <div class="form-group">
                                  
                                  {!!Form::submit('SEND',['class'=>'btn btn-info'])!!}
                              </div>
              

                                        
                              </div>   

                            
                            {!!Form::close()!!}

                        </div>
    </div>

@endsection

