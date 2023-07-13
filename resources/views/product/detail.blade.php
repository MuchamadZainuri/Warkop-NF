@extends('template.admin')

@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4" style="border-bottom-left-radius: 8px">
            <div class="card-header py-3 d-inline-flex align-items-center justify-content-center">
                <h5 class="m-0 font-weight-bold text-primary">{{ $product->name }}</h5>
            </div>
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('assets/dist/img/snck-hot-breaad.jpg') }}" class="img-fluid"
                        style="border-bottom-left-radius: 8px" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        
                        <table>
                            <tr>
                                <td class="pb-3" style="width: 120px;">
                                    Code
                                </td>
                                <td>
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $product->code }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    Price
                                </td>
                                <td>
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    Stok
                                </td>
                                <td>
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $product->stok }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top">
                                    <p class="card-text pb-3">Description </p>
                                </td>
                                <td style="vertical-align: top">
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $product->note }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-4">
                                    Category
                                </td>
                                <td>
                                    <p class="card-text pb-4">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-4">{{ $product->type->name }}</p>
                                </td>
                            </tr>
                        </table>

                            <div style="float: right">
                            <small class="text-body-secondary" style="text-align: right">Created at
                                    {{ $product->created_at }}</small>
                                    <br>
                            <small class="text-body-secondary">Last updated at
                                    {{ $product->updated_at }}</small>
                                    
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
