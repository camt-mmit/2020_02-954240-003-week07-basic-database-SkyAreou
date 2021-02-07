@extends('layouts.main')

@section('title',$title)

@section('content')
    <main>
        <table class=>

            <thed>
                <tr>
                    <th class="bg">Code</th>
                    <th class="bg">Name</th>
                <tr>
            </thed>

            <tbody>
                @foreach($products as $product)
                    <tr>
                        <th>
                            <a href="{{ route('product-view',['product' => $product->code,]) }}">
                            {{ $product->code }}
                            </a>
                        </th>
                        <td width=300px class="normal">{{ $product->name }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </main>
@endsection