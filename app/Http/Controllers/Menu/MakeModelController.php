<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stroke;
use Phpml\Classification\KNearestNeighbors;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\Dataset\ArrayDataset;
use Phpml\Metric\ClassificationReport;
use Phpml\Metric\ConfusionMatrix;
use Phpml\ModelManager;

class MakeModelController extends Controller
{
    public function index()
    {
        return view('menu.make_model');
    }

    public function trainAndTest()
    {
        // Ambil data dari tabel Stroke
        $data = Stroke::select('gender', 'age', 'hypertension', 'heart_disease', 'ever_married',
            'work_type', 'residence_type', 'avg_glucose_level', 'bmi', 'smoking_status', 'stroke')->get()->toArray();

        // Pisahkan atribut dan label
        $samples = array_map(function ($row) {
            return array_slice($row, 0, -1);
        }, $data);
        $labels = array_column($data, 'stroke');

        // Buat dataset dari atribut dan label
        $dataset = new ArrayDataset($samples, $labels);

        // Bagi data menjadi data latih dan data uji
        $split = new StratifiedRandomSplit($dataset, 0.3);

        // Inisialisasi model KNN
        $classifier = new KNearestNeighbors();

        // Training model
        $classifier->train($split->getTrainSamples(), $split->getTrainLabels());

        // Simpan model ke file
        $modelManager = new ModelManager();
        $modelManager->saveToFile($classifier, storage_path('app/stroke_prediction_model.php'));

        // return view('menu.model_result', [
        //     'trainDataSample' => $split->getTrainSamples(),
        //     'trainDataLabel' => $split->getTrainLabels(),
        //     'testDataSample' => $split->getTestSamples(),
        //     'testDataLabel' => $split->getTestLabels(),
        //     // 'confusionMatrix' => $confusionMatrix,
        //     // 'predicted' => $predicted, // Menambahkan hasil prediksi ke dalam data yang dilewatkan ke view
        // ]);

        return back()->with([
            'trainDataSample' => $split->getTrainSamples(),
            'trainDataLabel' => $split->getTrainLabels(),
            'testDataSample' => $split->getTestSamples(),
            'testDataLabel' => $split->getTestLabels(),
        ]);
    }
}
