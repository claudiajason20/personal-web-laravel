@extends('master')

@section('title')
CJason | Curriculum Vitae
@endsection

@section('content')
<div class="d-flex justify-content-center align-items-center" style="align-items: center; background-image: url({{ URL::asset('images/img-2.jpg') }}); background-size: 1300px; background-position: center; height:300px;">
  <div class="d-flex justify-content-center align-items-center" style="background:white; opacity:0.8; width:900px; height:125px">
    <h1 style="color=black;"> Skill & Experience </h1>
  </div>
</div>
  <!--skils-->
<section id="skills">
  <div class="container" style="padding-bottom:20px;">
    <p style="font-size:30px"> Skills </p>
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">PHP</h5>
            <p class="card-subtitle mb-2 text-muted">How good I am : 4.0/5.0 </p>
            <p class="card-text">I learn PHP since 2 years ago and have been using it for website development</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Java</h5>
            <p class="card-subtitle mb-2 text-muted">How good I am : 4.0/5.0 </p>
            <p class="card-text">As on of the famous programming language, I have been learning it for 2 years. Ps: A cup of java coffee is better with biscuit.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">CSS</h5>
            <p class="card-subtitle mb-2 text-muted">How good I am : 4.0/5.0 </p>
            <p class="card-text">Giving a style to a website? Why not? I have been using it since the first time I learn HTML. It have been 4 years. Time flies. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Android Development</h5>
            <p class="card-subtitle mb-2 text-muted">How good I am : 4.0/5.0 </p>
            <p class="card-text">After 5 years using Android phone, I told myself, "Maybe I should learn to create the application instead of downloading it from playstore." </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">MySQL</h5>
            <p class="card-subtitle mb-2 text-muted">How good I am : 3.0/5.0 </p>
            <p class="card-text">SELECT * FROM mySkill where good >= 3.0 </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Javascript</h5>
            <p class="card-subtitle mb-2 text-muted">How good I am : 3.0/5.0 </p>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="working">
  <div class="container" style="padding-bottom:20px;">
    <p style="font-size:30px"> Working Experience </p>
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="card h-100" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">PT. Giarto Audrey Cemerlang</h5>
            <p class="card-subtitle mb-2 text-muted">Accounting Application</p>
            <p class="card-text">I learn PHP since 2 years ago and have been using it for website development.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





@endsection
