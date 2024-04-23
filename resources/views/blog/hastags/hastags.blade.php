<form action="/hastags" method="get">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" id="search">
        <button class="btn btn-outline-secondary" type="submit" id="search">Cari</button>
    </div>
</form>


@if ($hastags->count())
    @foreach ($hastags as $tag)
        <a class="btn btn-sm btn-secondary rounded-0" href="/posts?hastag={{ $tag->hastag }}">
            #{{ $tag->hastag . '(' . $tag->total . ')' }} </a>
    @endforeach
@else
    <p>Pencarian anda tidak ditemukan</p>
@endif
<div class="my-4">
    {{ $hastags->links() }}
</div>
