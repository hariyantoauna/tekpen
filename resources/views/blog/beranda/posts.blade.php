<section class="container">

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($posts as $post)
            <div class="col">
                <a class="card-ef" href="/halaman/{{ $post->slug }}/{{ $post->reg }}">
                    <div class="card h-100 card-ef">
                        <img style="height: 200px;"
                            src="{{ $post->image ? asset('storage/' . $post->image) : 'https://source.unsplash.com/1200x1200/?' . strtolower($post->category->category) }}"
                            class="card-img-top img-cover" alt="...">
                        <div class="card-body ">
                            <h6 class="card-title">{{ $post->title }}</h6>
                        </div>
                        <div class="card-footer">
                            <small
                                class="text-muted">{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</small>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    @if ($posts->count() > 1)
        <div class="my-3">
            <a class="a-set" href="/posts">Selengkapnya...</a>
        </div>
    @endif


</section>
