@extends('layouts.dashboard')
@section('content')
    @include('sweetalert::alert')
    <section class="container my-4">
        <div>
            <div class="card">

                <div class="card-body">
                    <div>

                        <a class="btn btn-secondary" href="/dashboard/users"><i class="bi bi-arrow-clockwise"></i> Segarkan</a>
                    </div>
                    <div class="my-4">
                        <form action="/dashboard/users" method="get">
                            @if (request('active'))
                                <input type="hidden" name="active" value="{{ request('active') }}">
                            @endif


                            <div class="input-group ">

                                <input type="text" class="form-control" name="search" id="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-outline-secondary" type="submit" id="search">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>Cretae</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Setup</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a class="a-set"
                                                href="/dashboard/users?active={{ $user->active->id }}">{{ $user->active->name }}</a>
                                        </td>
                                        <td>

                                            <a class="btn btn-sm btn-warning"
                                                href="/dashboard/users/{{ $user->id }}/edit"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <a class="btn btn-sm btn-dark"
                                                href="/dashboard/users/setup/{{ $user->id }}"><i
                                                    class="bi bi-gear"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="my-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
