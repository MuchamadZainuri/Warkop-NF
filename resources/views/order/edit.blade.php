@extends('template.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-inline-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Update Order</h6>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <br>
                    <form method="POST" action="{{ route('order.update', $order->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-md">
                                <label for="code" class="form-label">Code</label>
                                <input type="text" name="code" class="form-control @error('code') is-invalid @enderror  @if(old('code') && !$errors->has('code')) is-valid @endif"
                                    id="code" placeholder="*SCAB07" value="{{ old('code', $order->code) }}">
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="date" class="form-label">Date</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror @if(old('date') && !$errors->has('date')) is-valid @endif"
                                        id="date" value="{{ old('date', $order->date) }}">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="status" class="form-label">Status</label>
<select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
    <option selected disabled value="">Choose...</option>
    @foreach (\App\Models\Order::getStatusEnumValues() as $status)
        <option value="{{ $status }}" {{ old('status', $order->status) === $status ? 'selected' : '' }}>
            {{ ucfirst($status) }}
        </option>
    @endforeach
</select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="qty" class="form-label">Quantity</label>
                                <input type="number" name="qty" class="form-control @error('qty') is-invalid @enderror @if(old('qty') && !$errors->has('qty')) is-valid @endif"
                                    id="qty" placeholder="*00000" value="{{ old('qty', $order->qty) }}">
                                @error('qty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="product_id" class="form-label">Product</label>
                                <select class="form-select @error('product_id') is-invalid @enderror @if(old('product_id') && !$errors->has('product_id')) is-valid @endif" id="product" name="product_id">
                                    @foreach ($product as $products )
                                        <option value="{{ $products->id }}" @if (old('product_id',$products->id) == $order->product_id)
                                            selected="selected"
                                        @endif >{{ $products->name }}</option>
                                @endforeach
                                </select>
                                @error('product_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="user_id" class="form-label">Customer</label>
                                <select class="form-select @error('user_id') is-invalid @enderror @if(old('user_id') && !$errors->has('user_id')) is-valid @endif" id="customer" name="customer">
                                    @foreach ($user as $customers )
                                        <option value="{{ $customers->id }}" @if (old('user_id',$customers->id) == $order->customer_id)
                                            selected="selected"
                                        @endif>{{ $customers->name }}</option>
                                        
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <label for="note" class="form-label">Description</label>
                                <textarea type="text-area" name="note" class="form-control @error('note') is-invalid @enderror @if(old('note') && !$errors->has('note')) is-valid @endif" cols="40" rows="5"
                                    id="note" placeholder="........">{{ old('note', $order->note) }}</textarea>
                                @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update &nbsp;<i class="fas fa-pen-fancy"></i></button>
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
