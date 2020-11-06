@extends('layouts.master')
@section('title','Frida')
@section('header')

@stop
@section('navbar')
@show
@section('principal')
<h1>Frida Kahlo</h1>
    <h2>Biografia</h2>
    <br>
    <h3>FRIDA KAHLO (MAGDALENA CARMEN FRIDA KAHLO CALDERÓN) nació el 6 de julio de 1907 en la Ciudad de México, en la casa que fuera propiedad de sus padres desde 1904, y que hoy se conoce como la Casa Azul. Hija de Wilhelm (Guillermo) Kahlo, de ascendencia húngaro-alemana, y Matilde Calderón, originaria de Oaxaca, Frida fue la tercera de cuatro hijas. Sus dos hermanas, Matilde y Adriana, fueron las mayores y Cristina, la menor.
        A los seis años Frida enfermó de poliomielitis, causándole que su pierna derecha quedara más corta; esto fue motivo de burlas. Sin embargo, estos sucesos no le impidieron ser una estudiante inquieta y tenaz. Realizó sus estudios en la Escuela Nacional Preparatoria.
        A los 18 años, el 17 de septiembre de 1925, Frida tuvo un trágico accidente. El autobús en el que viajaba fue arrollado por un tranvía. Las consecuencias para ella fueron graves: fractura de varios huesos y lesiones en la espina dorsal. Debido a la inmovilidad a la que se vio someida varios meses, Frida comenzó a pintar. Así, se relaciona con varios artistas, entre ellos la fotógrafa Tina Modotti y el entonces ya reconocido artista Diego Rivera. </h3 >
        <br>
        <h2>Pinturas</h2>
        <br>
        <h3>Autorretrato en un vestido terciopelo</h3>
        <img src="images/Frida-auto.jpg" alt="">
        <br>
        <h3>Las dos Fridas</h3>
        <img src="images/las dos fridas.jpg" alt="">
        <br>
        <h3>La columna rota</h3>
        <img src="images/columna.jpg" alt="">
        <br>
        <h3>Ciervo herido</h3>
        <img src="images/ciervo.jpg "alt="">
        <br>
        <h3>Viva la vida</h3>
        <img src="images/viva.jpg" alt="">
        @stop
    @section('footer')
    @parent 
   @stop
