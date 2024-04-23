@extends('layouts.blog')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-8">
                @include('blog.post.post')
            </div>
            <div class="col-lg-4">
                @include('blog.sedibar.index')
            </div>
        </div>
    </section>
@endsection
