@include('sweetalert::alert')
<section class="my-4">
    <div class="card">

        <div class="card-body">

            <form id="myFormDelete" action="/dashboard/post/{{ $post->id }}" method="post">
                @method('delete')
                @csrf
                <div class="text-center my-4">
                    Postingan akan dihapus secara permanen. Jika Anda yakin, berikan tanda centang.

                    <input class="form-check-input @error('confir') is-invalid @enderror" type="checkbox" value="1"
                        name="confir" value="" id="flexCheckDefault" required>





                </div>

                <div class="d-grid gap-2 col-6 mx-auto">

                    <button class="btn btn-danger" type="submit" id="deleteButton">Hapus</button>
                </div>
            </form>
        </div>
    </div>

</section>
