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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="card">                            
                <div class="right-page-header">
                    <div class="align-self-center">
                        <h4 class="card-title m-t-10 text-center">{{ $category->name }}</h4></div>
                    </div>
                    <div class="table-responsive justify-content-center">
                        <table id="demo-foo-addrow" class="table table-hover no-wrap contact-list">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Pendidikan</th>
                            </tr>
                            </thead>
                            @php $no = 1; @endphp
                            @foreach($category->member as $member)
                            <tbody>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('img/'.$member->gambar) }}" width="50" alt=""></td>
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
            </div>
        </div>
    </div>    
@endsection