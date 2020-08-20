<div class="form-group {{ $errors ?? ''->has('nama') ? 'has-error' : '' }}">
    {{ Form::label('Nama', 'Nama') }}
    {{ Form::text('nama',$daftar->nama,['class'=>'form-control border-input','placeholder'=>'Masukkan Nama']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('telp') ? 'has-error' : '' }}">
    {{ Form::label('telp', 'No.telp') }}
    {{ Form::number('telp',$daftar->telp,['class'=>'form-control border-input','placeholder'=>'Nomor telp']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('alamat') ? 'has-error' : '' }}">
    {{ Form::label('alamat', 'Alamat') }}
    {{ Form::text('alamat',$daftar->alamat,['class'=>'form-control border-input','placeholder'=>'Masukkan alamat']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('username') ? 'has-error' : '' }}">
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username',$daftar->username,['class'=>'form-control border-input','placeholder'=>'Masukkan username']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('password') ? 'has-error' : '' }}">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', ['class'=>'form-control border-input','placeholder'=>'Masukkan password']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('hak_akses') ? 'has-error' : '' }}">
    {{ Form::label('hak_akses', 'Hak Akses') }}
    {{ Form::text('hak_akses',$daftar->hak_akses,['class'=>'form-control border-input','placeholder'=>'Pilih hak akses']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('foto') ? 'has-error' : '' }}">
    {{ Form::label('file','Foto profil') }}
    {{ Form::file('image', ['class'=>'form-control border-input', 'id' => 'image']) }}
    <div id="thumb-output"></div>
</div>
