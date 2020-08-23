@extends('layouts.dashboard.content')

@section('content')
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="{{url('/')}}">
                <h3>SMKN 10 JAKARTA</h3>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li>
                        <a href=""></a>
                        <button type="button" class="btn btn-warning" onclick="window.location='{{url('laporan-produk')}}'"><i class="fa fa-shopping-bag"></i> Laporan</button>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

<div class="page-wrapper">
    <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>barcode</th>
                                                <th>nama produk</th>
                                                <th>unit</th>
                                                <th>stok</th>
                                                <th>tanggal</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($inventory as $inv)
                                            <tr>
                                                <td>{{$inv->barcode}}</td>
                                                <td>{{$inv->nama}}</td>
                                                <td>{{$inv->unit}}</td>
                                                <td>{{$inv->stok}}</td>
                                                <td>{{$inv->created_at}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="{{url('export-laporan-produk/' . $inv->id)}}" class="btn btn-info">print</a>
                                                        <br>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Created by Raffi Baihaqy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
