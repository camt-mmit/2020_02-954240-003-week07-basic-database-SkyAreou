@extends('layouts.main')

@section('title',$title)

@section('content')
    <main>
        <table class=>

            <thed>
                <tr>
                    <th class="bg">Code</th>
                    <th class="bg">Name</th>
                    <th class="bg">Owner</th>
                <tr>
            </thed>

            <tbody>
                @foreach($shops as $shop)
                    <tr>
                        <th>
                            <a class="under" href="{{ route('shop-view',['shop' => $shop->code,]) }}">
                            <span class="underline">{{ $shop->code }}</span>
                            </a>
                        </th>
                        <td class="normal" width=400px>{{ $shop->name }}</td>
                        <td class="normal"  width=200px>{{ $shop->owner }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </main>
@endsection