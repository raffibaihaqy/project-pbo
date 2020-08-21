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
                    <button type="button" class="btn btn-warning" onclick="window.location='{{url('informasi-toko')}}'"><i class="fa fa-tasks"></i> List Kategori</button>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

<div class="page-wrapper">

    <!-- PAGE CONTAINER-->
    <div class="page-container">

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="content">
                        {!! Form::open(['url' => ['edit-inventory-produk', $inventory->id], 'files'=>'true', 'method'=>'put']) !!}
                        <div class="row">
                            <div class="col-md-12">

                                @include('master.masterproduk._fields')

                                <div class="form-group">
                                    {{ Form::submit('Tambah', ['class'=>'btn btn-success']) }}
                                    <button type="button" onclick="window.location='{{url('inventory-produk')}}'" class="btn btn-danger">Cancel</button>
                                </div>

                            </div>

                        </div>


                        <div class="clearfix"></div>
                        {!! Form::close() !!}
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
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>
@endsection
