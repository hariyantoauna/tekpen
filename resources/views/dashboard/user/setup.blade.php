@extends('layouts.dashboard')
@section('content')
    @include('sweetalert::alert')
    <section class="container my-4">
        <div class="card">

            <div class="card-body">
                <form id="myFormSave" action="/dashboard/users/set/{{ $user->id }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="user_active" class="form-label">User Aktivasi</label>
                        <select class="form-select" name="active" aria-label="Default select example">

                            @foreach ($actives as $active)
                                @if (old('active', $user->user_active) == $active->id)
                                    <option value="{{ $active->id }}" selected>{{ $active->name }}
                                    </option>
                                @else
                                    <option value="{{ $active->id }}">{{ $active->name }}</option>
                                @endif
                            @endforeach


                        </select>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-dark me-md-2" href="/dashboard/users">Kembali</a>

                        <button class="btn btn-primary" id="saveButton" type="submit">Simpan</button>
                    </div>
                </form>

            </div>
        </div>

    </section>
@endsection
