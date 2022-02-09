@extends('layout.admin.sidebar')

@section('title','Dashboard')

@section('container')
 				<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
                    <p class="mb-4">Anda berada di dashboard Admin, selamat menggunakan sistem ini <a target="_blank"
                            href="/">Kunjungi official web</a>.</p>
                            @if(session('status'))
                                <div class="alert alert-success mt-2">
                                    {{session('status')}}
                                </div>
                            @endif
                            <!-- Jumbotron -->
                            <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h2 class="display-6">Kamus Bahasa Allang</h2>
                                <p class="lead">Selamat datang di Sistem Kamus Bahasa Allang.</p>
                            </div>
                            </div>
                            <!-- /jumbotron -->
                </div>
                <!-- /.container-fluid -->
                
               
@endsection