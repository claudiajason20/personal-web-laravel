@extends('master')

@section('title')
CJason | Contact
@endsection

@section('content')
<div class="d-flex justify-content-center align-items-center" style="align-items: center; background-image: url({{ URL::asset('images/img-3.jpg') }}); background-size: 1300px; background-position: center; height:300px;">
  <div class="d-flex justify-content-center align-items-center" style="background:white; opacity:0.8; width:900px; height:125px">
    <h1 style="color=black;">Contact</h1>
  </div>
</div>
<div class="container" style="padding-top:20px">
    <div class="row">
        <div class="col-lg-4 col-md-4">
          <h3>Address</h3>
          <p>Odysseusslaan 3A</p>
          <p>Eindhoven, Nord-Braband</p>
        </div>
        <div class="col-lg-4 col-md-4">
          <h3>Phone </h3>
          <p><svg-icon><src href="sprite.svg#si-glyph-cal"/></svg> +31 6 21 362659</p>
        </div>
        <div class="col-lg-4 col-md-4">
          <h3>E-mail </h3>
          <p>claudianathasiaj@gmail.com</p>
          <a class="btn btn-primary" href="mailto:claudianathasiaj@gmail.com?Subject=Job%20Opportunities" role="button">Mail Here</a>
        </div>
    </div>

</div>



@endsection
