<!-- resources/views/cats/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Kucing</h1>
    @if ($cats->count() > 0)
        <ul>
            @foreach ($cats as $cat)
                <li>{{ $cat->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada kucing.</p>
    @endif
@endsection
