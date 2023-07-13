                @extends('template.admin')

                @section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Supply Product Table</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-inline-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            <div>
                                <a href="{{route('supply.create')}}" class="btn btn-primary btn-sm">Add Supply</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Code</th>
                                            <th>Date</th>
                                            <th>Product</th>
                                            <th>Supplier</th>
                                            <th>Qty</th>
                                            <th>Updated</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($supplys as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->code}}</td>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->product->name}}</td>
                                            <td>{{$item->supplier->name}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>
                                                @if ($item->created_at)
        {{ \Carbon\Carbon::parse($item->create_at)->diffForHumans() }}
    @else
        -
    @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('supply.edit',$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('supply.delete',$item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection

