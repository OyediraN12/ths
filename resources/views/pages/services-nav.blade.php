<ul class="nav nav-tabs mb-md-5 mb-4">
    <li class="nav-item">
        <a class="nav-link @if(Request::route()->getName() == 'pages.services') active @endif one" href="{{route('pages.services')}}">
            <img src="images/1.png" class="img-fluid pr-2" width="75">RENT
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::route()->getName() == 'pages.buy') active @endif two" href="{{route('pages.buy')}}">
            <img src="images/ico2.png" class="img-fluid pr-2" width="75">Buy
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::route()->getName() == 'pages.construction') active @endif three" href="{{route('pages.construction')}}">
            <img src="images/ico3.png" class="img-fluid pr-2" width="75">Construction
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::route()->getName() == 'pages.makeoffer') active @endif four" href="{{route('pages.makeoffer')}}">
            <img src="images/ico4.png" class="img-fluid pr-2" width="75">Make an Offer
        </a>
    </li>
 </ul>