@foreach ($posts as $post)
    <a href="/halaman/{{ $post->post->slug }}/{{ $post->post->reg }}">
        <div class="card mb-3  col-ef">

            <div class="card-body">
                <h5 class="card-title">{{ $post->post->title }}</h5>
                <small> {{ $post->post->author }}&nbsp;&nbsp;&nbsp;

                    {{ \Carbon\Carbon::parse($post->post->published_at)->diffForHumans() }}</small>
            </div>
        </div>
    </a>
@endforeach
