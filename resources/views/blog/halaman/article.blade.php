<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->category }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>

        <small><a href="">{{ $post->author }}</a> <a
                href="">{{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</a></small>
        <p class="card-text">{!! $post->article !!}</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        @foreach ($post->hastag as $tag)
            <a class="btn btn-sm btn-secondary rounded-0" href=""> #{{ $tag->hastag }} </a>
        @endforeach
    </div>
</div>
