@extends('layouts.master')

@section('content')
    @foreach($teams as $team)

        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="/{{ $team->id }}">
                    {{ $team->name }}
                </a>
            </h2>

        </div><!-- /.blog-post -->

    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

@endsection

