@extends('layouts.dashboard.content')

@section('content')
<div class="page-wrapper">

    <!-- PAGE CONTAINER-->
    <div class="page-container">

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="content">
                        {!! Form::open(['url' => 'post-informasi-toko', 'files'=>'true']) !!}
                        <div class="row">
                            <div class="col-md-12">

                                @include('master.informasi._fields')

                                <div class="form-group">
                                    {{ Form::submit('Tambah', ['class'=>'btn btn-success']) }}
                                    <button type="button" onclick="window.location='{{url('informasi-toko')}}'" class="btn btn-danger">Cancel</button>
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
