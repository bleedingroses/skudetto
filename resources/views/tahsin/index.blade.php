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
                    <a class="link-light" href="/tahsin/tambah"><button type="button" class="btn btn-info btn-rounded">Tambah Data Santri</button></a>

                </div>
                
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-13">
                        <div class="card">                            
                                    <div class="right-page-header">
                                            <div class="align-self-center">
                                                <h4 class="card-title m-t-10 text-center">Daftar Santri</h4></div>
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
                                                    <th>Grup</th>
                                                    <th>Nama</th>
                                                    <th>Surat</th>
                                                    <th>Ayat</th>
                                                </tr>
                                            </thead>
                                            @foreach($tahsins as $index => $tahsin)
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $index + $tahsins->firstItem() }}</td>
                                                        <td>
                                                            <div role="group" aria-label="Vertical radio toggle button group">
                                                                <a class="btn btn-outline-info btn-rounded mb-2" href="/tahsin/{{$member->id}}/ubah">Ubah</a>
                                                                <form action="/tahsin/{{$tahsin->id}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input class="btn btn-info btn-rounded" type="submit" value="Hapus">
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>{{ $tahsin['grup'] }}</td>
                                                        <td>{{$tahsin['nama']}}</td>
                                                        <td>{{$member['surat']}}</td>
                                                        <td>{{$member['ayat']}}</td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                        </div>
                        <div class="d-flex justify-content-center">{{ $tahsins->links('vendor.pagination.simple-tailwind') }}</div>
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