<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Fixer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FixerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $fixers = Fixer::all();
        $fixers = Fixer::with('user')->get();
        return view('admin.fixer-index', compact('fixers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fixer-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'nik' => ['required', 'string', 'min:16'],
            'phone' => ['required', 'numeric', 'digits_between:8,12'],
            'address' => ['required', 'string', 'max:500'],
        ]);

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]

        );

        Fixer::create(
            [
                'user_id' => $user->id,
                'nik' => $request->nik,
                'phone' => $request->phone,
                'address' => $request->address,

            ]
        );
        // $user->fixer()->create(
        //     [
        //         'nik' => $request->nik,
        //         'phone' => $request->phone,
        //         'address' => $request->address,
        //     ]
        // );
        // dd($var);
        return redirect()->route('admin.fixer.index')->with('success', 'New data added successfully!');
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
    public function edit(Fixer $fixer)
    {
        $fixer->load('user');

        // return $fixer;

        return view('admin.fixer-edit', compact('fixer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fixer $fixer)
    {
        // $data = $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'email', 'unique:users', 'max:255'],
        //     'password' => ['required', 'string', 'min:8'],
        //     'nik' => ['required', 'string', 'min:16'],
        //     'phone' => ['required', 'numeric', 'digits_between:1,10'],
        //     'address' => ['required', 'string', 'max:500'],
        // ]);

        // if (!empty($data['password'])) {
        //     $data['password'] = bcrypt($data['password']);
        // }
        // // else {
        // //     unset($data['password']);
        // // }

        // $request->user()->update([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => $data['password'] ?? $request->user()->password,
        // ]);


        // $fixer->update([
        //     'nik' => $data['nik'],
        //     'phone' => $data['phone'],
        //     'address' => $data['address'],
        // ]);

        $data = $request->validate([
            'name' => ['sometimes', 'string', 'max:255'],
            'email' => ['sometimes','email',Rule::unique('users')->ignore($fixer->user->id),'max:255'],
            'password' => ['nullable', 'string', 'min:8'],
            'nik' => ['sometimes', 'string', 'min:16'],
            'phone' => ['sometimes', 'numeric', 'digits_between:8,12'],
            'address' => ['sometimes', 'string', 'max:500'],
        ]);

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']); 
        }

        $fixer->user()->update([
            'name' => $data['name'] ?? $request->user()->name,
            'email' => $data['email'] ?? $request->user()->email,
            'password' => $data['password'] ?? $request->user()->password,
        ]);

        $fixer->update([
            'nik' => $data['nik'] ?? $fixer->nik,
            'phone' => $data['phone'] ?? $fixer->phone,
            'address' => $data['address'] ?? $fixer->address,
        ]);

        // $fixers->update($request->all());
        return redirect()->route('admin.fixer.index')->with('success', 'New data added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fixer $fixer)
    {
        $fixer->user()->delete();
        return redirect()->route('admin.fixer.index')->with('Success', 'data has been successfully deleted!');
    }
}
