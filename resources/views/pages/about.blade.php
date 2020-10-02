@extends('layouts.app')

@section('page-title')
    About Us 
@endsection

@section('content')
<section class="about-banner text-white text-center">
    <div class="container">
       <h2 class="text-uppercase">About us</h2>
       <p>Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipi</p>
    </div>
   </section>
   <section class="section-about my-5 py-4">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <img src="images/wc.png" class="img-fluid d-block m-auto">
            </div>
            <div class="col-md-6">
               <img src="images/line.png" class="line-m mb-3" width="11%" height="3">
               <h4 class="text-orange">ABOUT US</h4>
               <h3 class="text-uppercase my-4">We Are Dynamic Team & Specialized company!</h3>
              
               <h4 class="text-uppercase mb-0 pt-3">Mission</h4>
               <img src="images/line.png" class="line-m mt-1" width="11%" height="3">
              
               <p class=" pt-3">Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipisci velit, sed quia non numqueius modi tempora incidunt ut labore.Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur</p>
               <h4 class="text-uppercase mb-0 pt-3">Vision</h4>
               <img src="images/line.png" class="line-m mt-1" width="11%" height="3">
               <p class="pt-3">Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipisci velit, sed quia non numqueius modi tempora incidunt ut labore.Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur</p>
                <h4 class="text-uppercase mb-0 pt-3">Core Values</h4>
               <img src="images/line.png" class="line-m mt-1" width="11%" height="3">
               <p class="pt-3">Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipisci velit, sed quia non numqueius modi tempora incidunt ut labore.Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur</p>
            </div>
         </div>
      </div>
   </section>
       <section class="bg-blue py-5">
          <div class="container text-white">
             <div class="row">
                <div class="col-6 col-md-3">
                   <div class="border border-light text-center  p-5">
                      <h2 class="f-30">324 <sub> +</sub></h2>
                      <p class="mb-0">Project Completed</p>
                   </div>
                </div>
                  <div class="col-6 col-md-3">
                   <div class="border border-light text-center  p-5">
                      <h2 class="f-30">100 <sub> %</sub></h2>
                      <p class="mb-0">Client Satisfaction</p>
                   </div>
                </div>
                 <div class="col-6 col-md-3">
                   <div class="border border-light text-center  p-5">
                      <h2 class="f-30">15</h2>
                      <p class="mb-0">Awards</p>
                   </div>
                </div>

                 <div class="col-6 col-md-3">
                   <div class="border border-light text-center  p-5">
                      <h2 class="f-30">48</h2>
                      <p class="mb-0">Expert Members</p>
                   </div>
                </div>
             </div>
          </div>
       </section>
@endsection