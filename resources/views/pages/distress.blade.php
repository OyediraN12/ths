@extends('layouts.app')

@section('page-title')
    Distress Sales
@endsection

@section('content')
<section class="about-banner text-white text-center">
    <div class="container">
       <h2 class="text-uppercase">Services</h2>
       <p>Neque porro quisquam est, qui dolorem ipsum quia dolorsit amet, consectetur, adipi</p>
    </div>
 </section>
 <section class="section-about my-5 py-4">
    <div class="container">
       @include('pages.services-nav')
       <div class="row align-items-center">
          <div class="col-md-12 col-lg-8">
             <h2>How it works </h2>
             <div class=" d-sm-block  d-lg-none">
             <img src="images/s4.png" class="img-fluid d-block m-auto">
          </div>
            {!! $data->body !!}
          </div>
           <div class="col-md-4 d-sm-none d-none d-lg-block">
             <img src="images/s4.png" class="img-fluid d-block ml-auto">
          </div>
       </div>
    </div>
 </section>
 <section class="form mb-5">
    <div class="container">
       @include('pages.makeoffer-nav')
       <div class="card shadow py-5 px-4 border-0">
         @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
         @endif
         @if(Session::get('data'))
            <div class="alert alert-success">
               {{Session::get('data')}}
            </div>
         @endif
          <h3>Please Fill out the form </h3>
          <form class="panel py-4" action="{{route('requests.store')}}" method="POST">
            @csrf
            <div class="row pt-4">
             <div class="col-md-12 mb-3">
                <div class="nav nav-tabs border-bottom-0 panel" role="tablist">
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="selling" data-target="#scheduleDaily" checked="">
                      <label class="form-check-label m-0" for="inlineRadio1">I am selling</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="buying" data-target="#scheduleWeekly">
                      <label class="form-check-label m-0" for="inlineRadio2">I am buying</label>
                   </div>
                </div>
             </div>
          </div>
          <div class="tab-content">
             <div id="scheduleDaily" class="tab-pane active">
                   <div class="row">
                      <div class="col-md-6">
                         {{-- <label class="floating-label"> Name*</label> --}}
                         <input type="hidden" value="Distress Sales" name="request_type"> 
                         <input type="text" placeholder="Name*" value="{{ old('name') }}" name="name" required> 
                      </div>
                      <div class="col-md-6">
                         {{-- <label class="floating-label">Last Name</label> --}}
                         <input type="text" placeholder="Last Name" value="{{ old('last_name') }}" name="last_name" required> 
                      </div>
                      <div class="col-md-6">
                         {{-- <label class="floating-label">Phone Number</label> --}}
                         <input type="text" placeholder="Phone Number" value="{{ old('phone_number') }}" name="phone_number" required> 
                      </div>
                      <div class="col-md-6">
                         {{-- <label class="floating-label label-required">E-mail Address</label> --}}
                         <input type="email" placeholder="E-mail Address*" value="{{ old('email') }}" name="email" required> 
                      </div>
                      <div class="col-md-6">
                         {{-- <label class="floating-label">Location</label> --}}
                         <input type="text" placeholder="Location" value="{{ old('location') }}" name="location" required> 
                      </div>
                      <div class="col-md-6">
                         {{-- <label class="floating-label">Facilities</label> --}}
                         <input type="text" placeholder="Facilities" value="{{ old('facilities') }}" name="facilities" required> 
                      </div>
                      <div class="col-md-6">
                         <label class="floating-label">Property Type </label>
                         <select type="text" name="property_type">
                            <option></option>
                            <option>Property Type </option>
                         </select>
                      </div>
                      <div class="col-md-6">
                         <label class="floating-label">Duration </label>
                         <select type="text" name="duration">
                            <option></option>
                            <option>Duration </option>
                         </select>
                      </div>
                      <div class="col-md-6">
                         {{-- <label class="floating-label">Price</label> --}}
                         <input type="text" placeholder="Price" value="{{ old('price') }}" name="price"> 
                      </div>
                      <div class="col-md-6">
                         <label class="floating-label">Extra comments</label>
                         <textarea rows="1" name="comment"></textarea>
                      </div>
                   </div>
                   <button type="submit" class="btn btn-learn mt-4 text-uppercase">Send Request</button>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection