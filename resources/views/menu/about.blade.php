
@extends('layout.layout')
@section('title', 'About')
@section('about', 'active')

@section('content')

     <!-- breadcrumb start-->
     <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>about us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- feature_part start-->
    <section class="feature_part2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="section_tittle text-center">
                        <p>Stroke.Insight adalah sebuah website yang menyediakan informasi mendalam tentang stroke, salah satu penyebab utama kematian di seluruh dunia menurut Organisasi Kesehatan Dunia (WHO), yang bertanggung jawab atas sekitar 11% dari total kematian global. Website ini menggunakan dataset komprehensif untuk memprediksi kemungkinan seorang pasien mengalami stroke berdasarkan berbagai parameter input seperti jenis kelamin, usia, berbagai penyakit yang diderita, dan status merokok. Setiap baris dalam data tersebut berisi informasi relevan mengenai kondisi pasien, memungkinkan analisis yang lebih mendetail. Fitur utama dari Stroke.Insight mencakup penjelasan tentang stroke, model prediktif yang digunakan, serta detail tentang dataset yang dipakai untuk pelatihan model tersebut. Dengan pendekatan ini, Stroke.Insight bertujuan untuk memberikan alat bantu yang berguna dalam mendeteksi risiko stroke dan membantu dalam upaya pencegahan melalui analisis data yang akurat.</p>
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
                                {{-- <h2>Our Depertment</h2> --}}
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

    {{-- <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="template/img/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">
                                    <h5 class="card-title">First cattle which earth unto let health for
                                        can get and see what you </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>Jhon mike</li>
                                    <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="template/img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="blog.html">
                                    <h5 class="card-title">First cattle which earth unto let health for
                                        can get and see what you </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>Jhon mike</li>
                                    <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::--> --}}


@endsection
