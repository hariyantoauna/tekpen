@extends('layouts.dashboard')
@section('content')
    <section class="container my-4">

        <div class="card">

            <div class="card-body">
                <form action="/dashboard/post/{{ $post->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    @if ($post->image)
                        <img style="width: 100%" src="{{ asset('storage/' . $post->image) }}"
                            class="img-preview img-fluid mb-3">
                    @else
                        <img style="width: 100%" class="img-preview img-fluid mb-3">
                    @endif

                    <div class="mb-3">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                            name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="title" name="title" style="height: 100px">{{ old('title', $post->title) }}</textarea>
                            <label for="title">Judul Artikel</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="article">{{ old('article', $post->article) }}</textarea>
                    </div>

                    <div class=" mb-3">
                        <input type="text" name="hastag" id="tag-input1">
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Batal</button>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>

                </form>

                <hr>
                <div class="my-3">
                    @foreach ($hastag as $tag)
                        <div class="m-1"
                            style="padding-left: 10px; padding-top: 6px; padding-bottom: 6px; background-color: wheat; display: inline;">
                            sadada
                            <form class="d-inline" action="/dashboard/post/hatasg/delete/{{ $tag->id }}"
                                method="post">
                                @csrf

                                <button type="submit" class="btn btn-link btn-sm "
                                    style="position: relative; top: -1px; text-decoration: none; color: black">x</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>





    </section>
@endsection
