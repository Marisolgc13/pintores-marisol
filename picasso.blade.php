@extends('layouts.master')
@section('title','picasso')
@section('header')

@stop
@section('navbar')
@show
@section('principal')
<h1>Pablo Picasso</h1>
    <h2>Biografia</h2>
    <br>
    <h3>Pablo Picasso (25 de octubre de 1881 al 8 de abril de 1973) fue un pintor, escultor, grabador, ceramista y escenógrafo español expatriado considerado uno de los artistas más grandes e influyentes del siglo XX y el cocreador, junto con Georges Braque, del cubismo.
        Considerado radical en su trabajo, Picasso continúa obteniendo reverencia por su maestría técnica, creatividad visionaria y profunda empatía.
        En conjunto, estas cualidades han distinguido al «inquietante» español con los ojos «sombríos» como un artista revolucionario.
        Durante casi 80 de sus 91 años, Picasso se dedicó a una producción artística que creía supersticiosamente que lo mantendría con vida, contribuyendo de manera significativa y paralela a todo el desarrollo del arte moderno en el siglo XX.
        (25 de octubre de 1881 al 8 de abril de 1973) fue un pintor, escultor, grabador, ceramista y escenógrafo español expatriado considerado uno de los artistas más grandes e influyentes del siglo XX y el cocreador. </h3 >
        <br>
        <h2>Pinturas</h2>
        <br>
        <h3>Desnudos y naturaleza muerta</h3>
        <img src="images/desnudos.jpg" alt="">
        <br>
        <h3>El descanso</h3>
        <img src="images/descanso.jpg" alt="">
        <br>
        <h3>Niño con paloma</h3>
        <img src="images/niño.jpg" alt="">
        <br>
        <h3>Las señoritas de avignon</h3>
        <img src="images/señoritas.jpg" alt="">
        <br>
        <h3>Paisaje mediterreano</h3>
        <img src="images/paisaje.jpg" alt="">
        @stop
    @section('footer')
  
       <img src="" alt="">
    @parent 
   @stop
