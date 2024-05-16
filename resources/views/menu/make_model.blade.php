@extends('layout.layout')

@section('title', 'Make Model')

@section('menuMakeModel', 'active')

@section('content')
<section class="about_us padding_top">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="about_us_img">
                    <img src="template/img/top_service.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="about_us_text">
                    <h2>Data Training</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        Quis ipsum suspendisse ultrices gravida. Risus cmodo viverra
                        maecenas accumsan lacus vel</p>
                        <form action="{{ route('make_model.train_and_test') }}" method="post">
                            @csrf
                            <button type="submit" class="btn_2 ">Train and Test Model</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section><br>

    {{-- <div class="container mt-5">
        <h2>Make Model</h2>
        <form action="{{ route('make_model.train_and_test') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Train and Test Model</button>
        </form>
    </div> --}}
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
    @if (session('trainDataSample') && session('trainDataLabel') && session('testDataSample') && session('testDataLabel'))
    <br><section>
        <div class="container">
        <div class="row justify-content-center">
        {{-- <h2>Data Training</h2> --}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Hypertension</th>
                        <th>Heart Disease</th>
                        <th>Ever Married</th>
                        <th>Work Type</th>
                        <th>Residence Type</th>
                        <th>Avg Glucose Level</th>
                        <th>BMI</th>
                        <th>Smoking Status</th>
                        <th>Stroke</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('trainDataSample') as $index => $sample)
                        <tr>
                            <td>{{ $index }}</td>
                            @foreach ($sample as $key => $value)
                                @if ($key == 'gender')
                                    <td>{{ $value == 1 ? 'male' : 'female' }}</td>
                                @elseif ($key == 'hypertension' || $key == 'heart_disease' || $key == 'ever_married')
                                    <td>{{ $value == 1 ? 'Yes' : 'No' }}</td>
                                @elseif ($key == 'work_type')
                                    <td>
                                        @if ($value == 1)
                                            Private
                                        @elseif ($value == 2)
                                            Self Employed
                                        @elseif ($value == 3)
                                            Children
                                        @elseif ($value == 4)
                                            Govt Job
                                        @elseif ($value == 5)
                                            Never Worked
                                        @endif
                                    </td>
                                @elseif ($key == 'residence_type')
                                    <td>{{ $value == 1 ? 'Urban' : 'Rural' }}</td>
                                @elseif ($key == 'smoking_status')
                                    <td>
                                        @if ($value == 1)
                                            Smokes
                                        @elseif ($value == 2)
                                            Never Smokes
                                        @elseif ($value == 3)
                                            Formerly Smoked
                                        @elseif ($value == 4)
                                            Unknown
                                        @endif
                                    </td>
                                @else
                                    <td>{{ $value }}</td>
                                @endif
                            @endforeach
                            <td>{{ session('trainDataLabel')[$index] == 1 ? 'Stroke' : 'No' }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <h2>Data Testing</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Hypertension</th>
                        <th>Heart Disease</th>
                        <th>Ever Married</th>
                        <th>Work Type</th>
                        <th>Residence Type</th>
                        <th>Avg Glucose Level</th>
                        <th>BMI</th>
                        <th>Smoking Status</th>
                        <th>Stroke</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('testDataSample') as $index => $sample)
                        <tr>
                            <td>{{ $index }}</td>
                            @foreach ($sample as $key => $value)
                                @if ($key == 'gender')
                                    <td>{{ $value == 1 ? 'male' : 'female' }}</td>
                                @elseif ($key == 'hypertension' || $key == 'heart_disease' || $key == 'ever_married')
                                    <td>{{ $value == 1 ? 'Yes' : 'No' }}</td>
                                @elseif ($key == 'work_type')
                                    <td>
                                        @if ($value == 1)
                                            Private
                                        @elseif ($value == 2)
                                            Self Employed
                                        @elseif ($value == 3)
                                            Children
                                        @elseif ($value == 4)
                                            Govt Job
                                        @elseif ($value == 5)
                                            Never Worked
                                        @endif
                                    </td>
                                @elseif ($key == 'residence_type')
                                    <td>{{ $value == 1 ? 'Urban' : 'Rural' }}</td>
                                @elseif ($key == 'smoking_status')
                                    <td>
                                        @if ($value == 1)
                                            Smokes
                                        @elseif ($value == 2)
                                            Never Smokes
                                        @elseif ($value == 3)
                                            Formerly Smoked
                                        @elseif ($value == 4)
                                            Unknown
                                        @endif
                                    </td>
                                @else
                                    <td>{{ $value }}</td>
                                @endif
                            @endforeach
                            <td>{{ session('testDataLabel')[$index] == 1 ? 'Stroke' : 'No' }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endif
</div>
</div>
</section>
@endsection
