@extends('layouts.main')

@section('title',$title)

@section('content')
    <main>
    <table class="shopview normal">
        <tr>
            <td class="alignRight">
                <span class=""><b>Code</b></span>
            </td>
            <td>
                <span class = "bluecolor">:: </span>
            </td>
            <td>
                {{ $shop->code }}
            </td>
        </tr>


        <tr>
            <td class="alignRight">
                <span class=""><b>Name</b></span>
            </td>
            <td>
                <span class = "bluecolor">:: </span>
            </td>
            <td>
                <i>{{ $shop->name }}</i>
            </td>
        </tr>
        
        <tr>
            <td class="alignRight">
                <span class=""><b>Owner</b></span>
            </td>
            <td>
                <span class = "bluecolor">:: </span>
            </td>
            <td>
                {{ $shop->owner }}
            </td>
        </tr>
        
        <tr>
            <td class="alignRight">
                <span class=""><b>Location</b></span>
            </td>
            <td>
                <span class = "bluecolor">:: </span>
            </td>
            <td>
                {{ number_format((double)$shop->latitude,7) }} , 
                {{ number_format((double)$shop->longitude,7) }}
            </td>
        </tr>
        
        <tr>
            <td class="alignRight">
                <span class=""><b>Address</b></span><br>&nbsp
            </td>
            <td>
                <span class = "bluecolor">::</span><br>&nbsp
            </td>
            <td><pre>{{ $shop->address }}</pre>
            </td>
        </tr>
    </table>
@endsection