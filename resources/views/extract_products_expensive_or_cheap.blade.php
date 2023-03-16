@extends("layout") 
@section("title") Список продуктов  @endsection

@section("content")
Здесь будут список продуктов


<form method="get" action="/extract_products_expensive_or_cheap" >

<div class="dropdown-menu dropdown-menu-dark position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">

<label >Какие товары отобразить? </label>
    @csrf
    <select name="parametr">
    <option  value="expensive">Сначала дорогие</option>
    <option  value="cheap">Сначала дешевые</option>
    </select>

<p><input type="submit" value="Выбрать" class="btncls " ></p>

</div>

@foreach($product as $el)
    <div>
    <p>Название: {{$el->name}}  <br> Цена: {{$el->price}} {{$el->currency}}  <br>Количество:  {{$el->quantity}} {{$el->unit}}</p>
    </did>
@endforeach

@endsection

