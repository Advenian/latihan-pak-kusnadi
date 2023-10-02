@extends('admin.admin_master')
@section('admin.css')
    {{-- Data Table --}}
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('admin.index')
    <a href="{{ route('admin.client.create') }}"><button class="plus-button m-2"><i class="fa fa-plus m-auto"></i></button></a>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ ucfirst(request()->segment(2)) }} Data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="tableFix" style="width: 99%" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            {{-- <td>{{ $loop->iteration + ($user->perpage() * ($user->currentpage()-1)) }}</td> --}}
                            <td>{{ $client->user->name }}</td>
                            <td>{{ $client->user->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>
                                <div class="row justify-content-center" style="column-gap: 7px;">
                                    <a href="{{ route('admin.client.edit', $client->id) }}"><button
                                            class="btn btn-primary text-align-center "><i
                                                class="fa fa-user-edit"></i></button></a>
                                    <form action="{{ route('admin.client.destroy', $client->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="btn btn-danger text-align-center"><i
                                                class="fa fa-user-slash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@push('scripts')
    <script>
        $("#tableFix").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": ["copy", "excel", "pdf", "print"],
            "paging": true,
            "searching": true,
        }).buttons().container().appendTo('#tableFix_wrapper .col-md-6:eq(0)');
    </script>
@endpush
