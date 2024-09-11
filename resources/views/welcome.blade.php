@extends('layouts.app', ['title' => 'Home'])

@section('content')
    <div style="display: flex; align-items: center;">
    <div style="flex: 1;">
        <h1 style="font-family: 'Charter', serif !important;font-weight: 500;font-size:8em;">
            Human <br />
            stories & ideas
        </h1>
        <p style="font-family: 'KievitOT', sans-serif !important;font-size:1.6em;">
            A place to read, write, and deepen your understanding
        </p>

        <a href="#" class="btn btn-light rounded-pill bg-dark mt-3" style="color: #fff;font-size:1.5em;padding: 15px 40px;">
            Start reading
        </a>
    </div>
        <img src="{{ asset('img/home.webp') }}" alt="" style="max-width: 35%; height: auto;">
    </div>
@endsection