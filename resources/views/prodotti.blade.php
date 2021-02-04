@extends('layouts.layout_page1')
@section('lists_products')
<div id="container_products">
  <div class="margin_10">
    <h2 class="titolo_card">LE LUNGHE</h2> 
    <div id="container_pasta" class="flex_row"> 
      

      @foreach ($lunghe as $pasta)
      <div class="card_pasta">
        <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
      </div>
      @endforeach

    </div>
    {{-- corte --}}
    <h2 class="titolo_card">LE CORTE</h2> 
    <div id="container_pasta" class="flex_row"> 
      

      @foreach ($corte as $pasta)
      <div class="card_pasta">
        <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
      </div>  
      @endforeach

    </div>
    {{-- cortissime --}}
    <h2 class="titolo_card">LE CORTISSIME</h2> 
    <div id="container_pasta" class="flex_row "> 
      

      @foreach ($cortissime as $pasta)
      <div class="card_pasta">
        <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
      </div>  
      @endforeach

    </div>
  </div>
</div>   
@endsection