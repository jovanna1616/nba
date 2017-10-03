@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $player->first_name }} {{ $player->last_name }}</h2>
    <p>{{ $player->email }}</p>
    <a href="/{{ $player->team_id }}">{{ $player->team->name }}</a>

@endsection