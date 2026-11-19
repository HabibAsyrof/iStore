@extends('dashboard.layouts.app')
@section('content')
     <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Data Users</h3>

            <a href="{{ route('admin.create') }}" class="btn btn-primary">
                + Tambah User
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th width="60">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th width="180" class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>********</td>

                                    <td class="text-center">
                                        <a href=""
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action=""
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus user ini?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">
                                        Belum ada data user.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
