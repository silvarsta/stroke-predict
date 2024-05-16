@extends('layout.layout')

@section('title', 'Prediction')

@section('menuPrediction', 'active')

@section('content')
<section>
    <div class="container mt-5">
        <h2>Prediction</h2>
        <form action="{{ route('prediction.predict') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" name="gender" id="gender">
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="age">
            </div>
            <div class="mb-3">
                <label for="hypertension" class="form-label">Hypertension</label>
                <select class="form-select" name="hypertension" id="hypertension">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="heart_disease" class="form-label">Heart Disease</label>
                <select class="form-select" name="heart_disease" id="heart_disease">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ever_married" class="form-label">Ever Married</label>
                <select class="form-select" name="ever_married" id="ever_married">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="work_type" class="form-label">Work Type</label>
                <select class="form-select" name="work_type" id="work_type">
                    <option value="1">Private</option>
                    <option value="2">Self Employed</option>
                    <option value="3">Children</option>
                    <option value="4">Govt Job</option>
                    <option value="5">Never Worked</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="residence_type" class="form-label">Residence Type</label>
                <select class="form-select" name="residence_type" id="residence_type">
                    <option value="0">Rural</option>
                    <option value="1">Urban</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="avg_glucose_level" class="form-label">Average Glucose Level</label>
                <input type="number" step="0.01" class="form-control" name="avg_glucose_level" id="avg_glucose_level">
            </div>
            <div class="mb-3">
                <label for="bmi" class="form-label">BMI</label>
                <input type="number" step="0.01" class="form-control" name="bmi" id="bmi">
            </div>
            <div class="mb-3">
                <label for="smoking_status" class="form-label">Smoking Status</label>
                <select class="form-select" name="smoking_status" id="smoking_status">
                    <option value="1">Smokes</option>
                    <option value="2">Never Smokes</option>
                    <option value="3">Formerly Smoked</option>
                    <option value="4">Unknown</option>
                </select>
            </div>

            <button type="submit" class="btn_2 ">Predict</button>
        </form>
        @if (session('prediction'))
            <div class="alert alert-success mt-3" role="alert">
                Hasil prediksi: {{ session('prediction') }}
            </div>
        @endif

        <!-- Menampilkan pesan error jika terjadi kesalahan -->
        @if (session('error'))
            <div class="alert alert-danger mt-3" role="alert">
                Terjadi kesalahan: {{ session('error') }}
            </div>
        @endif
    </div>
@endsection
