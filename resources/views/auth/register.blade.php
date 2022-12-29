<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Daftar Akun</title>

    <!-- Icons font CSS-->
    <link href="{{ url('/') }}/public-register/vendor/mdi-font/css/material-design-iconic-font.min.css"
        rel="stylesheet" media="all">
    <link href="{{ url('/') }}/public-register/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet"
        media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ url('/') }}/public-register/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ url('/') }}/public-register/vendor/datepicker/daterangepicker.css" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <link href="{{ url('/') }}/public-register/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">SIPA Registration Form</h2>
                </div>
                <div class="card-body">
                    <x-utils.notif />
                    <form action="{{ url('/register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('nama'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('nama')[0] }}</label>
                                    @endif
                                    <input class="input--style-5" type="text" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NIM</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('nim'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('nim')[0] }}</label>
                                    @endif
                                    <input class="input--style-5" type="number" name="nim" placeholder="NIM digunakan untuk User ID login">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Status</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="is_alumni">
                                            <option value="">Mahasiswa</option>
                                            <option value="1">Alumni</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Foto</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('foto'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('foto')[0] }}</label>
                                    @endif
                                    <input class="input--style-5" type="file" name="foto"
                                        accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Program Studi</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('program_studi'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('program_studi')[0] }}</label>
                                    @endif
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="program_studi">
                                            <option disabled="disabled" selected="selected">Pilih opsi</option>
                                            <option value="Pemeliharaan Mesin">Pemeliharaan Mesin</option>
                                            <option value="Teknologi Pertambangan">Teknologi Pertambangan</option>
                                            <option value="Teknologi Hasil Perkebunan">Teknologi Hasil Perkebunan
                                            </option>
                                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                                            <option value="Agroindustri">Agroindustri</option>
                                            <option value="Teknologi Listrik">Teknologi Listrik</option>
                                            <option value="Teknologi Rekayasa Konstruksi Jalan dan Jembatan">Teknologi
                                                Rekayasa
                                                Konstruksi Jalan dan Jembatan</option>
                                            <option value="Teknologi Produksi Tanaman Perkebunan">Teknologi Produksi
                                                Tanaman
                                                Perkebunan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Agama</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('agama'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('agama')[0] }}</label>
                                    @endif
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="agama">
                                            <option disabled selected>Pilih Opsi</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Katolik">Kristen Katolik</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('jenis_kelamin'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('jenis_kelamin')[0] }}</label>
                                    @endif
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jenis_kelamin">
                                            <option disabled selected>Pilih opsi</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tempat Lahir</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('tempat_lahir'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('tempat_lahir')[0] }}</label>
                                    @endif
                                    <input class="input--style-5" type="text" name="tempat_lahir">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('tanggal_lahir'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('tanggal_lahir')[0] }}</label>
                                    @endif
                                    <input class="input--style-5" type="date" name="tanggal_lahir">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tahun Masuk</div>
                            {{-- Permintaan client, dari angkatan dirubah ke tahun masuk --}}
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('angkatan'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('angkatan')[0] }}</label>
                                    @endif
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="angkatan">
                                            <option selected disabled>Pilih opsi</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2031">2031</option>
                                            <option value="2032">2032</option>
                                            <option value="2033">2033</option>
                                            <option value="2034">2034</option>
                                            <option value="2035">2035</option>
                                            <option value="2036">2036</option>
                                            <option value="2037">2037</option>
                                            <option value="2038">2038</option>
                                            <option value="2039">2039</option>
                                            <option value="2040">2040</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No. Handphone</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('no_telepon'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('no_telepon')[0] }}</label>
                                    @endif
                                    <input class="input--style-5" type="number" name="no_telepon">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    @if ($errors->has('password'))
                                        <label for=""
                                            class="label text-danger">{{ $errors->get('password')[0] }}</label>
                                    @endif
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Register</button>
                        </div>
                    </form>
                    <br>
                    <div class="col-md-12">
                        <div class="row">
                            <a href="{{ url('/login') }}">I already have a membership</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ url('/') }}/public-register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{ url('/') }}/public-register/vendor/select2/select2.min.js"></script>
    <script src="{{ url('/') }}/public-register/vendor/datepicker/moment.min.js"></script>
    <script src="{{ url('/') }}/public-register/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{ url('/') }}/public-register/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
