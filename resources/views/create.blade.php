@extends('layouts.app')

@section('content')

<div class="container">  
    <form >  
    <div class="text-center padding"><h2> Blog Content</h2></div>  
   <div class="form-group row">  
                 
        <div class="form-row ">  
               <div class="form-group col-md-10">  
                   <label for="firstName" class="form-label col-lg-12">First Name</label>  
                   <input type="text" class="form-control col-lg-12" id="firstName" placeholder="First Name" autocomplete>  
               </div>  
                
  
  
    
      <div class="form-group col-lg-12">  
               <label for="description">Blog Content:</label>  
               <textarea class="form-control col-lg-12" rows="10" id="description"></textarea>  
      </div>  
     
       <div class="form-group col-lg-4">  
            <button type="submit" class=" btn btn-primary padding-top">Submit</button>  
            <button type="submit" class=" btn btn-danger padding-top">cancel</button>  
        </div> 



@endsection