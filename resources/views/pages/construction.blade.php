@extends('layouts.app')

@section('page-title')
    Construction
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
             <img src="images/s3.png" class="img-fluid d-block m-auto">
          </div>
            {!! $data->body !!}
          </div>
          <div class="col-md-4 d-sm-none d-none d-lg-block">
             <img src="images/s3.png" class="img-fluid d-block ml-auto">
          </div>
       </div>
    </div>
 </section>
 <section class="form mb-5">
    <div class="container">
       <div class="card shadow py-5 px-4 border-0">
       <h3>Please Fill out the form</h3>
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
          <form class="panel py-4" action="{{route('requests.store')}}" method="POST">
            @csrf
             <div class="row">
                <div class="col-md-6">
                   {{-- <label class="floating-label"> Name*</label> --}}
                   <input type="hidden" value="Construction" name="request_type"> 
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
                   {{-- <label class="floating-label label-required ">E-mail Address</label> --}}
                   <input type="email" placeholder="E-mail Address*" value="{{ old('email') }}" name="email" required> 
                </div>
              
                <div class="col-md-6">
                   <label class="floating-label">Country</label>
                   <select type="text" name="country">
                      <option></option>
                      <option>Country</option>
                   </select>
                </div>
                
                 <div class="col-md-6">
                   <label class="floating-label">Tell us about your project</label>
                   <textarea rows="1" name="about_project"></textarea>
                </div>
                <div class="col-md-12">
                   <p>I have a land </p>
                   <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="have_land" id="inlineRadio1" value="Yes">
                    <label class="form-check-label m-0" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="have_land" id="inlineRadio2" value="No">
                    <label class="form-check-label m-0" for="inlineRadio2">No</label>
                    </div>
                </div>
               
             </div>
             <button type="submit" class="btn btn-learn mt-4 text-uppercase">Send Request</button>
          </form>
       </div>
    </div>
 </section>
@endsection