    @extends('template.admin')

    @section('content')
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-inline-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
                </div>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <br>
                        <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" name="code" class="form-control @error('code') is-invalid @enderror  @if(old('code') && !$errors->has('code')) is-valid @endif"
                                        id="code" placeholder="*SCAB07" value="{{old('code')}}">
                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Product name</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-box"></i></span>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror @if(old('name') && !$errors->has('name')) is-valid @endif"
                                            id="name" placeholder="*Hot Bread" value="{{old('name')}}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="img" class="form-label">Image</label>
                                    <input type="file" name="img" class="form-control @error('img') is-invalid @enderror"
                                        id="img" accept="image/*">
                                    @error('img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="type_id" class="form-label">Category</label>
                                    <select class="form-select @error('type_id') is-invalid @enderror @if(old('type_id') && !$errors->has('type_id')) is-valid @endif" id="type_id" name="type_id">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{ $category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror @if(old('price') && !$errors->has('price')) is-valid @endif"
                                        id="price" placeholder="*00000" value="{{old('price')}}">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror @if(old('stok') && !$errors->has('stok')) is-valid @endif"
                                        id="stok" placeholder="*000" value="{{old('stok')}}">
                                    @error('stok')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <label for="note" class="form-label">Description</label>
                                    <textarea type="text-area" name="note" class="form-control @error('note') is-invalid @enderror @if(old('note') && !$errors->has('note')) is-valid @endif" cols="40" rows="5"
                                        id="note" placeholder="........">{{old('note')}}</textarea>
                                    @error('note')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Create <i
                                            class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </form>
                        <br>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
            <br>
        </div>
    @endsection
