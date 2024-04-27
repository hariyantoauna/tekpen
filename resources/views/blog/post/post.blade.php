<form action="/posts" method="get">
    @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
    @endif
    @if (request('hastag'))
        <input type="hidden" name="hastag" value="{{ request('hastag') }}">
    @endif

    <div class="input-group ">
        <input type="text" class="form-control" name="search" id="search" value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit" id="search">Cari</button>
    </div>
</form>
<div class="my-3">
    <span class="badge text-bg-success">{{ $title_post }}</span>


</div>

@if ($posts->count())
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">
                @if ($posts[0]->set_image)
                    <img style="height: 400px;"
                        src="{{ $posts[0]->image ? asset('storage/' . $posts[0]->image) : 'https://source.unsplash.com/1200x1200/?' . strtolower($post[0]->category->category) }}"
                        class="card-img-top img-cover" alt="...">
                @endif

                <div class="card-body">

                    <h5 class="card-title">{{ $posts[0]->title }}</h5>
                    <div class="my-3">
                        @foreach ($posts[0]->hastag as $tag)
                            <a class="btn btn-sm btn-secondary rounded-0" href="/posts?hastag={{ $tag->hastag }}">
                                #{{ $tag->hastag }} </a>
                        @endforeach
                    </div>
                    <p class="card-text">{{ implode(' ', array_slice(str_word_count($posts[0]->article, 1), 0, 30)) }}
                    </p>
                    <div>
                        <a class="btn btn-primary btn-sm rounded-0"
                            href="/halaman/{{ $posts[0]->slug }}/{{ $posts[0]->reg }}">Selengkapnya</a>
                    </div>
                    <p class="card-text mt-3"><small class="text-body-secondary"><a class="a-set"
                                href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>&nbsp;&nbsp;&nbsp;<a
                                class="a-set"
                                href="#">{{ \Carbon\Carbon::parse($posts[0]->published_at)->diffForHumans() }}</a></small>
                    </p>
                </div>
            </div>
        </div>
    </div>




    <div class="row row-cols-1 row-cols-md-1 g-4">
        @foreach ($posts->skip(1) as $post)
            <div class="col">

                <div class="card h-100 card-ef">

                    <div class="card-body ">
                        <h6 class="card-title">{{ $post->title }}</h6>
                        <div class="my-3">
                            @foreach ($post->hastag as $tag)
                                <a class="a-set" href="/posts?hastag={{ $tag->hastag }}">
                                    #{{ $tag->hastag }} </a>
                            @endforeach
                        </div>
                        <div>
                            <a class="btn btn-primary btn-sm rounded-0"
                                href="/halaman/{{ $post->slug }}/{{ $post->reg }}">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <small class="text-muted"><a class="a-set"
                                href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>&nbsp;&nbsp;&nbsp;<a
                                class="a-set"
                                href="#">{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</a></small>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
@else
    <p>Pencarian anda tidak ditemukan</p>
@endif


<div class="my-4">
    {{ $posts->links() }}
</div>
