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
            <h6>Issue: {{ $softwareAppointment->issue_description }}</h6>
            <h6>OS: {{ $softwareAppointment->os }}</h6>
            <h6>Tasks to perform: {{ implode(', ', $softwareAppointment->tasks) }}</h6>
            <h6>Image: <img src="{{ \Illuminate\Support\Facades\Storage::url($softwareAppointment->image) }}"
                    alt="image">
            </h6>
            <h6>Scheduled time: {{ $softwareAppointment->date_time }}</h6>
            <h6>Fixer name: {{ $softwareAppointment->fixer->user->name }}</h6>
            <h6>Fixer email: {{ $softwareAppointment->fixer->user->email }}</h6>
            <h6>Fixer phone: {{ $softwareAppointment->fixer->phone }}</h6>
            <h6>Fixer nik: {{ $softwareAppointment->fixer->nik }}</h6>
            <h6>Fixer address: {{ $softwareAppointment->fixer->address }}</h6>
            <h6>Client name: {{ $softwareAppointment->client->user->name }}</h6>
            <h6>Client email: {{ $softwareAppointment->client->user->email }}</h6>
            <h6>Client phone: {{ $softwareAppointment->client->phone }}</h6>

            <form action="{{ route('pdf.report', $softwareAppointment->id) }}" method="POST">
                @csrf
                <button type="submit">Generate Report</button>
            </form>
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
