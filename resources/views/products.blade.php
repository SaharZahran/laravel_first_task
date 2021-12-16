@extends('layouts.master')
@section('title', 'Products')

@section('content')

<!-- Products-->
<section class="page-section" id="about">
    <div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>

      </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($products as $product)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$product[0]}}</td>
          <td>{{$product[1]}}</td>
        </tr>
        @endforeach
    
    </tbody>
  </table>
    </div>
</section>
@endsection