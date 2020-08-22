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
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>image</th>
                                                <th>nama produk</th>
                                                <th>unit</th>
                                                <th>curr</th>
                                                <th>harga jual</th>
                                                <th>harga beli</th>
                                                <th>disc</th>
                                                <th>stok</th>
                                                <th>barcode</th>
                                                <th>expired</th>
                                                <th>kategori</th>
                                                <th>keterangan</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($inventory as $inv)
                                            <tr>
                                                <td><img src="{{ url('uploads').'/'. $inv->image }}" alt="{{ $inv->image }}" style="width:75px;" class="img-thumbnail"></td>
                                                <td>{{$inv->nama}}</td>
                                                <td>{{$inv->unit}}</td>
                                                <td>{{$inv->curr}}</td>
                                                <td>{{$inv->harga_jual}}</td>
                                                <td>{{$inv->harga_beli}}</td>
                                                <td>{{$inv->disc}}</td>
                                                <td>{{$inv->stok}}</td>
                                                <td>{{$inv->barcode}}</td>
                                                <td>{{$inv->expired}}</td>
                                                <td>{{$inv->kategori}}</td>
                                                <td>{{ mb_substr($inv->ket, 0, 20) }}...</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="{{url('export-print-word/' . $inv->id)}}" class="btn btn-info">print</a>
                                                        <br>
                                                        {{ Form::open(['route' => ['inventory-produk.edit', $inv->id], 'method'=>'GET']) }}
                                                            {{ Form::button('edit', ['type'=>'submit', 'class' => 'btn btn-success']) }}
                                                        {{ Form::close() }}
                                                        <br>
                                                        {{ Form::open(['route' => ['inventory-produk.destroy', $inv->id], 'method'=>'DELETE']) }}
                                                            {{ Form::button('delete', ['class'=>'btn btn-danger' ,'type'=>'submit','onclick'=>'return confirm("Are you sure you want to delete this?")'])  }}
                                                        {{ Form::close() }}
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
                        <button class="au-btn au-btn-icon au-btn--green" onclick="window.location='{{url('inventory-produk/create')}}'">
                            <i class="zmdi zmdi-plus"></i>Tambah produk</button>
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
