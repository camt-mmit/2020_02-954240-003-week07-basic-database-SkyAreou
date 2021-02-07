@extends('layouts.main')

@section('title',$title)

@section('content')
    <main>
        <p>
            <b>Code</b>
            <span> {{ $product->code }} </span>
            <br/>
        </p>

        <p>
            <b>Name</b>
            <span> {{ $product->name }} </span>
            <br/>
        </p>

        <p>
            <b>Price</b>
            <span> {{ number_format((double)$product->price,2) }} </span>
            <br/>
        </p>

        <pre> {{ $product->description }} </pre>
    </main>
@endsection