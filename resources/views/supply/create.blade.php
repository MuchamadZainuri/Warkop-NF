    @extends('template.admin')

    @section('content')
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-inline-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Supply Product</h6>
                </div>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <br>
                        <form method="POST" action="{{ route('supply.store') }}" >
                            @csrf
                            <br>
                            <div class="row g-3">
                                <div class="col-md">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" name="code" class="form-control @error('code') is-invalid @enderror  @if(old('code') && !$errors->has('code')) is-valid @endif"
                                        id="code" placeholder="*SPAC12" value="{{old('code')}}">
                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <label for="date" class="form-label">Date</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror @if(old('date') && !$errors->has('date')) is-valid @endif"
                                            id="date" value="{{date('Y-m-d')}}">
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="product_id" class="form-label">Product</label>
                                    <select class="form-select @error('product_id') is-invalid @enderror @if(old('product_id') && !$errors->has('product_id')) is-valid @endif" id="product_id" name="product_id">
                                        @foreach ($product as $item)
                                            <option value="{{$item->id}}">{{ $item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <label for="supplier_id" class="form-label">Supplier</label>
                                    <select class="form-select @error('supplier_id') is-invalid @enderror @if(old('supplier_id') && !$errors->has('supplier_id')) is-valid @endif" id="supplier_id" name="supplier_id">
                                        @foreach ($supplier as $item)
                                            <option value="{{$item->id}}">{{ $item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('supplier_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <label for="qty" class="form-label">Quantity</label>
                                    <input type="number" name="qty" class="form-control @error('qty') is-invalid @enderror  @if(old('qty') && !$errors->has('qty')) is-valid @endif"
                                        id="qty" placeholder="*000" value="{{old('qty')}}">
                                    @error('qty')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <br>
                                    <button class="btn btn-primary" type="submit">Supply &nbsp;<i
                                            class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            <br>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
        <br>
    @endsection
