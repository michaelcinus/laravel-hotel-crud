@extends('layouts.main-layout')

@section('content')

    <form action="{{route('stanza-create')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="room_number">ROOM NUMBER</label>
            <input type="">
        </div>
        <div class="form-group">
            <label for="floor">FLOOR</label>
            <input type="">
        </div>
        <div class="form-group">
            <label for="beds">BEDS</label>
            <input type="">
        </div>
        <button type="submit">INSERISCI</button>
    </form>

    <ul>
        @foreach ($stanze as $item)

            <li>
                <a href="{{route('stanza-show', $item -> id)}}">{{ $item -> room_number }}</a>
            </li>
        @endforeach
    </ul>

@endsection