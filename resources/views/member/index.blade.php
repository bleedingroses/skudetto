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
                <div class="row page-titles justify-content-center">
                    <a class="link-light" href="/member/tambah"><button type="button" class="btn btn-info btn-rounded">Tambah Data Karyawan</button></a>

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
                                    <div class="right-page-header">
                                            <div class="align-self-center">
                                                <h4 class="card-title m-t-10 text-center">Daftar Karyawan</h4></div>
                                    </div>
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-info" role="alert">
                                        {{ $message }}
                                    </div>
                                @endif
                                    <div class="table-responsive justify-content-center">
                                        <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Aksi</th>
                                                    <th>Gambar</th>
                                                    <th>Divisi</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Jurusan</th>
                                                    <th>Pendidikan</th>
                                                </tr>
                                            </thead>
                                            @foreach($members as $index => $member)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $index + $members->firstItem() }}</td>
                                                        <td>
                                                            <div role="group" aria-label="Vertical radio toggle button group">
                                                                <a class="btn btn-outline-info btn-rounded" href="/member/{{$member->id}}/ubah">Ubah</a>
                                                                <form action="/member/{{$member->id}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input class="btn btn-info btn-rounded" type="submit" value="Hapus">
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td><img src="{{ asset('img/'.$member->gambar) }}" width="100" alt=""></td>
                                                        <td>{{ $member->divisi }}</td>
                                                        <td>{{$member['nama']}}</td>
                                                        <td>{{$member['email']}}</td>
                                                        <td>{{$member['jurusan']}}</td>
                                                        <td>{{$member['pendidikan']}}</td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                        </div>
                        <div class="d-flex justify-content-center">{{ $members->links('vendor.pagination.simple-tailwind') }}</div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
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