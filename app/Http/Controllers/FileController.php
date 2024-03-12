<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.upload', [
            "title" => "Verifikasi Data"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'file1' => 'required|max:200',
            'file2' => 'required|max:200',
            'file3' => 'required|max:200',
            'file4' => 'required|max:200',
            'file5' => 'required|max:200',
            'file6' => 'required|max:200',
            'file7' => 'required|max:200',
            'file8' => 'required|max:200',
            'file9' => 'required|max:200',
        ]);
        if ($request->file('file1')) {
            $validateData['file1'] = $request->file('file1')->store('file');
        }
        if ($request->file('file2')) {
            $validateData['file2'] = $request->file('file2')->store('file');
        }
        if ($request->file('file3')) {
            $validateData['file3'] = $request->file('file3')->store('file');
        }
        if ($request->file('file4')) {
            $validateData['file4'] = $request->file('file4')->store('file');
        }
        if ($request->file('file5')) {
            $validateData['file5'] = $request->file('file5')->store('file');
        }
        if ($request->file('file5')) {
            $validateData['file5'] = $request->file('file5')->store('file');
        }
        if ($request->file('file6')) {
            $validateData['file6'] = $request->file('file6')->store('file');
        }
        if ($request->file('file7')) {
            $validateData['file7'] = $request->file('file7')->store('file');
        }
        if ($request->file('file8')) {
            $validateData['file8'] = $request->file('file8')->store('file');
        }
        if ($request->file('file9')) {
            $validateData['file9'] = $request->file('file9')->store('file');
        }

        $validateData['dataset_id'] = auth()->user()->dataset->id;

        File::create($validateData);
        return redirect('/upload')->with('Success', 'File has been Added..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        dd($file);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
