<!DOCTYPE html>
<html lang="es">
<head>
  <title>Pagina Principal</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style_index.css')}}">
</head>
<body>
@extends('layouts.app')

@include('header.index')   
@include('menu.menu')
@section('content')
<div class="container">
   
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
         <img src="{{asset('images/slider1.png')}}" id="images1" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
      <div class="item">
       <img src="{{asset('images/slider4.jpg')}}"  id="images2" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
      <div class="item">
       <img src="{{asset('images/slider6.jpg')}}"  id="images3" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
  
  
  
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  
  </div>
  @endsection





</body>
</html>






