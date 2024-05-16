@extends('layout.layout')
@section('title', 'Dataset')
@section('menuDataset', 'active')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb_part breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Upload Datatrain</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end-->

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-3" style=" max-height: 280px; border: 1px solid #000000; border-radius: 15px; padding: 20px;">
            <!-- Bagian Kiri: Upload dari File -->
            <h3>Upload Datatrain dari File</h3>
            <p>Silakan pilih file yang ingin diunggah untuk dataset latih</p>
            <hr>
            <form action="{{ route('dataset.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <label for="file" style="font-size: 18px;">Pilih File:</label>
                    <input type="file" class="form-control-file" name="file" id="file" accept=".csv" required>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Upload</button>
            </form>
            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        <div class="col-md-6 mx-3" style=" border: 1px solid #000000; border-radius: 15px; padding: 20px;">
            <!-- Bagian Kanan: Upload dari Form -->
            <h3>Start Data Entry</h3>

            <form method="POST" action="{{ route('dataset.store') }}" id="strokeForm">
                @csrf
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" class="form-control" id="gender" name="gender" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="hypertension">Hypertension (0 = No, 1 = Yes)</label>
                    <select class="form-control" id="hypertension" name="hypertension" required>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="heart_disease">Heart Disease (0 = No, 1 = Yes)</label>
                    <select class="form-control" id="heart_disease" name="heart_disease" required>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ever_married">Ever Married (0 = No, 1 = Yes)</label>
                    <select class="form-control" id="ever_married" name="ever_married" required>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="work_type">Work Type</label>
                    <input type="text" class="form-control" id="work_type" name="work_type" required>
                </div>
                <div class="form-group">
                    <label for="residence_type">Residence Type</label>
                    <input type="text" class="form-control" id="residence_type" name="residence_type" required>
                </div>
                <div class="form-group">
                    <label for="avg_glucose_level">Average Glucose Level</label>
                    <input type="text" class="form-control" id="avg_glucose_level" name="avg_glucose_level" required>
                </div>
                <div class="form-group">
                    <label for="bmi">BMI</label>
                    <input type="text" class="form-control" id="bmi" name="bmi" required>
                </div>
                <div class="form-group">
                    <label for="smoking_status">Smoking Status</label>
                    <input type="text" class="form-control" id="smoking_status" name="smoking_status" required>
                </div>
                <div class="form-group">
                    <label for="stroke">Stroke (0 = No, 1 = Yes)</label>
                    <select class="form-control" id="stroke" name="stroke" required>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if (session('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger mt-3">{{ session('error') }}</div>
            @endif
        </div>
    </div>
</div>

<script>
    const proceedBtn = document.getElementById('proceedBtn');
    const strokeForm = document.getElementById('strokeForm');

    proceedBtn.addEventListener('click', function() {
        strokeForm.style.display = 'block';
    });
</script>

@endsection
