
@extends('layout.layout')
@section('title', 'Home Page')
@section('menuHome', 'active')

@section('content')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>We are here for your care</h5>
                            <h1>Best Care &
                                Better Detection</h1>
                            <p>Stroke.Insight Adalah Sebuah Website Yang Menyediakan Informasi Mendalam Tentang Penyakit Stroke. </p>
                            {{-- <a href="#" class="btn_2">Make an appointment</a> --}}

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="template/img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Stroke</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="template/img/icon/feature_2.svg" alt=""></span>
                            <h4>Jenis-Jenis Stroke</h4>
                            <p>Stroke iskemik: Terjadi ketika pembuluh darah yang memasok darah ke otak tersumbat oleh gumpalan darah atau plak. Stroke hemoragik: Terjadi ketika pembuluh darah di otak pecah, menyebabkan perdarahan di sekitar otak.
                                </p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="template/img/icon/feature_2.svg" alt=""></span>
                            <h4>Pencegahan Stroke</h4>
                            <p>Faktor risiko utama meliputi tekanan darah tinggi (hipertensi), penyakit jantung, diabetes, merokok, obesitas, dan gaya hidup sedentari. Faktor genetik dan usia lanjut juga meningkatkan risiko terkena stroke.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="template/img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="template/img/icon/feature_2.svg" alt=""></span>
                            <h4>Faktor Risiko Stroke</h4>
                            <p>Faktor risiko utama meliputi tekanan darah tinggi (hipertensi), penyakit jantung, diabetes, merokok, obesitas, dan gaya hidup sedentari. Faktor genetik dan usia lanjut juga meningkatkan risiko terkena stroke.</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="template/img/icon/feature_2.svg" alt=""></span>
                            <h4>Gejala Stroke</h4>
                            <p>Gejala umum stroke termasuk kelemahan mendadak atau mati rasa di wajah, lengan, atau kaki (terutama pada satu sisi tubuh), kebingungan, kesulitan berbicara atau memahami pembicaraan, gangguan penglihatan pada satu atau kedua mata, dan kehilangan keseimbangan atau koordinasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>About Us</h2>
                                <div class="section_tittle text-center">
                                    <p>Stroke.Insight adalah sebuah website yang menyediakan informasi mendalam tentang stroke, salah satu penyebab utama kematian di seluruh dunia menurut Organisasi Kesehatan Dunia (WHO), yang bertanggung jawab atas sekitar 11% dari total kematian global. Website ini menggunakan dataset komprehensif untuk memprediksi kemungkinan seorang pasien mengalami stroke berdasarkan berbagai parameter input. Setiap baris dalam data tersebut berisi informasi relevan mengenai kondisi pasien, memungkinkan analisis yang lebih mendetail. Fitur utama dari Stroke.Insight mencakup penjelasan tentang stroke, model prediktif yang digunakan, serta detail tentang dataset yang dipakai untuk pelatihan model tersebut. Dengan pendekatan ini, kami bertujuan untuk membantu dalam mendeteksi risiko stroke dan membantu dalam upaya pencegahan melalui analisis data yang akurat.</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="template/img/icon/a1.svg"
                                                    alt=""></span>
                                            <h4>Informasi</h4>
                                            <p>Website Stroke.Insight menyediakan penjelasan komprehensif tentang stroke, mencakup definisi, jenis-jenis stroke, gejala, faktor risiko, serta pencegahan dan pengobatannya. Informasi ini bertujuan untuk meningkatkan kesadaran dan pemahaman pengguna tentang kondisi medis yang serius ini, yang merupakan penyebab kematian terbesar kedua di dunia menurut WHO.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="template/img/icon/a2.svg"
                                                    alt=""></span>
                                            <h4>Model Prediktif</h4>
                                            <p>Stroke.Insight menggunakan model prediktif berbasis machine learning untuk memperkirakan risiko stroke pada pasien. Model ini dilatih menggunakan data historis pasien, dengan mempertimbangkan berbagai faktor seperti usia, jenis kelamin, riwayat penyakit, dan status merokok. Melalui analisis data ini, model dapat memberikan prediksi yang akurat mengenai kemungkinan seseorang mengalami stroke di masa depan.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="template/img/icon/a3.svg"
                                                    alt=""></span>
                                            <h4>Dataset</h4>
                                            <p>Dataset yang digunakan oleh Stroke.Insight berisi informasi rinci tentang pasien, termasuk parameter penting seperti usia, jenis kelamin, kondisi medis (seperti hipertensi dan diabetes), serta kebiasaan merokok. Setiap baris dalam dataset mewakili satu pasien dengan detail lengkap tentang faktor-faktor yang relevan. Data ini dikumpulkan dan disusun dengan hati-hati untuk memastikan keakuratan dan relevansi dalam pelatihan model prediktif.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="template/img/icon/a4.svg"
                                                    alt=""></span>
                                            <h4>Prediksi Stroke</h4>
                                            <p>Fitur prediksi stroke di Stroke.Insight memungkinkan pengguna untuk memasukkan data pribadi mereka dan mendapatkan prediksi mengenai risiko stroke. Dengan memasukkan informasi seperti usia, jenis kelamin, riwayat penyakit, dan status merokok, pengguna dapat menerima evaluasi risiko individual. Prediksi ini berguna sebagai alat bantu bagi individu maupun profesional medis dalam mengambil langkah preventif yang tepat dan menyesuaikan rencana perawatan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!-- about us part start-->
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
                        <p>Dataset pelatihan di Stroke.Insight mencakup berbagai parameter penting untuk memprediksi risiko stroke. Setiap entri berisi kolom berikut:  Index, Gender, Age, Hypertension, Heart Disease, Ever Married, Work Type, Residence Type, Avg Glucose Level, BMI, Smoking Status, dan Stroke.</p>
                        <a class="btn_2 " href="{{route('make_model')}}">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- about us part end-->


@endsection
