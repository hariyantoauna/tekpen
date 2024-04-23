<div class="card mb-3">
    <img class="img-cover" style="height: 420px"
        src="https://source.unsplash.com/1200x1200/?{{ strtolower($post->category->category) }}" class="card-img-top"
        alt="...">
    <div class="card-body">
        <h4 class="card-title">{{ $post->title }}</h4>

        <small><a class="a-set" href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
            &nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
        </small>
        <div class="my-3">
            @foreach ($post->hastag as $tag)
                <a class="btn btn-sm btn-secondary rounded-0" href="/posts?hastag={{ $tag->hastag }}">
                    #{{ $tag->hastag }} </a>
            @endforeach
        </div>

        <p class="card-text my-4">{!! $post->article !!}</p>


    </div>
</div>
