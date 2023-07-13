@extends('template.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4" style="border-bottom-left-radius: 8px; width: 700px">
            <div class="card-header py-3 d-inline-flex align-items-center justify-content-center">
                <h5 class="m-0 font-weight-bold text-primary">{{ $user->name }}</h5>
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
                                    Email
                                </td>
                                <td>
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $user->email }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    Phone Number
                                </td>
                                <td>
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $user->hp }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    Roles
                                </td>
                                <td>
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $user->roles->pluck('name')->implode(', ') }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top">
                                    <p class="card-text pb-3">Address </p>
                                </td>
                                <td style="vertical-align: top">
                                    <p class="card-text pb-3">:</p>
                                </td>
                                <td>
                                    <p class="card-text pb-3">{{ $user->address }}</p>
                                </td>
                            </tr>
                        </table>
                        <div style="float: right">
                            <small class="text-body-secondary" style="text-align: right">Created at
                                {{ $user->created_at }}</small>
                            <br>
                            <small class="text-body-secondary">Last updated at
                                {{ $user->updated_at }}</small>
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
