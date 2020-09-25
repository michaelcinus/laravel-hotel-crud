@extends('layouts.main-layout')

@section('content')
    <ul>
        @foreach ($stanze as $item)

            <li>
                {{ $item -> room_number }}
                {{ $item -> floor }}
                {{ $item -> beds }}
            </li>
        @endforeach
    </ul>
@endsection