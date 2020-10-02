<ul class="nav nav-tabs border-bottom-0 ml-4">
    <li class="nav-item">
       <a class="nav-link @if(Request::route()->getName() == 'pages.makeoffer') active @endif" href="{{route('pages.makeoffer')}}">Rental
       </a>
    </li>
    <li class="nav-item">
       <a class="nav-link @if(Request::route()->getName() == 'pages.sales') active @endif" href="{{route('pages.sales')}}">Sales
       </a>
    </li>
    <li class="nav-item">
       <a class="nav-link @if(Request::route()->getName() == 'pages.distress') active @endif" href="{{route('pages.distress')}}">
          Distress Sales
       </a>
    </li>    
 </ul>