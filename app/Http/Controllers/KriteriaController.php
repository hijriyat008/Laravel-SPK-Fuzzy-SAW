<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Kriteria::get();
        foreach ($data as $key) {
            $key->kode = 'C' . $key->kode_kriteria;
            $key->bobot = $key->bobot . "%";
        }
        if ($request->ajax()) {
            $data = $data;
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        return view('admin.kriteria.action', [
                            "data" => $data
                        ]);
                    }
                )->rawColumns(['action'])
                ->make(true);
        }
        $kriteria = Kriteria::latest()->get();

        return view('admin.kriteria.index', [
            "title" => "Kriteria",
            "kriteria" => $kriteria

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
            'nama_kriteria' => 'required|max:255',
            'atribut' => 'required|max:255',
            'bobot' => 'required|max:255',
        ]);

        $kriteria = Kriteria::max('kode_kriteria');
        $kriteria++;
        $kode_kriteria =  $kriteria++;
        $validateData['kode_kriteria'] = $kode_kriteria;
        Kriteria::create($validateData);
        return redirect('/admin/kriteria')->with('Success', 'Kriteria has been Added..');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $kriteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kriteria $kriteria)
    {
        $validateData = $request->validate([
            'nama_kriteria' => 'required|max:255',
            'atribut' => 'required|max:255',
            'bobot' => 'required|max:255',
        ]);
        // $kriteria = Kriteria::all();
        dd($kriteria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriteria $kriteria)
    {
        // dd($kriteria->id);
    }

    public function updatee(Request $request, Kriteria $kriteria)
    {
        $validateData = $request->validate([
            'nama_kriteria' => 'required|max:255',
            'atribut' => 'required|max:255',
            'bobot' => 'required|max:255',
        ]);
        // $kriteria = Kriteria::all();
        Kriteria::where('id', $kriteria->id)->update($validateData);
        return redirect('/admin/kriteria')->with('Success', 'Kriteria has been Updated..');
    }
}
