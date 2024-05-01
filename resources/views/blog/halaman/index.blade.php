@extends('layouts.blog')
@section('content')
    <!-- Page Header Start -->
    @include('blog.header.header')
    <!-- Page Header End -->

    <section class="container">
        <div class="row">
            <div class="col-lg-8">
                @include('blog.halaman.article')
            </div>

            <div class="col-lg-4">
                @include('blog.sedibar.index')
            </div>
        </div>
    </section>
@endsection
