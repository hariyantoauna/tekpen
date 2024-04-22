@extends('layouts.blog')
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-9">
                @include('blog.hastag.hastag')
            </div>
        </div>
    </section>
@endsection
