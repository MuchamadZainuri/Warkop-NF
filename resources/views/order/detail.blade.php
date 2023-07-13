@extends('template.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4" style="border-bottom-left-radius: 8px; width: 800px">
            <div class="card-header py-3 d-inline-flex align-items-center justify-content-center">
                <h5 class="m-0 font-weight-bold text-primary">{{ $order->product->name }}</h5>
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
                                    <p class="card-text pb-3">{{ $order->code }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    Date
                                </td>
                                <td>
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $order->date }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    Status
                                </td>
                                <td>
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $order->status }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top">
                                    <p class="card-text pb-3">Quantity </p>
                                </td>
                                <td style="vertical-align: top">
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $order->qty }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top">
                                    <p class="card-text pb-3">Customer </p>
                                </td>
                                <td style="vertical-align: top">
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $order->user->name }}</p>
                                </td>
                            </tr>
                        </table>
                        <div style="float: right">
                            <small class="text-body-secondary" style="text-align: right">Created at
                                {{ $order->created_at }}</small>
                            <br>
                            <small class="text-body-secondary">Last updated at
                                {{ $order->updated_at }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
@endsection
