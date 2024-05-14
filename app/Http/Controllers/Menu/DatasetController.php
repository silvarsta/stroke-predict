<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stroke;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class DatasetController extends Controller
{
    public function index(){
        return view("menu.insert_dataset");
    }
    public function upload(Request $request)
{
    $request->validate([
        'file' => 'required|file|mimes:csv,txt'
    ]);

    if ($request->file('file')->isValid()) {
        $path = $request->file->path();
        $fileData = file($path);

        $data = array_map(function($row) {
            return str_getcsv($row, ";"); // Menggunakan titik koma sebagai delimiter
        }, $fileData);

        $successfulRows = 0;
        DB::beginTransaction();
        try {
            foreach ($data as $index => $row) {
                if (count($row) !== 11) {
                    Log::info('Skipping row due to incorrect number of columns:', $row);
                    continue; // Memastikan hanya memproses baris dengan 11 kolom
                }

                // Pastikan memeriksa setiap elemen jika perlu, contoh dengan pemeriksaan dasar
                if (!is_numeric($row[1]) || !is_numeric($row[2])) {
                    Log::info('Skipping row due to invalid data types in numeric fields:', $row);
                    continue;
                }

                // Proses penyimpanan data
                $stroke = Stroke::create([
                    'gender'            => $row[0],
                    'age'               => (int) $row[1],
                    'hypertension'      => (bool) $row[2],
                    'heart_disease'     => (bool) $row[3],
                    'ever_married'      => $row[4] === 'Yes',
                    'work_type'         => $row[5],
                    'residence_type'    => $row[6],
                    'avg_glucose_level' => (float) $row[7],
                    'bmi'               => (float) $row[8],
                    'smoking_status'    => $row[9],
                    'stroke'            => (bool) $row[10]
                ]);

                if ($stroke && $stroke->exists) {
                    $successfulRows++;
                }
            }
            DB::commit();
            if ($successfulRows > 0) {
                return back()->with('success', "$successfulRows rows uploaded successfully!");
            } else {
                return back()->with('error', 'Valid data was provided, but no rows met the criteria to be saved.');
            }
        } catch (Throwable $e) {
            DB::rollback();
            Log::error('Transaction failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to upload data. Please try again.');
        }
    }

    return back()->with('error', 'Invalid file. Please check the file and try again.');
}
    public function store(Request $request) {
        // Validasi input form
        $validated = $request->validate([
            'gender' => 'required|string',
            'age' => 'required|integer',
            'hypertension' => 'required|boolean',
            'heart_disease' => 'required|boolean',
            'ever_married' => 'required|boolean',
            'work_type' => 'required|string',
            'residence_type' => 'required|string',
            'avg_glucose_level' => 'required|numeric',
            'bmi' => 'required|numeric',
            'smoking_status' => 'required|string',
            'stroke' => 'required|boolean'
        ]);

        // Membuat instance model dan menyimpannya
        try {
            $stroke = Stroke::create($validated);
            return redirect()->route('dataset')->with('success', 'Data has been added successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to save stroke data: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Failed to add the data.');
        }
    }

}
