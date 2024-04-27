<section>
    <div class="card">

        <div class="card-body">

            <div class="alert alert-secondary" role="alert">
                <h6>{{ $post->title }}</h6>
            </div>

            <form action="/dashboard/post/set/{{ $post->id }}" method="post">
                @csrf
                <table class="table">
                    <tr>
                        <td>Pilih Kategori</td>
                        <td>:</td>
                        <td>
                            <select name="category_id" class="form-select" aria-label="Default select example">
                                @foreach ($categorys as $category)
                                    @if (old('category_id', $post->category_id) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->category }}
                                        </option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endif
                                @endforeach


                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Publikasi</td>
                        <td>:</td>
                        <td>
                            <input name="published_at" type="datetime-local" class="form-control"
                                value="{{ $post->published_at }}">
                        </td>
                    </tr>

                    <tr>
                        <td>Tampilkan Gambar</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="set_image" type="checkbox" role="switch"
                                    id="set_image" value="1" {{ $post->set_image == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="set_image"></label>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Tampilkan Judul</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="set_title" type="checkbox" role="switch"
                                    id="set_title" value="1" {{ $post->set_title == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="set_title"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tampilkan Penulis</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="set_author" type="checkbox" role="switch"
                                    id="set_author" value="1" {{ $post->set_author == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="set_author"></label>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Tampilkan Isi</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="set_article" type="checkbox" role="switch"
                                    id="set_article" value="1" {{ $post->set_article == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="set_article"></label>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Tampilkan Komentar</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="set_comment" type="checkbox" role="switch"
                                    id="set_comment" value="1" {{ $post->set_comment == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="set_comment"></label>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>Terbitkan</td>
                        <td>:</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="set_active" type="checkbox" role="switch"
                                    id="set_active" value="1" {{ $post->set_active == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="set_active"></label>
                            </div>

                        </td>
                    </tr>
                </table>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Button</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</section>
