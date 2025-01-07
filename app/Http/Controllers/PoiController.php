<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Poi;

class PoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Halaman index dari Controller Poi";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::all();

        return view("poi.create", ["data" => $areas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_tervalidasi = $request->validate([
            "nama" => "required|max:50",
            "area_id" => "required",
            "deskripsi" => "max:200"
        ],[
            "nama.required" => "Nama harus diisi.",
            "nama.max" => "Nama maksimal 50 karakter.",
            "area_id.required" => "Area harus diisi.",
            "deskripsi.max" => "Deskripsi maksimal 200 karakter."
        ]);

        $res = Poi::create($data_tervalidasi);

        // if($data_tervalidasi->fails()){
        //     return back()->with('success', 'Data created successfully!');
        // }

        if($res) return back()->with('success', 'Data created successfully!');

        // return $res;

    }

        /**
     * Display the specified resource.
     */
        public function show(string $id)
        {
            $data = \DB::table("areas")
            ->join("pois", "areas.id", "=", "pois.area_id")
            ->select("areas.nama as kabkota", "pois.id", "pois.nama", "pois.deskripsi")
            ->orderBy("areas.id")
            ->get();

            return view("poi.show", ["data" => $data]);
        }

        /**
     * Show the form for editing the specified resource.
     */
        public function edit(string $id)
        {
            return "Anda akan mengedit data dengan PoI dengan ID : ".$id."?";
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
        public function destroy(string $id)
        {
        //
        }
    }
