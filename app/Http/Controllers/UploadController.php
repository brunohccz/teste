<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Models\Profile;

class UploadController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        return view('upload.index', compact('profiles'));
    }

    public function createForm()
    {
        return view('upload.create');
    }

    public function store(UploadRequest $request)
    {
        $path = $request->file('avatar')->store('avatars');

        Profile::query()->create([
            'avatar' => $path,
            'name' => $request->name,
        ]);

        return redirect()->route('upload.index');
    }
}
