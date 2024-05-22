<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    private $columns = [
        'clientName',
        'phone',
        'email',
        'website',
        'city',
        'active'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientList = Client::get();
        return view('clientList', compact('clientList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $client = new Client();
        // $client->clientName = $request->clientName;
        // $client->phone =$request->phone;
        // $client->email =$request->email;
        // $client->website =$request->website;
        // $client->save();
        $message = $this->errMsg();
        $data = $request->validate([
            'clientName' => 'required|max:100|min:3',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
            'city' => 'required|max:30',
            'image' => 'required',
        ], $message);

        $imgExt = $request->image->getClientOriginalExtension();
        $fileName = time() . '.' . $imgExt;
        $path = 'assets/images';
        $request->image->move($path, $fileName);

        $data['image'] = $fileName;

        $data['active'] = isset($request->active);
        Client::create($data);
        // Client::create($request->only($this->columns));
        return redirect()->route('clientList')->with('success', 'New Client data added successfully.');
        // return redirect('clientList');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('editClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = $this->errMsg();
        // Validate the request data
        $data = $request->validate([
            'clientName' => 'required|string|max:100|min:3',
            'phone' => 'required|string|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required|string',
            'city' => 'required|string|max:30',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Nullable and image validation
        ], $message);

        $oldImage = Client::find($id)->image;
        // Check if image is uploaded
        if ($request->image != '') {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $path = 'assets/images';
            $request->image->move($path, $fileName);
            $data['image'] = $fileName;

            // Delete the old image if it exists
            if ($oldImage) {
                Storage::delete($path . '/' . $oldImage);
            }
        } else {
            $data['image'] = $oldImage;
        }

        // Handle the 'active' field
        $data['active'] = $request->has('active');

        // Update the client data
        Client::where('id', $id)->update($data);

        return redirect()->route('clientList')->with('success', 'Client data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->delete();
        // return redirect('clientList');
        return redirect()->route('clientList')->with('success', 'Client Deleted successfully.');
    }

    /**
     * trash.
     */
    public function trash()
    {
        $trashed = Client::onlyTrashed()->get();
        return view('trashClient', compact('trashed'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function restore(string $id)
    {
        Client::where('id', $id)->restore();
        return redirect('clientList');
    }
    /**
     * force delete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->forceDelete();
        // return redirect('clientList');
        return redirect()->route('trashClient')->with('success', 'Client Deleted successfully.');
    }

    public function errMsg()
    {
        return [
            'clientName' => 'please insert a value',
            'clientName.min' => 'please insert more chars'
        ];
    }

}
