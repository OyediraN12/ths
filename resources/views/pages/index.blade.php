@extends('layouts.app')

@section('page-title')
 Welcome
@endsection

@section('content')
<section class="section-banner">
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
       <!--Indicators-->
       <ol class="carousel-indicators">
          <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-2" data-slide-to="1"></li>
          <li data-target="#carousel-example-2" data-slide-to="2"></li>
       </ol>
       <!--/.Indicators-->
       <!--Slides-->
       <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
             <div class="view">
                <img class="d-block w-100" src="{{ asset('images/banner.jpg') }}" alt="First slide">
                <div class="mask rgba-black-light"></div>
             </div>
             <div class="carousel-caption">
                <h2 class="h3-responsive text-uppercase">lorem ipsum quia dolor conse</h2>
                <p class="w-md-75 m-auto">Capitalize on low hanging fruit to identify a ballpark value added activity test. Override the digital divide with  additional clickthroughs Capitalize on low hanging fruit to identify a ballpark value added activity test.</p>
                <div class="my-3">
                   <a href="" class="btn btn-top mr-2 bg-sblue">Get Started</a>
                   <a href="" class="btn btn-top">Learn More</a>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <!--Mask color-->
             <div class="view">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">
                <div class="mask rgba-black-light"></div>
             </div>
             <div class="carousel-caption">
                <h2 class="h3-responsive text-uppercase">lorem ipsum quia dolor conse</h2>
                <p class="w-md-75 m-auto">Capitalize on low hanging fruit to identify a ballpark value added activity test. Override the digital divide with  additional clickthroughs Capitalize on low hanging fruit to identify a ballpark value added activity test.</p>
                <div class="my-3">
                   <a href="" class="btn btn-top mr-2 bg-sblue">Get Started</a>
                   <a href="" class="btn btn-top">Learn More</a>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <!--Mask color-->
             <div class="view">
                 <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">
                <div class="mask rgba-black-light"></div>
             </div>
             <div class="carousel-caption">
                <h2 class="h3-responsive text-uppercase">lorem ipsum quia dolor conse</h2>
                <p class="w-md-75 m-auto">Capitalize on low hanging fruit to identify a ballpark value added activity test. Override the digital divide with  additional clickthroughs Capitalize on low hanging fruit to identify a ballpark value added activity test.</p>
                <div class="my-3">
                   <a href="" class="btn btn-top mr-2 bg-sblue">Get Started</a>
                   <a href="" class="btn btn-top">Learn More</a>
                </div>
             </div>
          </div>
       </div>
       <!--/.Slides-->
    </div>
    <!--/.Carousel Wrapper-->
 </section>
 <section class="section-welcome my-5 py-4">
    <div class="container">
       <div class="row">
          <div class="col-md-6 d-sm-none d-none d-lg-block">
             <img src="{{ asset('images/about-1.png') }}" class="img-fluid d-block m-auto">
          </div>
          <div class="col-md-6">
             <h2 class="text-uppercase mb-0">Welcome to our website!</h2>
             <p class="text-orange text-md-right w-75 pr-5">a Specialized company!</p>
             <div class=" d-sm-block  d-lg-none">
             <img src="{{ asset('images/about-1.png') }}" class="img-fluid d-block m-auto">
          </div>
             <h3 class="mt-5">Brief overview</h3>
            <img src="{{ asset('images/line.png') }}" class="line-m" height="3" width="11%">
             <p class=" font-italic pt-4">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </p>
             <p>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>
             <a href="" class="btn btn-learn mt-3">Learn More</a>
          </div>
       </div>
    </div>
 </section>
 <section class="section-why my-5 py-4">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-6 d-sm-block  d-lg-none mb-5">
             <img src="{{ asset('images/wc.png') }}" class="img-fluid d-block m-auto w-85">
          </div>
          <div class="col-md-6">
             <h2 class="text-uppercase mb-0">We Are Dynamic Team 
                <span class="d-block">& Specialized company!</span>
             </h2>
             <p class=" font-italic pt-4">consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>
             <p>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et doloreconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore  </p>
             <a href="" class="btn btn-learn mt-3">Learn More</a>
          </div>
          <div class="col-md-6 d-sm-none d-none  d-lg-block">
             <img src="{{ asset('images/wc.png') }}" class="img-fluid d-block m-auto w-85">
          </div>
       </div>
    </div>
 </section>
 <section class="section-service my-5 py-4">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <img src="{{ asset('images/line.png') }}" class="line-m mb-2" width="11%" height="3">
             <p class="text-orange f-18">Our Services</p>
             <h2 class="text-uppercase mb-0">we offer services</h2>
             <p class="pt-4">Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipisci velit, sed quia non numqueius modi tempora incidunt ut labore.Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur </p>
             <div class="media mt-5 ">
                <img class="mr-3" src="{{ asset('images/arrow.png') }}" class="img-fluid " width="25" alt="">
                <div class="media-body">
                   <p class="mt-n2"> it, sed quia non numqueius modi tempora 
                      <span class="d-block">incidunt ut labore.Nequ</span>
                   </p>
                </div>
             </div>
             <div class="media mt-2 ">
                <img class="mr-3" src="{{ asset('images/arrow.png') }}" class="img-fluid " width="25" alt="">
                <div class="media-body">
                   <p class="mt-n2"> it, sed quia non numqueius modi tempora 
                      <span class="d-block">incidunt ut labore.Nequ</span>
                   </p>
                </div>
             </div>
             <a href="" class="btn btn-learn mt-4">View Our Services</a>
          </div>
          <div class="col-md-6">
             <div class="row">
                <div class="col-md-6">
                   <div class="card border-0 shadow red text-center py-3 px-3 mb-4">
                      <img src="{{ asset('images/ico1.png') }}" class="img-fluid d-block m-auto">
                      <h4>Rent</h4>
                      <p>Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipisci velit</p>
                   </div>
                   <div class="card border-0 shadow orange text-center py-3 px-3 mb-4">
                      <img src="{{ asset('images/ico3.png') }}" class="img-fluid d-block m-auto">
                      <h4>Construction</h4>
                      <p>Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipisci velit</p>
                   </div>
                </div>
                <div class="col-md-6 mt-md-5">
                   <div class="card border-0 shadow blue text-center py-3 px-3 mb-4">
                      <img src="{{ asset('images/ico2.png') }}" class="img-fluid d-block m-auto">
                      <h4>Buy </h4>
                      <p>Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipisci velit</p>
                   </div>
                   <div class="card border-0 purple shadow text-center py-3 px-3 mb-4">
                      <img src="{{ asset('images/ico4.png') }}" class="img-fluid d-block m-auto">
                      <h4>Make an Offer</h4>
                      <p>Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipisci velit</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section-recent my-5 py-4">
    <div class="container">
       <img src="{{ asset('images/line.png') }}" class="line-m" width="6%" height="3">
       <p class="text-orange f-18">Recent Deals</p>
       <h2>Ahis is Photoshop's version of Lorem Ipsum. Proin gravidavelvsauct</h2>
       <p>Ahis is Photoshop's version of Lorem Ipsum. Proin gravidavelvsauctor. aliquet. Aenean sollicitudin, lorem quis bibend um auctor, nisi elequat ipsum, nec sagittis em nibh id elit. Duis sed odio ametnibvulpuicursus  sit amet  mauris h id elit. Duis sed odio</p>
       <div class="row  mt-md-5 mt-3">
          <div class="col-md-6 mb-3">
             <div class="row">
                <div class="col-md-6">
                   <div class="card border-0 blue shadow py-3 px-4 mb-4">
                      <img src="images/ico5.png" class="img-fluid w-25 mb-2">
                      <h2 class="text-blue f-30 fm-popin font-weight-bold">1250+</h2>
                      <p>Title Here</p>
                   </div>
                   <div class="card border-0 red shadow py-3 px-4 mb-4">
                      <img src="images/ activeico6.png" class="img-fluid w-25 mb-2">
                      <h2 class="text-red f-30 fm-popin font-weight-bold">150+</h2>
                      <p>Title Here</p>
                   </div>
                </div>
                <div class="col-md-6 mt-md-5">
                   <div class="card border-0 green shadow py-3 px-4 mb-4">
                      <img src="images/ico8.png" class="img-fluid w-25 mb-2">
                      <h2 class="text-green f-30 fm-popin font-weight-bold">850+</h2>
                      <p>Title Here</p>
                   </div>
                   <div class="card border-0 purple shadow py-3 px-4 mb-4">
                      <img src="images/ico7.png" class="img-fluid w-25 mb-2">
                      <h2 class="text-purple f-30 fm-popin font-weight-bold">1350+</h2>
                      <p>Title Here</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-6 mt-md-5">
             <img src="images/rd.png" class="img-fluid d-block m-auto ">
          </div>
       </div>
    </div>
 </section>
 <section class="section-partners my-5 py-4">
    <div class="container text-center">
       <h3>Partners</h3>
       <img src="images/line.png" class=" line-m" width="6%" height="3">
       <h2 class="text-uppercase mt-4">Trusted by the world's best</h2>
       <div id="carouselExample" class="carousel slide mt-5 d-sm-none d-none d-md-none d-lg-block" data-ride="carousel">
          <div class="carousel-inner ">
             <div class="carousel-item active">
                <div class="row">
                   <div class="col">
                     <a href=""> <div class="card p-4 rounded"> <img src="images/c1.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                     <a href="">  <div class="card p-4 rounded"> <img src="images/c2.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                    <a href="">   <div class="card p-4 rounded"> <img src="images/c3.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                     <a href="">  <div class="card p-4 rounded"> <img src="images/c4.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                   <a href="">    <div class="card p-4 rounded"> <img src="images/c5.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                   <div class="col">
                  <a href=""> <div class="card p-4 rounded"> <img src="images/c1.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                     <a href="">  <div class="card p-4 rounded"> <img src="images/c2.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                     <a href="">  <div class="card p-4 rounded"> <img src="images/c3.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                     <a href="">  <div class="card p-4 rounded"> <img src="images/c4.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                    <a href="">   <div class="card p-4 rounded"> <img src="images/c5.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                   <div class="col">
                  <a href="">     <div class="card p-4 rounded"> <img src="images/c1.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                <a href="">       <div class="card p-4 rounded"> <img src="images/c2.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                   <a href="">    <div class="card p-4 rounded"> <img src="images/c3.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                    <a href="">   <div class="card p-4 rounded"> <img src="images/c4.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   <div class="col">
                    <a href="">   <div class="card p-4 rounded"> <img src="images/c5.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                </div>
             </div>
          </div>




                       <div class="carousel-inner d-sm-block  d-md-block d-lg-none">
             <div class="carousel-item active">
                <div class="row">
                   <div class="col">
                    <a href="">   <div class="card p-4 rounded"> <img src="images/c1.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                  
                </div>
             </div>
              <div class="carousel-item">
                <div class="row">
                  
                   <div class="col">
                  <a href="">     <div class="card p-4 rounded"> <img src="images/c2.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   
                </div>
             </div>
              <div class="carousel-item">
                <div class="row">
                  
                   <div class="col">
               <a href=""> <div class="card p-4 rounded"> <img src="images/c3.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                  
                   <div class="col">
              <a href=""> <div class="card p-4 rounded"> <img src="images/c4.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                   
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                  
                   <div class="col">
             <a href="">   <div class="card p-4 rounded"> <img src="images/c5.png" class="img-fluid d-block m-auto"></div></a>
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <span class="" aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
          <span class="" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          <span class="sr-only">Next</span>
          </a>
       </div>
    </div>
 </section>
@endsection