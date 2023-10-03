@extends('layouts.main')

@section('container')

    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="card">
                <h2 class="card-title m-t-10 text-center">Data Manager</h2><br><br>
                <table class="table table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Holding</th>
                    </tr>
                    <tr>
                        <td> 1 </td>
                        <td>Mohammad Hasanudin</td>
                        <td>hasan.twd09@gmail.com</td>
                        <td>
                            <a href="/member/6/divisi">General Affair</a> |
                            <a href="/member/7/divisi">Perlengkapan Malang</a> |
                            <a href="/member/8/divisi">Kiyosi Malang</a> |
                            <a href="/member/9/divisi">Divisi Surabaya</a>
                        </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td>Aditya Januar Rachman</td>
                        <td>adityajanuar31@gmail.com</td>
                        <td>
                            <a href="/member/10/divisi">Supporting Paniai</a> |
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection