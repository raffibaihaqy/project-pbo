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
                        <button type="button" class="btn btn-info" onclick="window.location='{{url('inventory-produk')}}'"><i class="fa fa-cubes"></i> List Produk</button>
                    </li>
                    <li>
                        <a href=""></a>
                        <button type="button" class="btn btn-warning" onclick="window.location='{{url('kategori-produk')}}'"><i class="fa fa-tasks"></i> List Kategori</button>
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
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="{{URL::asset('assets/cooladmin/images/bg-title-01.jpg')}}">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="fa fa-archive"></i>All kategori</h3>
                                        <button class="au-btn-plus" onclick="window.location='{{url('kategori-produk/create')}}'">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                @foreach($kategori as $kat)
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        {{$kat->nama_kategori}}
                                                    </h5>
                                                    Dibuat pada : <span class="time">{{$kat->created_at}}</span>
                                                    <br>
                                                    <hr>
                                                    <a href="{{route('kategori-produk.edit', $kat->id)}}" class="btn btn-success">Edit</a>
                                                    <a href="{{route('kategori-produk.destroy', $kat->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Hapus</a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Yearly Sales</h3>
                                        <canvas id="sales-chart"></canvas>
                                    </div>
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
