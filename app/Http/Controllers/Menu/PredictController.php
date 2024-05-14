<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Stroke;
use Illuminate\Http\Request;
use Phpml\Classification\KNearestNeighbors;
use Phpml\ModelManager;
use Illuminate\Support\Facades\Log;


class PredictController extends Controller
{
    public function index()
    {
        return view('menu.predict');
    }

    public function predict(Request $request)
{
    try {
        // Ambil data input dari form
        $inputData = [
            'gender' => (int)$request->input('gender'),
            'age' => (int)$request->input('age'),
            'hypertension' => (int)$request->input('hypertension'),
            'heart_disease' => (int)$request->input('heart_disease'),
            'ever_married' => (int)$request->input('ever_married'),
            'work_type' => (int)$request->input('work_type'),
            'residence_type' =>(int) $request->input('residence_type'),
            'avg_glucose_level' => (float)$request->input('avg_glucose_level'),
            'bmi' => (float)$request->input('bmi'),
            'smoking_status' => (int)$request->input('smoking_status'),
        ];

        // Load model dari file
        $strokeData = Stroke::select('gender', 'age', 'hypertension', 'heart_disease', 'ever_married', 'work_type', 'residence_type', 'avg_glucose_level', 'bmi', 'smoking_status', 'stroke')->get()->toArray();

            // Pisahkan atribut dan label
            $samples = [];
            $labels = [];
            foreach ($strokeData as $data) {
                $samples[] = [
                    $data['gender'],
                    $data['age'],
                    $data['hypertension'],
                    $data['heart_disease'],
                    $data['ever_married'],
                    $data['work_type'],
                    $data['residence_type'],
                    $data['avg_glucose_level'],
                    $data['bmi'],
                    $data['smoking_status']
                ];
                $labels[] = $data['stroke'];
            }

            // Train the KNearestNeighbors model
            $knn = new KNearestNeighbors();
            $knn->train($samples, $labels);

        // $modelManager = new ModelManager();
        // $classifier = $modelManager->restoreFromFile(storage_path('app/stroke_prediction_model.php'));

        // Lakukan prediksi dengan menghilangkan atribut label "stroke" dari input
        $predictionData = [
            $inputData['gender'],
            $inputData['age'],
            $inputData['hypertension'],
            $inputData['heart_disease'],
            $inputData['ever_married'],
            $inputData['work_type'],
            $inputData['residence_type'],
            $inputData['avg_glucose_level'],
            $inputData['bmi'],
            $inputData['smoking_status'],
            // Tambahkan atribut lain yang diperlukan untuk prediksi di sini
        ];

        // Log prediction data
        Log::info('Prediction Data:', $predictionData);

        // $prediction = $classifier->predict([$predictionData]);
        $prediction = $knn->predict([$predictionData]);

        // Mengatur pesan prediksi
        $predictionMessage = $prediction ? 'Stroke' : 'No Stroke';

        // Mengirimkan hasil prediksi kembali ke halaman prediksi
        return back()->with('prediction', $predictionMessage);
    } catch (\Exception $e) {
        // Log exception
        Log::error('Error occurred while making prediction: ' . $e->getMessage());

        // Menangani eksepsi
        return back()->with('error', 'Error occurred while making prediction. Please check logs for details.');
    }
}
}
