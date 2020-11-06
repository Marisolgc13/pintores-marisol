@extends('layouts.master')
@section('title','Da Vinci')
@section('header')
@stop
@section('navbar')
@show
@section('principal')
<h1>Leonardo Da Vinci</h1>
    <h2>Biografia</h2>
    <br>
    <h3>Leonardo Da Vinci fue un polímata italiano del siglo XV y XVI (nació el 15 de abril de 1452 y murió el 2 de mayo de 1519) conocido principalmente por su destacado talento como pintor, ingeniero e inventor.
        Sus obras pictóricas más conocidas son La Gioconda (también conocido como La Mona Lisa) y La última cena (ver imágenes en el punto 2).
        Además de estas dos obras de arte, escribió un sinfín de ideas revolucionarias (recogidas en 20 volúmenes)
        que no pudieron ser desarrolladas hasta varios siglos después, algunas por las limitaciones técnicas existentes 
        en esa época y otras por pequeñas incongruencias en sus bocetos que imposibilitaba el funcionamiento de sus
        inventos. </h3>
        <br>
        <h2>Pinturas</h2>
        <br>
        <h3>La Mona Lisa</h3>
        <img src="images/monalisa.jpg" alt="">
        <br>
        <h3>La ultima cena</h3>
        <img src="images/cena.jpg" alt="">
        <br>
        <h3>La virgen de las rocas</h3>
        <img src="images/vrigen.jpg" alt="">
        <br>
        <h3>Hombre vitruviano</h3>
        <img src="images/vitruviano.jpg" alt="">
        <br>
        <h3>Salvador mundi</h3>
        <img src="images/salvador.jpg" alt="">
    @stop
    @section('footer')
  
       <img src="" alt="">
    @parent 
   @stop
