<!-- @extends('layouts.app') -->
@extends('front.template.head')

@section('content')

<div class="container">
  <div class="jumbotron box-shadow">
    <h1 class="">Hello, world!</h1>
    <p>...</p>
    <p><a class="btn btn-primary" href="#" role="button">Learn more</a></p>
  </div>

  <div class="" style="display:flex;">
    <div class=" box-shadow" style="padding:10px !important;margin-right:10px;background:#FFFFFF;border-radius: 0.3rem;">
      <div class="" style="padding:10px;">
        <img src="{{ URL::asset('images/icon/icon_tv1.png') }}"  height="80px" width="80px">
        <p class="text-center" style="margin-top:10px">
          Televisi <br> & Monitor
        </p>
      </div>
    </div>
    <div class=" box-shadow" style="padding:10px !important;margin-right:10px;background:#FFFFFF;border-radius: 0.3rem;">
      <div class="" style="padding:10px;">
        <img src="{{ URL::asset('images/icon/icon_smartphone1.png') }}"  height="80px" width="80px">
        <p class="text-center" style="margin-top:10px">
          Ponsel <br>
        </p>
      </div>
    </div>
    <div class=" box-shadow" style="padding:10px !important;margin-right:10px;background:#FFFFFF;border-radius: 0.3rem;">
      <div class=" " style="padding:10px;">
        <img src="{{ URL::asset('images/icon/icon_headphone1.png') }}"  height="80px" width="80px">
        <p class="text-center" style="margin-top:10px">
          Audio <br> & Video
        </p>
      </div>
    </div>
    <div class=" box-shadow" style="padding:10px !important;margin-right:10px;background:#FFFFFF;border-radius: 0.3rem;">
      <div class=" " style="padding:10px;">
        <img src="{{ URL::asset('images/icon/icon_fotografi1.png') }}"  height="80px" width="80px">
        <p class="text-center" style="margin-top:10px">
          Fotografi
        </p>
      </div>
    </div>
    <div class=" box-shadow" style="padding:10px !important;margin-right:10px;background:#FFFFFF;border-radius: 0.3rem;">
      <div class=" " style="padding:10px;">
        <img src="{{ URL::asset('images/icon/icon_household1.png') }}"  height="80px" width="80px">
        <p class="text-center" style="margin-top:10px">
          Rumah <br> Tangga
        </p>
      </div>
    </div>
    <div class=" box-shadow" style="padding:10px !important;margin-right:10px;background:#FFFFFF;border-radius: 0.3rem;">
      <div class=" " style="padding:10px;">
        <img src="{{ URL::asset('images/icon/icon_office1.png') }}"  height="80px" width="80px">
        <p class="text-center" style="margin-top:10px">
          Kantor
        </p>
      </div>
    </div>
    <div class=" box-shadow" style="padding:10px !important;margin-right:10px;background:#FFFFFF;border-radius: 0.3rem;">
      <div class=" " style="padding:10px;">
        <img src="{{ URL::asset('images/icon/icon_network1.png') }}"  height="80px" width="80px">
        <p class="text-center" style="margin-top:10px">
          Server <br>
        </p>
      </div>
    </div>
  </div>


</div>



@endsection
