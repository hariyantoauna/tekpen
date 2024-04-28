@extends('layouts.dashboard')
@section('content')
    @include('sweetalert::alert')
    <section class="container my-4">
        <form id="myFormSave" action="/dashboard/post" method="post" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="card">

                <div class="card-body">
                    <img style="width: 100%" class="img-preview img-fluid mb-3">

                    <div class="mb-3">
                        <input class="form-control  @error('image') is-invalid @enderror" type="file" id="image"
                            value="{{ old('image') }}" name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3   @error('title') was-validated @enderror">
                        <div class="form-floating">
                            <textarea class="form-control " placeholder="Leave a comment here" id="title" name="title" style="height: 100px"
                                @error('title') required @enderror>{{ old('title') }}</textarea>
                            <label for="title">Judul Artikel</label>

                        </div>
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea name="article" required>{{ old('article') }}</textarea>

                    </div>

                    <div class=" mb-3">
                        <input type="text" name="hastag" id="tag-input1">
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-dark me-md-2" href="/dashboard/post">Kembali</a>

                        <button class="btn btn-primary" id="saveButton" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
