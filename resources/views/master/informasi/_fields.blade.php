<div class="form-group {{ $errors ?? ''->has('nama_instansi') ? 'has-error' : '' }}">
    {{ Form::label('nama_instansi', 'Nama Instansi') }}
    {{ Form::text('nama_instansi',$informasi->nama_instansi,['class'=>'form-control border-input','placeholder'=>'Masukkan Nama Instansi']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('telp') ? 'has-error' : '' }}">
    {{ Form::label('telp', 'No.telp') }}
    {{ Form::number('telp',$informasi->telp,['class'=>'form-control border-input','placeholder'=>'Nomor telp']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('alamat') ? 'has-error' : '' }}">
    {{ Form::label('alamat', 'Alamat') }}
    {{ Form::text('alamat',$informasi->alamat,['class'=>'form-control border-input','placeholder'=>'Masukkan alamat']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('kode_pos') ? 'has-error' : '' }}">
    {{ Form::label('kode_pos', 'Kode pos') }}
    {{ Form::number('kode_pos',$informasi->kode_pos,['class'=>'form-control border-input','placeholder'=>'Masukkan kode pos']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('deskripsi') ? 'has-error' : '' }}">
    {{ Form::label('deskripsi', 'Deskripsi') }}
    {{ Form::textarea('deskripsi', $informasi->deskripsi, ['class'=>'form-control border-input','placeholder'=>'Masukkan deskripsi toko']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('image') ? 'has-error' : '' }}">
    {{ Form::label('file','Image Toko') }}
    {{ Form::file('image', ['class'=>'form-control border-input', 'id' => 'image']) }}
    <div id="thumb-output"></div>
</div>
