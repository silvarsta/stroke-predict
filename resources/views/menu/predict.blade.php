@extends('layout.layout')

@section('title', 'Prediction')

@section('menuPrediction', 'active')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb_part breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Prediction</h2>
                        <p style="color: black; text-align: center; text-transform: none;">Selamat datang di Halaman Prediksi Stroke. Di sini, Anda dapat memprediksi kemungkinan seseorang mengalami stroke <br> dengan memasukkan informasi yang relevan. Gunakan formulir yang disediakan dan dapatkan hasil prediksi dengan sekali klik. <br> Ingat, hasil ini hanya sebagai panduan dan bukan pengganti nasihat medis profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end-->
<section>
    <div class="container mb-4">
        <div class="col-md-8 mx-auto" style=" border: 1px solid #000000; border-radius: 15px; padding: 20px;">
            <form action="{{ route('prediction.predict') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option selected>Choose an answer</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="age">Age</label>
                        <input type="text" class="form-select" id="age" name="age" required>
                    </div>
                    <div class="input-group mb-3">
                        <label for="hypertension">Do you have hypertension?</label>
                        <select class="form-select" id="hypertension" name="hypertension" required>
                            <option selected>Choose an answer</option>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="heart_disease">Do you have Heart Disease?</label>
                        <select class="form-select" id="heart_disease" name="heart_disease" required>
                            <option selected>Choose an answer</option>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="ever_married">Have you ever been married?</label>
                        <select class="form-select" id="ever_married" name="ever_married" required>
                            <option selected>Choose an answer</option>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="work_type">What is your type of work?</label>
                        <select class="form-select" id="work_type" name="work_type" required>
                            <option selected>Choose an answer</option>
                            <option value="1">Private</option>
                            <option value="2">Self Employed</option>
                            <option value="3">Children</option>
                            <option value="4">Govt Job</option>
                            <option value="5">Never Worked</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="residence_type">What is your residence type?</label>
                        <select class="form-select" id="residence_type" name="residence_type" required>
                            <option selected>Choose an answer</option>
                            <option value="0">Rural</option>
                            <option value="1">Urban</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="avg_glucose_level">Average Glucose Level</label>
                        <input type="text" class="form-select" id="avg_glucose_level" name="avg_glucose_level" required>
                    </div>
                    <div class="input-group mb-3">
                        <label for="bmi">BMI</label>
                        <input type="text" class="form-select" id="bmi" name="bmi" required>
                    </div>
                    <div class="input-group mb-3">
                        <label for="smoking_status">Do you smoke?</label>
                        <select class="form-select" id="smoking_status" name="smoking_status" required>
                            <option selected>Choose an answer</option>
                            <option value="1">Smokes</option>
                            <option value="2">Never Smokes</option>
                            <option value="3">Formerly Smoked</option>
                            <option value="4">Unknown</option>
                        </select>
                    </div>
                <button type="submit" class="btn_2 mt-5 d-block mx-auto">Predict</button>
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
    </div>
@endsection
