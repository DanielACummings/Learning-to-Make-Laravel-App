@extends('layout')

@section('content')

    <h1>Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                {{ $project->title }}
            </li>
        @endforeach
    </ul>

@endsection
