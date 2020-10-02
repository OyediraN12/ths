@extends('layouts.app')

@section('page-title')
    Contact
@endsection

@section('content')
<section class="about-banner text-white text-center">
   <div class="container">
      <h2 class="text-uppercase">Contact Us</h2>
      <p>Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipi</p>
   </div>
</section>
<section class="section-contact mb-5 pb-4">
   <div class="container">
    
      <div class="row">
          <div class="col-md-6 py-5 mt-md-3">
            <img src="images/contact.png" class="img-fluid d-block m-auto" width="60%">
         </div>
         <div class="col-md-6">
            <div class="card border-0 shadow py-5 px-4 mt-md-n5">
                <h3 class="text-center">Let’s Work Together</h3>
                <p class="text-center">Have Any Project In Mind? Just Drop Us A Line.</p>

                  <form class="panel pt-4">
                  <div class="row">
                     <div class="col-md-6">
                        <label class="floating-label">Your Name</label>
                        <input type="text"> 
                     </div>
                   
                     <div class="col-md-6">
                        <label class="floating-label">Phone Number</label>
                        <input type="text"> 
                     </div>
                     <div class="col-md-6">
                        <label class="floating-label label-required">Your E-mail</label>
                        <input type="email" required="" class=""> 
                     </div>
                     <div class="col-md-6">
                        <label class="floating-label">Subject</label>
                        <input type="text"> 
                     </div>
                     
                     <div class="col-md-12">
                        <label class="floating-label">Message</label>
                        <textarea rows="4"></textarea>
                     </div>
                  </div>
                  <a href="" class="btn btn-learn mt-4 text-uppercase">Submit</a>
               </form>
            </div>
         </div>
        
      </div>
   </div>
</section>
    <section class="section-help my-md-5 py-4">
       <div class="container text-center">
          <h2>Need Help?</h2>
          <p>We’re looking forward to hearing from you </p>
          <div class="row mt-md-5 mt-4 justify-content-center">
             <div class="col-md-3">
                <div class="box-help py-5">
                   <img src="images/skype.png" class="img-fluid m-auto d-block" width="30%">
                   <p class="mt-3 mb-0  ">Tap/Click To Skype</p>
                   <small class="font-weight-bold">skypedemo_654</small>
                </div>
             </div>

              <div class="col-md-3">
                <div class="box-help py-5">
                   <img src="images/call.png" class="img-fluid m-auto d-block" width="30%">
                   <p class="mt-3 mb-0  ">Tap/Click To Call</p>
                   <small class="font-weight-bold">+123-654-789-00</small>
                </div>
             </div>

              <div class="col-md-3">
                <div class="box-help py-5">
                   <img src="images/email.png" class="img-fluid m-auto d-block" width="30%">
                   <p class="mt-3 mb-0  ">Tap/Click To Email</p>
                   <small class="font-weight-bold">info@email.com</small>
                </div>
             </div>
          </div>
       </div>
    </section>
@endsection