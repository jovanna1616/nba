@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $team->name }}</h2>
    <p>{{ $team->email }}</p>
    <p>{{ $team->address }}</p>
    <p>{{ $team->city }}</p>

    <ul>
        <p>ALL PLAYERS:</p>

        @foreach($team->players as $player)
            <li>
                <a href="/players/{{ $player->id }}">
                    {{ $player->first_name }} {{ $player->last_name }}
                </a>
            </li>
        @endforeach
    </ul>

    

    

@endsection