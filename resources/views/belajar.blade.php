@extends('layouts.app')
@section('title', 'Belajar Mengenal Blade')
@section('header')
    @parent
    <p>Belajar Membuat Layout Inheritance</p>
@endsection

@section('content')
    @if (count($mahasiswa) === 1)
        Array Mahasiswa berisi satu nama
    @elseif (count($mahasiswa) > 1)
        Array Mahasiswa berisi banyak nama
    @else
        Array Mahasiswa tidak ada isinya
    @endif

    @foreach ($mahasiswa as $m)
        <p>Halo, {{ $m }} !</p>
    @endforeach

    @forelse ($mahasiswa as $m)
        <li>{{ $m }}</li>
    @empty
        <p>Daftar Mahasiswa Kosong</p>
    @endforelse

    @php
        echo '<br/> Hari ini tanggal ' . date('d M Y', time());
    @endphp
@endsection
