@extends('layout.header')
@section('title', 'Dataset')
@section('menuDataset', 'active')

@section('content')
<!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
    Upload Datatrain
  </button>

  <!-- Modal -->
  <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModalLabel">Upload Datatrain</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('dataset.upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="file" class="form-control" name="file" required>
            </div>
            <button type="submit" class="btn btn-success">Upload</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#entryModal">
    Start Data Entry
</button>

<!-- Modal Definition -->
<div class="modal fade" id="entryModal" tabindex="-1" role="dialog" aria-labelledby="entryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="entryModalLabel">Welcome to the Stroke Data Entry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Please click "Proceed" to start entering the data for stroke analysis.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="proceedBtn">Proceed</button>
            </div>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <!-- Stroke Data Entry Form -->
            <form method="POST" action="{{ route('dataset.store') }}" id="strokeForm" style="display:none;">
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
