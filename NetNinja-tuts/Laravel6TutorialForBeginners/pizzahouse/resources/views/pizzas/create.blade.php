@extends('layouts.layout')

@section('content')
  <div class="wrapper create-pizza">
    <h1>create a new pizza</h1>
    <form action="/pizzas" method="POST">
      @csrf
      <label for="name">your name: </label>
      <input type="text" name="name" id="name">
      <label for="type">choose pizza type: </label>
      <select name="type" id="type">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="veg supreme">Veg Supreme</option>
      <option value="volcano">Volcano</option>
      </select>
      <label for="base">choose pizza base: </label>
      <select name="base" id="base">
      <option value="cheesy crust">Cheesy Crust</option>
      <option value="garlic crust">Garlic Crust</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="thick">Thick</option>
      </select>
      <fieldset>
        <label>Extra toppings: </label>
        <input type="checkbox" name="toppings[]" value="mushrooms">mushrooms<br />
        <input type="checkbox" name="toppings[]" value="peppers">peppers<br />
        <input type="checkbox" name="toppings[]" value="garlic">garlic<br />
        <input type="checkbox" name="toppings[]" value="olives">olives<br />
      </fieldset>
      <input type="submit" value="Order Pizza">
    </form>
  </div>
@endsection
