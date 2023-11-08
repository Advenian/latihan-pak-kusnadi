@extends('admin.admin_master')
@section('admin.css')
    {{-- Data Table --}}
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('admin.index')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ ucfirst(request()->segment(2)) }} Data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="tableFix" style="width: 99%" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>OS</th>
                        <th>Brand</th>
                        <th>Date</th>
                        <th>Fixer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hardwareAppointments as $hardwareAppointment)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            <td>{{ $hardwareAppointment->id }}</td>
                            <td>{{ $hardwareAppointment->client->user->name }}</td>
                            <td>{{ $hardwareAppointment->os }}</td>
                            <td>{{ $hardwareAppointment->brand }}</td>
                            <td>{{ $hardwareAppointment->date_time }}</td>
                            <td>
                                @if ($hardwareAppointment->fixer)
                                    {{ $hardwareAppointment->fixer->user->name }}
                                @else
                                    <i>Unassigned</i>
                                @endif
                            </td>
                            <td>
                                <div class="row justify-content-center" style="column-gap: 7px;">
                                    <form action="{{ route('admin.hardware.destroy', $hardwareAppointment->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger text-align-center"><i
                                                class="fa fa-user-slash"></i></button>
                                    </form>
                                    <a href="{{ route('admin.hardware.detail', $hardwareAppointment->id) }}"><button
                                            class="btn btn-warning text-align-center "><i
                                                class="fa fa-eye"></i></button></a>

                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-default{{ $hardwareAppointment->id }}">
                                        <i class="fa fa-user-tag"></i>
                                    </button>
                                    <div class="modal fade" id="modal-default{{ $hardwareAppointment->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form
                                                    action="{{ route('admin.hardware.assign', $hardwareAppointment->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Assign a Fixer</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <select name="fixer" id="select">
                                                            <option value="">Please select a Fixer to assign</option>
                                                            @foreach ($fixers as $fixer)
                                                                @if ($fixer)
                                                                    <option value="{{ $fixer->id }}">
                                                                        {{ $fixer->user->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Assign</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
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
