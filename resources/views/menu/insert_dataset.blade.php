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
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses!',
                        text: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 3000
                    });
                </script>
            @endif

            @if (session('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ session('error') }}',
                    });
                </script>
            @endif
        </div>

        <div class="col-md-6 mx-3" style=" border: 1px solid #000000; border-radius: 15px; padding: 20px;">
            <!-- Bagian Kanan: Upload dari Form -->
            <h3>Start Data Entry</h3>

            <form method="POST" action="{{ route('dataset.store') }}" id="strokeForm">
                @csrf
                <div class="input-group my-3">
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
                    <label for="hypertension">Hypertension</label>
                    <select class="form-select" id="hypertension" name="hypertension" required>
                        <option selected>Choose an answer</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="heart_disease">Heart Disease</label>
                    <select class="form-select" id="heart_disease" name="heart_disease" required>
                        <option selected>Choose an answer</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="ever_married">Ever Married</label>
                    <select class="form-select" id="ever_married" name="ever_married" required>
                        <option selected>Choose an answer</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="work_type">Work Type</label>
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
                    <label for="residence_type">Residence Type</label>
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
                    <label for="smoking_status">Smoking Status</label>
                    <select class="form-select" id="smoking_status" name="smoking_status" required>
                        <option selected>Choose an answer</option>
                        <option value="1">Smokes</option>
                        <option value="2">Never Smokes</option>
                        <option value="3">Formerly Smoked</option>
                        <option value="4">Unknown</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="stroke">Stroke</label>
                    <select class="form-select" id="stroke" name="stroke" required>
                        <option selected>Choose an answer</option>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if (session('success_entry'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses!',
                        text: '{{ session('success_entry') }}',
                        showConfirmButton: false,
                        timer: 3000
                    });
                </script>
            @endif

            @if (session('error_entry'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ session('error_entry') }}',
                    });
                </script>
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
<!-- Di bagian header atau di bagian bawah halaman Anda -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    window.onload = function() {
        @if(session('success'))
            swal("Sukses!", "{{ session('success') }}", "success");
        @elseif(session('error'))
            swal("Gagal!", "{{ session('error') }}", "error");
        @endif
    }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection
