<div class="card">

    <div class="card-body">

        @foreach (getHastags() as $tag)
            <a class="btn btn-sm btn-secondary rounded-0" href="/posts?hastag={{ $tag->hastag }}">
                #{{ $tag->hastag . '(' . $tag->total . ')' }} </a>
        @endforeach
        <div class="mt-4">
            <a class="a-set" href="/hastags">Semuanya...</a>
        </div>

    </div>
</div>
