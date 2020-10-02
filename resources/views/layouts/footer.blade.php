      <!-- =========footer========= -->
      <footer>
        <div class="container text-white">
           <div class="row">
              <div class="col-md-3">
                <div class="f-20">Our Services</div>
                <div class="line-white my-3"></div>
                <a href="" class="text-white d-block pt-2">Rent </a>
                 <a href="" class="text-white d-block">Buy </a>
                 <a href="" class="text-white d-block">Construction</a>
                 <a href="" class="text-white d-block">Make an Offer</a>
              </div>
               <div class="col-md-3">
                   <div class="f-20"> Useful Links</div>
                <div class="line-white my-3"></div>
                <a href="" class="text-white d-block pt-2">Home</a>
                 <a href="" class="text-white d-block">About </a>
                 <a href="" class="text-white d-block">Services</a>
                 <a href="" class="text-white d-block">Contact</a>
               </div>
                <div class="col-md-3">
                    <div class="f-20">Company</div>
                <div class="line-white my-3"></div>
                <a href="" class="text-white d-block pt-2">Terms & Conditions</a>
                 <a href="" class="text-white d-block">Privacy  Policy </a>
                 <a href="" class="text-white d-block">Feedback</a>
                </div>
                 <div class="col-md-3">
                      <div class="f-20">Subscribe</div>
                <div class="line-white my-3"></div>
                <p>Subscribe to get early access to new themes, discounts and brief updates about what's new</p>
                <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control border-right-0 "  placeholder="">
                  <div class="input-group-append">
                  <div class="input-group-text"><i class="fa fa-long-arrow-right text-white" style="font-size: 18px" aria-hidden="true"></i></div>
                  </div>
               </div>
                 </div>
           </div>
        </div>
     </footer>
     <section class="footer-bottom py-4">
        <div class="container">
           <div class="row">
              <div class="col-6">
                 <p class="mb-0 text-white">Copyright 2020 @website name    </p>
              </div>
              <div class="col-6 text-right">
                 <a href="" class="f-link"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                 <a href="" class="f-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="" class="f-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                   <a href="" class="f-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </div>
           </div>
        </div>
     </section>
     <!-- =========================
        End
        ============================== -->
     <!-- jQuery -->
     <script src="js/jquery-3.3.1.min.js"></script>
     <!-- Bootstrap Core JavaScript -->
     <script src="js/bootstrap.min.js"></script>
     <!-- Bootstrap Core JavaScript -->
   
     <script>
   $(window).scroll(function(){
   var scroll = $(window).scrollTop();
   if(scroll < 300){
       $('.fixed-top').css('background', 'transparent');
   } else{
       $('.fixed-top').css('background', '#000');
   }
});
</script>
<script type="">
  // Close Navbar when clicked outside
$(window).on('click', function(event){
   // element over which click was made
   var clickOver = $(event.target)
   if ($('.navbar .navbar-toggler').attr('aria-expanded') == 'true' && clickOver.closest('.navbar').length === 0) {
       // Click on navbar toggler button
       $('button[aria-expanded="true"]').click();
   }
});
</script>