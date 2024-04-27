@foreach (getPosts() as $post)
    <a href="/halaman/{{ $post->slug }}/{{ $post->reg }}">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img class="img-cover"
                        src="{{ $post->image ? asset('storage/' . $post->image) : 'https://source.unsplash.com/1200x1200/?' . strtolower($post->category->category) }}"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h6 style="font-size: 11pt">
                            {{ implode(' ', array_slice(str_word_count($post->title, 1), 0, 10)) }}</h6>

                        <p class="card-text" style="font-size: 9pt">
                            <small>{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </a>
@endforeach
