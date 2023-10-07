@extends('layouts.main')

@section('container')
        <!-- ============================================================== -->
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
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">SOP Pegawai</h3>
                    </div>
                    <div>
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Peraturan Pegawai</h4>
                                <div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingOne11">
                                            <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">
                                              1. Waktu Kerja
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseOne11" class="collapse show" role="tabpanel" aria-labelledby="headingOne11">
                                            <div class="card-body">
                                                <b>Hari Kerja</b>
                                                <p>Senin - Sabtu</p><br>
                                                <b>Jam Kerja</b>
                                                <p>Senin–Jum’at: 08.00–16.00 WIB</p>
                                                <p>Sabtu: 08.00–13.00 WIB</p>
                                                <p>Istirahat 1 jam mulai dari jam 12.00–13.00 WIB, kecuali Sabtu.</p>
                                                <p>Jika karyawan masih bekerja di luar jam kerja yang telah ditentukan atas permintaan atasannya, maka kelebihan jam kerja tersebut dihitung sebagai lembur.</p><br>
                                                <p><b>Libur Kerja</b></p>
                                                <p>Hari Ahad dan Hari Libur Nasional</p>
                                                <p>Libur Idul Fitri disesuaikan dengan kondisi yang ada.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwo22">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">
                                              2. Izin dan Cuti
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseTwo22" class="collapse" role="tabpanel" aria-labelledby="headingTwo22">
                                            <div class="card-body">
                                                <b>Izin Tidak Masuk Kerja</b>
                                                <p>Jika karyawan tidak bisa masuk kerja maka harus memberitahukan ke atasannya langsung dan bagian administrasi.</p><br>
                                                <b>Izin meninggalkan pekerjaan (IMP)</b>
                                                <p>Jika akan meninggalkan pekerjaan sementara waktu maka harus memberitahukan ke atasannya langsung.</p>
                                                <p>IMP bisa dilakukan jika karyawan telah hadir bekerja terlebih dahulu.</p> 
                                                <p>Waktu maksimal IMP adalah 3 jam kerja dan 5 kali dalam 1 bulan.</p>
                                                <p>Jika IMP dilakukan sebelum karyawan masuk kerja atau melebihi waktu maksimal yang telah ditentukan maka akan mengurangi nilai tunjangan kehadiran pada bulan tersebut.</p><br>
                                                <b>Cuti Regular</b>
                                                <p>Cuti diberikan kepada karyawan yang telah melewati masa percobaan kerja selama 3 bulan.</p>
                                                <p>Jatah cuti regular pertahun sebanyak 17 kali (12 kali cuti utama + 5 kali cuti tambahan (olahraga & pengajian)).</p>
                                                <p>Karyawan yang belum genap 1 tahun bekerja maka jumlah cuti yang didapatkan adalah :</p>                                                                                                                                     1 x (jumlah bulan bekerja - masa percobaan 3 bulan) + 3x cuti tambahan
                                                <p>Untuk karyawan yang tidak mengikuti kegiatan olahraga/pengajian karena kondisi tertentu maka jatah cuti regular sebanyak 15 kali.</p>
                                                <p>Pengajuan cuti min 3 hari sebelum hari cuti dengan mengisi Form Pengajuan Cuti dan sudah disetujui oleh atasannya langsung.</p>
                                                <p>Pengambilan cuti dalam 1 bulan hanya bisa maks 3 hari</p>
                                                <p>Jika sampai akhir tahun masih ada jatah cuti yang tidak diambil maka ada penggantian dalam bentuk uang dengan ketentuan perhitungan sbb :</p>
                                                <p><b>1,5 x gaji pokok perbulan : 25</b></p>
                                                <p>Pembayaran uang kompensasi cuti yang tidak diambil dilakukan di bulan pertama tahun berikutnya.</p><br>
                                                <b>Cuti Khusus</b>
                                                <p>Setiap karyawan berhak mendapatkan cuti khusus selain cuti regular diatas, yaitu :</p>
                                                <p>- Cuti Menikah: 3 hari (untuk pernikahan yang pertama saja)</p>
                                                <p>- Cuti Anggota Keluarga Meninggal (ayah/ibu, adik/kakak, istri/suami, anak) : 1 hari</p> 
                                                <p>- Cuti Istri Melahirkan: 1 hari</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingThree33">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">
                                              Q3. How to get yearly Support?
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseThree33" class="collapse" role="tabpanel" aria-labelledby="headingThree33">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingOne111">
                                            <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne111" aria-expanded="true" aria-controls="collapseOne111">
                                              Q4. How can i purchase this admin ?
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseOne111" class="collapse" role="tabpanel" aria-labelledby="headingOne111">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwo222">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo222" aria-expanded="false" aria-controls="collapseTwo222">
                                              Q5. How to modify Navigation?
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseTwo222" class="collapse" role="tabpanel" aria-labelledby="headingTwo222">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingThree333">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree333" aria-expanded="false" aria-controls="collapseThree333">
                                              Q6. How to get yearly Support?
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseThree333" class="collapse" role="tabpanel" aria-labelledby="headingThree333">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@endsection