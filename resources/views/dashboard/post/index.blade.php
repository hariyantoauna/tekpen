@extends('layouts.dashboard')
@section('content')
    @include('sweetalert::alert')
    <section class="container my-4">
        <div class="card">

            <div class="card-body">
                <div>
                    <a class="btn btn-primary" href="/dashboard/post/create"><i class="bi bi-plus-lg"></i> Artikel</a>
                    <a class="btn btn-secondary" href="/dashboard/post"><i class="bi bi-arrow-clockwise"></i> Segarkan</a>
                </div>
                <div class="my-4">
                    <form action="/dashboard/post" method="get">
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        @if (request('hastag'))
                            <input type="hidden" name="hastag" value="{{ request('hastag') }}">
                        @endif

                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        <div class="input-group ">

                            <input type="text" class="form-control" name="search" id="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit" id="search">Cari</button>
                        </div>
                    </form>
                </div>
                <div>
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th class="w-50">Judul</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Kategori</th>
                                <th>Hastag</th>
                                <th>Setup</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}.
                                    </td>
                                    <td>{{ date('d-m-Y', strtotime($post->published_at)) }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td><a class="a-set"
                                            href="/dashboard/post?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                    </td>
                                    <td>
                                        <a class="a-set"
                                            href="/dashboard/post?active={{ $post->active->id }}">{{ $post->active->active }}</a>
                                    </td>

                                    <td><a class="a-set"
                                            href="/dashboard/post?category={{ $post->category->category_slug }}">{{ $post->category->category }}</a>
                                    </td>
                                    <td>
                                        @foreach ($post->hastag as $tag)
                                            <a class="a-set" href="/dashboard/post?hastag={{ $tag->hastag }}">
                                                {{ '#' . $tag->hastag }} </a>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="/dashboard/post?category="></a>
                                    </td>
                                    <td>

                                        <a class="btn btn-sm btn-success m-1" href="/halaman/{{ $post->slug }}/{{ $post->reg }}"><i
                                                class="bi bi-eye"></i></a>
                                        <a class="btn btn-sm btn-warning m-1"
                                            href="/dashboard/post/{{ $post->id }}/edit"><i
                                                class="bi bi-pencil-square"></i></a>

                                        <a class="btn btn-sm btn-danger m-1"
                                            href="/dashboard/post/setup/{{ $post->id }}"><i
                                                class="bi bi-cursor"></i></a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div class="my-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
