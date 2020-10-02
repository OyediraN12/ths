<nav class="navbar navbar-expand-md @if(Request::route()->getName() == 'pages.index') navbar-light bg-white @else navbar-dark bg-none @endif py-3 fixed-top">
    <div class="container-fluid">
       <a class="navbar-brand @if(Request::route()->getName() == 'pages.index') text-white @endif" href="{{route('pages.index')}}">Main Logo</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item @if(Request::route()->getName() == 'pages.index') active @endif">
                <a class="nav-link" href="{{route('pages.index')}}">Home</a>
             </li>
             <li class="nav-item @if(Request::route()->getName() == 'pages.about') active @endif">
                <a class="nav-link" href="{{route('pages.about')}}">About</a>
             </li>
             <li class="nav-item @if(Request::route()->getName() == 'pages.services') active @endif">
                <a class="nav-link" href="{{route('pages.services')}}">  Services  </a>
             </li>
             <li class="nav-item @if(Request::route()->getName() == 'pages.contact') active @endif">
                <a class="nav-link" href="{{route('pages.contact')}}">  Contact us </a>
             </li>
             <li class="nav-item mt-1 ">
                <a class="@if(Request::route()->getName() == 'pages.index') text-gray @else text-white @endif pl-5 ml-2 " href="#"> 
                 <i class="fa fa-bars" aria-hidden="true" style="font-size: 25px "></i> 
                  </a>
             </li>
          </ul>
       </div>
    </div>
 </nav>