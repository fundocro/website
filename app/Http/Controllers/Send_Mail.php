<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;//added
use App\Http\Requests\ContactFormValidation;//added
class Send_Mail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormValidation $request)//original (Request $request )
    {
       //    
       if($request){
          Mail::send('mails.footer_message', array(
            'name' => $request->get('name'),
            'email' =>$request->get('email'),
            'body' => $request->get('body')
        ),
                    
        function ($message){
            $message->to('goggy25@gmail.com', 'gogiweb')->subject('website question');
           
        }); 
         
//         echo "<script>alert('Thanks your message has been submitted! ');</script>";  
           	
            return redirect()->to('/')->with('message', 'Your message has been submitted. Thanks for contacting me!');
       }else{
          echo "<script>alert('Sorry something went wrong :( ');</script>"; 
           return back();
       }
         
        
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
