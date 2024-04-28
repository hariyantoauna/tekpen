@extends('layouts.dashboard')
@section('content')
    @include('sweetalert::alert')
    <section class="container my-4">

        <div class="card">

            <div class="card-body">
                <form id="myFormSave" action="/dashboard/users/{{ $user->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" disabled value="{{ old('email', $user->email) }}"
                            id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" required autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input @error('cek') is-invalid @enderror" name="cek"
                            id="cek">
                        <label class="form-check-label" for="cek">Check me out</label>
                    </div>
                    <button type="submit" id="saveButton" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


    </section>
@endsection
