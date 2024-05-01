<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach ($slides as $post)
                <div class="carousel-item active">
                    <img class="slide-full "
                        src="{{ $post->image ? asset('storage/' . $post->image) : 'https://source.unsplash.com/1200x1200/?' . strtolower($post->category->category) }}"
                        alt="Image">
                    <div class="carousel-caption transparan-gradien" style="height: 400px">

                    </div>
                </div>
            @endforeach



        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
