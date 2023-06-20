<!-- resources/views/cats/adopted.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Kucing yang Telah Diadopsi</h1>
    @if ($cats)
        <ul>
            @foreach ($cats as $cat)
                <li>{{ $cat['name'] }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada kucing yang telah diadopsi.</p>
    @endif
@endsection
