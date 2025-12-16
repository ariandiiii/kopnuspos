@extends('layouts.app') 

@section('title', ' home')

@section('content')
<h2>daftar produk</h2>
<ul>
    @foreach($produk as $item)
    <li>
        {{ $item['nama'] }} - Rp {{ number_format($item['harga']) }}
    </li>
    @endforeach
    @if (count($produk) == 0)
    <p>produk kosong</p>


    @endif
</ul>

@endsection