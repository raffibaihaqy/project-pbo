@extends('layouts.dashboard.content')

@section('content')
<div class="page-wrapper">

    <!-- PAGE CONTAINER-->
    <div class="page-container">

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="title-1 m-b-25">Detail user</h2>
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>foto</th>
                                            <th>nama</th>
                                            <th>telp</th>
                                            <th>alamat</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>hak akses</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($daftar as $daf)
                                        <tr>
                                            <td><img src="{{ url('uploads').'/'. $daf->image }}" alt="{{ $daf->image }}" style="width:75px;" class="img-thumbnail"></td>
                                            <td>{{$daf->nama}}</td>
                                            <td>{{$daf->telp}}</td>
                                            <td>{{$daf->alamat}}</td>
                                            <td>{{$daf->username}}</td>
                                            <td>{{$daf->password}}</td>
                                            <td>{{$daf->hak_akses}}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    {{ Form::open(['route' => ['daftar-user.edit', $daf->id], 'method'=>'GET']) }}
                                                        {{ Form::button('edit', ['type'=>'submit', 'class' => 'btn btn-info']) }}
                                                    {{ Form::close() }}
                                                    {{ Form::open(['route' => ['daftar-user.destroy', $daf->id], 'method'=>'DELETE']) }}
                                                        {{ Form::button('delete', ['class'=>'btn btn-danger' ,'type'=>'submit','onclick'=>'return confirm("Are you sure you want to delete this?")'])  }}
                                                    {{ Form::close() }}
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h2 class="title-1 m-b-25">All user</h2>
                            <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                <div class="au-card-inner">
                                    <div class="table-responsive">
                                        <table class="table table-top-countries">
                                            <tbody>
                                                @foreach ($daftar as $daf)
                                                <tr>
                                                    <td>{{$daf->nama}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="au-btn au-btn-icon au-btn--green" onclick="window.location='{{url('daftar-user/create')}}'">
                        <i class="zmdi zmdi-plus"></i>Tambah User</button>
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
