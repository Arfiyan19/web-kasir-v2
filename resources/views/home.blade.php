@extends('layouts.master')
@section('judul')
Aplikasi Kasir
@endsection
@section('judul_sub')
Halaman Utama Sesudah Login
@endsection
@section('content')
<div class="h2 mb-3 text-center">Halaman Utama</div>
<hr style="width:75%">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Aplikasi Kasir Sederhana</h6>
    </div>
    <div class="card-body">
        <div class="h2">Project 2 - Aplikasi Kasir (Laravel Project)</div>
        <ul>
            <li>Mencatat transaksi pembelian barang</li>
            <li>Menampilkan daftar transaksi pembelian barang</li>
            <li>Authentikasi login pengguna</li>
            <li>Pengaturan data pengguna</li>
            <li>Pengaturan data master produk</li>
        </ul>
    </div>
</div>
@endsection