<?php

namespace App\Http\Controllers;

use App\Models\Fixer;
use Illuminate\Http\Request;
use App\Models\HardwareAppointment;
use App\Models\SoftwareAppointment;
use App\Models\DiagnosticAppointment;
use Barryvdh\DomPDF\Facade\Pdf;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function software_index()
    {
        $softwareAppointments = SoftwareAppointment::with('client', 'fixer')->get();
        $clients = $softwareAppointments->pluck('client')->unique();
        $fixers = Fixer::all();
        // $fixers = $softwareAppointments->pluck('fixer')->unique();

        // return $softwareAppointments;
        return view('admin.software', compact('softwareAppointments', 'clients', 'fixers'));
    }
    public function hardware_index()
    {
        $hardwareAppointments = HardwareAppointment::all();
        return view('admin.hardware', compact('hardwareAppointments'));
    }
    public function diagnostic_index()
    {
        $diagnosticAppointments = DiagnosticAppointment::all();
        return view('admin.diagnostic', compact('diagnosticAppointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function software_store(Request $request)
    {
        // dd($request);

        $request->validate([
            'issue_description' => 'required|string',
            'os' => 'required|string',
            'tasks' => 'required|array',
            'tasks.*' => 'string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_time' => 'required',
        ]);


        $clientId = auth()->user()->client->id;
        $imagePath = $request->file('image')->store('imageUpload');

        SoftwareAppointment::create([
            'fixer_id' => null,
            'client_id' => $clientId,
            // 'client_id' => $request->clients->client_id,
            'os' => $request->os,
            'issue_description' => $request->issue_description,
            'tasks' => $request->tasks,
            'image' => $imagePath,
            'date_time' => $request->date_time,

        ]);

        // dd($hasil);
        return redirect(route('user.home'));
    }
    public function software_assignFixer(Request $request, string $id)
    {
        $request->validate([
            'fixer' => 'required|exists:fixers,id', // Adjust validation rules as needed
        ]);

        // Get the selected fixer ID from the form input
        $selectedFixerId = $request->input('fixer');
        $softwareAppointment = SoftwareAppointment::find($id);

        if ($softwareAppointment && is_null($softwareAppointment->fixer_id)) {
            $softwareAppointment->update([
                'fixer_id' => $selectedFixerId,
                'status' => 'assigned'
            ]);

            return redirect()->route('admin.software.index')->with('success', 'Appointment assigned successfully');
        } else {
            $softwareAppointment->update([
                'fixer_id' => $selectedFixerId,
                'status' => 'assigned'
            ]);
        }

        return redirect()->route('admin.software.index')->with('error', 'Appointment could not be assigned');
    }

    public function software_detail($id)
    {
        $softwareAppointment = SoftwareAppointment::with('fixer', 'client')->find($id);


        if (!$softwareAppointment) {
            abort(404);
        }

        // return ($softwareAppointment);
        return view('admin.software-detail', compact('softwareAppointment'));
    }

    public function pdf_report($id)
    {
        $softwareAppointment = SoftwareAppointment::with('fixer', 'client')->find($id);

        if (!$softwareAppointment) {
            abort(404);
        }

        $pdf = Pdf::loadView('pdf.report', compact('softwareAppointment'));

        return $pdf->download('report.pdf');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function software_destroy(SoftwareAppointment $softwareAppointmentId)
    {
        $softwareAppointmentId->delete();
        return redirect()->route('admin.software.index')->with('Success', 'data has been successfully deleted!');
    }
}
