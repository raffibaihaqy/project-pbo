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
                        <button type="button" class="btn btn-warning" onclick="window.location='{{url('transaksi-produk')}}'"><i class="fa fa-handshake-o"></i> Kasir</button>
                    </li>
                    <li>
                        <a href=""></a>
                        <button type="button" class="btn btn-info" onclick="window.location='{{url('list-transaksi-produk')}}'"><i class="fa fa-sticky-note"></i> Print transaksi</button>
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
                                            <i class="fa fa-archive"></i>Semua Transaksi</h3>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                @foreach($transaksi as $tra)
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        {{$tra->kode_transaksi}}
                                                    </h5>
                                                    Dibuat pada : <span class="time">{{$tra->created_at}}</span>
                                                    <hr>
                                                    <a href="{{url('list-transaksi-produk/destroy', $tra->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Hapus</a>
                                                    <a href="{{url('print-transaksi-produk/' . $tra->id)}}" class="btn btn-info">print</a>
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
