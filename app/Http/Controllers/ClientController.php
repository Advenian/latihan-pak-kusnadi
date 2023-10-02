<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with('user')->get();
        return view('admin.client-index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client-create');
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
            'phone' => ['required', 'numeric', 'digits_between:8,12'],
        ]);

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]

        );
     
        Client::create(
            [
                'user_id' => $user->id,
                'phone' => $request->phone,

            ]
        );

        return redirect(route('admin.client.index'));
    
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
    public function edit(Client $client)
    {
        return view('admin.client-edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'name' => [ 'string', 'max:255'],
            'email' => [ 'email', Rule::unique('users', 'email')->ignore($client->user_id), 'max:255'],
            'password' => [ 'nullable','string','min:8'],
            'phone' => [ 'numeric', 'digits_between:8,12'],
        ]);

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        else {
            unset($data['password']);
        }
     
        $client->update([
            'phone' => $data['phone'],
        ]);

        unset($data['phone']);

        $client->user()->update($data);

        return redirect(route('admin.client.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        
        $client->user()->delete();
        return redirect()->route('admin.client.index')->with('Success', 'data has been successfully deleted!');
    }
}
