@extends('layouts.app')
@section('title', 'Model dan Eloquent')
@section('header')
    @parent
    <p>Belajar Mengakses Model</p>
@endsection
@section('content')
    @foreach ($programs as $p)
        <p>{{ $loop->iteration . '. ' . $p['name'] }}</p>
    @endforeach
@endsection
