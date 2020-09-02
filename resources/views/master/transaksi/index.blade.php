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
                                <div class="card">
                                    <div class="card-header">Pembayaran</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Transaksi</h3>
                                        </div>
                                        <hr>
                                        {!! Form::open(['url' => 'post-transaksi-produk', 'files'=>'true']) !!}
                                            <div class="row">
                                                <div class="col-md-12">

                                                    @include('master.transaksi._fields')

                                                    <div class="form-group">
                                                        {{ Form::submit('Submit', ['class'=>'btn btn-success']) }}
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="clearfix"></div>
                                        {!! Form::close() !!}
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
