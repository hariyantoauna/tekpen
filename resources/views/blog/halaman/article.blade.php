<div class="card mb-3">
    <img class="img-cover" style="height: 420px"
        src="https://source.unsplash.com/1200x1200/?{{ strtolower($post->category->category) }}" class="card-img-top"
        alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>

        <small>
            {{ $post->author }}&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
        </small>
        <p class="card-text my-4">{!! $post->article !!}</p>

        @foreach ($post->hastag as $tag)
            <a class="btn btn-sm btn-secondary rounded-0" href="/hastag/{{ $tag->hastag }}">
                #{{ $tag->hastag }} </a>
        @endforeach
    </div>
</div>
