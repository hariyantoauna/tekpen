<div class="card mb-3">

    @if ($post->set_active)
        @if ($post->image)
            <img class="img-cover mb-5" style="height: 420px"
                src="{{ $post->image ? asset('storage/' . $post->image) : 'https://source.unsplash.com/1200x1200/?' . strtolower($post->category->category) }}"
                class="card-img-top" alt="...">
        @endif


        <div class="card-body">
            @if ($post->set_title)
                <h3 class="card-title">{{ $post->title }}</h3>
            @endif

            @if ($post->set_author)
                <small><a class="a-set" href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
                    &nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                </small>
            @endif


            <div class="my-3">
                @foreach ($post->hastag as $tag)
                    <a class="btn btn-sm btn-secondary rounded-0" href="/posts?hastag={{ $tag->hastag }}">
                        #{{ $tag->hastag }} </a>
                @endforeach
            </div>
            @if ($post->set_article)
                <p class="card-text my-4">{!! $post->article !!}</p>
            @endif

            @if ($post->set_comment)
            @endif

        </div>
    @else
        <div class="text-center mt-2">
            <p>Halaman ini tidak terpublikasi</p>

        </div>

    @endif


</div>
