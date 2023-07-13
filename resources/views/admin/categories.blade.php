                @extends('template.admin')

                @section('content')
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Categories Table</h1>
                        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                            For more information about DataTables, please visit the <a target="_blank"
                                href="https://datatables.net">official DataTables documentation</a>.</p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-inline-flex align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                <div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Add Categories</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Create a new
                                                            category</b></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('category.store') }}">
                                                        @csrf
                                                        @method('POST')
                                                        <input type="text" name="name" id="name"
                                                            class="form-control @error('name') is-invalid @enderror @if (old('name') && !$errors->has('name')) is-valid @endif"
                                                            placeholder="*new category" value="{{ old('name') }}">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Create &nbsp;<i
                                                            class="fas fa-plus"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                                $nomor = 1;
                                            @endphp
                                            @foreach ($types as $category)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModal{{ $category->id }}">Edit</button>
                                                        <form action="{{ route('category.delete', $category->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="editModal{{ $category->id }}" tabindex="-1"
                                                    aria-labelledby="editModalLabel{{ $category->id }}" aria-hidden="true">
                                                    <div class="modal-dialog  modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="editModalLabel{{ $category->id }}">
                                                                    <b>Update Category {{ $nomor++ }}</b>
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST"
                                                                    action="{{ route('category.update', $category->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <input type="text" name="name" id="name"
                                                                        class="form-control @error('name') is-invalid @enderror @if (old('name') && !$errors->has('name')) is-valid @endif"
                                                                        value="{{ old('name', $category->name) }}">
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Update
                                                                    &nbsp;<i class="fas fa-pen-fancy"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.container-fluid -->
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- End of Main Content -->
                        @endsection
