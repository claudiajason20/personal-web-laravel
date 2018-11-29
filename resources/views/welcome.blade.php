@extends('master')

@section('title')
Claudia Nathasia Jason
@endsection

@section('content')
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="jumbotron d-flex justify-content-center align-items-center" style="align-items: center; background-image: url({{ URL::asset('images/img-1.jpg') }}); background-size: 1300px; background-position: center; height:600px;">
  <div class="container d-flex justify-content-center align-self-center" style="background:white; opacity:0.8; width:900px; height:400px">
    <div class="container justify-content-center align-self-center">
      <h1 class="text-center" style="color:black;">Welcome to my Portfolio</h1>
      <h3 class="text-center" style="color:black;">It's nice to meet you!</h3>
      <p style="text-align:center">
        <a href="#details">More</a>
      </p>
    </div>
  </div>
</div>
<div class="container" style="padding-top:20px">
  <!--details-->
  <section id="details">
      <div class="container" style="padding-bottom:20px;">
        <p style="font-size:30px"> About Me </p>
        <p style="font-size:22px"> Full name </p>
        <p> Claudia Nathasia Jason </p>
        <p style="font-size:22px"> Strength </p>
        <p> Hard Worker, Loves to Laugh, Fast Learner</p>
        <p style="font-size:22px"> Searching </p>
        <p> Graduation Project</p>
        <p style="font-size:22px"> Language </p>
        <p> English, Indonesian </p>
        <p style="font-size:22px"> Some words from me </p>
        <p>  Hello, I am a final year student of Fontys University of Applied Sciences majoring in ICT and Software Engineering. I am currently looking for Graduation Project and found your offers. This website is created to give you more information about me. Thank you for coming to this website!</p>
      </div>
      <div style="padding:5px;"></div>
  </section>



</div>

@endsection
