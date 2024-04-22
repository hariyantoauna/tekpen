<section class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @if ($posts->count())
            @foreach ($posts as $post)
                <a href="/halaman/{{ $post->slug }}/{{ $post->reg }}">
                    <div class="col col-ef">
                        <div class="card card-ef  h-100">
                            <img class="img-cover" style="height: 220px"
                                src="https://source.unsplash.com/1200x1200/?{{ strtolower($post->category->category) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <small>{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</small>

                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
        @endif

    </div>

</section>
