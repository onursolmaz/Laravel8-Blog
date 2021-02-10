@php
$setting=\App\Http\Controllers\HomeController::getSettings();
@endphp
<footer class="py-5 bg-dark text-white footer" style="margin-top:200px;">
<div class="row" style="margin: 0; padding: 0;">
        <div class="col-3" style="margin-left: 85px">
            <span style="margin-left: 80px">Contact</span>
            <span class="d-block m-2 "><i class="fas fa-map-marker-alt mr-2"></i>ODTÜ Teknokent/ANKARA</span>
            <span class="d-block m-2 "><i class="fas fa-phone mr-2"></i>{{$setting->phone}}</span>
            <span class="d-block m-2 "><i class="fas fa-envelope mr-2"></i>{{$setting->email}}</span>
        </div>
        <div class="col-6 text-center">
            <span class="d-block">Socail Media Links</span>
            <ul class="list-inline">
                <li class="list-inline-item"><a class="nav-link" href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li class="list-inline-item"><a class="nav-link" href="{{$setting->instagram}}" target="_blank"><i class="fab fa-instagram fa-2x"></i></a></li>
                <li class="list-inline-item"><a class="nav-link" href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter fa-2x"></i></a></li>
                <li class="list-inline-item"><a class="nav-link" href="{{$setting->youtube}}" target="_blank"><i class="fab fa-youtube fa-2x"></i></a></li>
            </ul>
            <span>Copyright © All rights reserved | Blog</span>
        </div>
</div>
</footer>

