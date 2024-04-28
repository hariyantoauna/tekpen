@extends('layouts.dashboard')
@section('content')
    @include('sweetalert::alert')
    <main class="container my-4">
        @include('dashboard.post.setup.publikasi')
        @include('dashboard.post.setup.hapus')
    </main>
@endsection
