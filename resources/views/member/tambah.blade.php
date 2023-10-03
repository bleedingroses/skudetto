@extends('layouts.main')

@section('container')
    
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="align-self-center">
                    <h4 class="card-title m-t-10 text-center">Tambah Data Karyawan</h4>
                </div>                            
                <div class="ml-5">
                        <form action="/member/simpan" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="justify-content-center mb-3">
                                <label for="divisi" class="form-label"><h5>Divisi</h5></label><br>
                                <select name="divisi" id="divisi" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Masukkan Nama Divisi</option>
                                    <option value="General Affair">General Affair</option>
                                    <option value="Perlengkapan Malang">Perlengkapan Malang</option>
                                    <option value="Kiyosi Malang">Kiyosi Malang</option>
                                    <option value="Divisi Surabaya">Divisi Surabaya</option>
                                    <option value="Supporting Paniai">Supporting Paniai</option>
                                </select><br>
                            </div>
                            <div class="mb-3 w-50">
                                <label for="nama" class="form-label"><h5>Nama Lengkap</h5></label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div><br>
                            <div class="mb-3 w-50">
                                <label for="email" class="form-label"><h5>Alamat Email</h5></label>
                                <input type="text" class="form-control" name="email" id="email" required>
                            </div><br>
                            <div class="mb-3 w-50">
                                <label for="jurusan" class="form-label"><h5>Jurusan</h5></label>
                                <input type="text" class="form-control" name="jurusan" id="jurusan" required>
                            </div><br>
                            <div class="mb-3 w-50">
                                <label for="pendidikan" class="form-label"><h5>Pendidikan</h5></label><br>
                                <select name="pendidikan" id="pendidikan" class="form-select form-select-lg mb-3">
                                    <option value="">Masukkan Pendidikan Terakhir</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                    <option value="Strata-1">Strata-1</option>
                                    </select><br>
                            </div>
                            <div class="mb-3 w-50">
                                <label for="gambar" class="form-label"><h5>Upload Gambar</h5></label>
                                <input type="file" class="form-control" name="gambar" id="gambar" required>
                            </div><br>
                                <button type="submit" name="submit" class="btn btn-primary mb-3">Tambah Data!</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection