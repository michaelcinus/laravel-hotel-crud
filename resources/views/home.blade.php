@extends('layouts.main-layout')

@section('content')



    <ul>
        @foreach ($stanze as $item)

            <li>
                <a href="{{route('stanza-show', $item -> id)}}">{{ $item -> room_number }}</a>
            </li>
        @endforeach
    </ul>
@endsection