<!DOCTYPE html>
<html lang="en">

<head>
    <style>

    </style>
</head>

<body>


    <h6>Issue: {{ $softwareAppointment->issue_description }}</h6>
    <h6>OS: {{ $softwareAppointment->os }}</h6>
    <h6>Tasks to perform: {{ implode(', ', $softwareAppointment->tasks) }}</h6>
    <h6>Image: <img src="{{ \Illuminate\Support\Facades\Storage::url($softwareAppointment->image) }}" alt="image">
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

</body>

</html>
