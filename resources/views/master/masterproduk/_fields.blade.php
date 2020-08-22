<div class="form-group {{ $errors ?? ''->has('nama') ? 'has-error' : '' }}">
    {{ Form::label('nama', 'Nama Produk') }}
    {{ Form::text('nama',$inventory->nama,['class'=>'form-control border-input','placeholder'=>'Masukkan Nama Produk']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('unit') ? 'has-error' : '' }}">
    {{ Form::label('unit', 'Unit Produk') }}
    {{ Form::number('unit',$inventory->unit,['class'=>'form-control border-input','placeholder'=>'Masukkan Unit Produk']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('curr') ? 'has-error' : '' }}">
    {{ Form::label('curr', 'Curr') }}
    {{ Form::select('curr', array('IDR' => 'IDR', 'DLR' => 'DLR')) }}
</div>

<div class="form-group {{ $errors ?? ''->has('harga_beli') ? 'has-error' : '' }}">
    {{ Form::label('harga_beli', 'Harga Beli') }}
    {{ Form::number('harga_beli',$inventory->harga_beli,['class'=>'form-control border-input','placeholder'=>'Masukkan Harga beli']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('harga_jual') ? 'has-error' : '' }}">
    {{ Form::label('harga_jual', 'Harga Jual') }}
    {{ Form::number('harga_jual',$inventory->harga_jual,['class'=>'form-control border-input','placeholder'=>'Masukkan Harga jual']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('disc') ? 'has-error' : '' }}">
    {{ Form::label('disc', 'Diskon Produk') }}
    {{ Form::number('disc',$inventory->disc,['class'=>'form-control border-input','placeholder'=>'Masukkan Potongan Harga']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('stok') ? 'has-error' : '' }}">
    {{ Form::label('stok', 'Stok Produk') }}
    {{ Form::number('stok',$inventory->stok,['class'=>'form-control border-input','placeholder'=>'Masukkan stok produk']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('barcode') ? 'has-error' : '' }}">
    {{ Form::label('barcode', 'Barcode Produk') }}
    {{ Form::number('barcode',$inventory->barcode,['class'=>'form-control border-input','placeholder'=>'Masukkan barcode produk']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('status') ? 'has-error' : '' }}">
    {{ Form::label('status', 'Status produk') }}
    {{ Form::select('status', array('Tersedia' => 'Tersedia', 'Habis' => 'Habis')) }}
</div>

<div class="form-group {{ $errors ?? ''->has('expired') ? 'has-error' : '' }}">
    {{ Form::label('expired', 'Expired Produk') }}
    {{ Form::date("dd-mm-YYYY", strtotime($inventory->expired)) }}
</div>

<div class="form-group {{ $errors ?? ''->has('kategori') ? 'has-error' : '' }}">
    {{ Form::label('kategori', 'Pilih Kategori') }}
    <select name="kategori" id="kategori">
        <option value="{{$inventory->id}}" selected>{{$inventory->nama_kategori}}</option>
        @foreach ($kategori as $kat)
            @if ($kat->id != $inventory->id)
                <option value="{{$kat->id}}">{{$kat->nama_kategori}}</option>
            @endif
        @endforeach
    </select>
</div>

<div class="form-group {{ $errors ?? ''->has('ket') ? 'has-error' : '' }}">
    {{ Form::label('ket', 'Keterangan Produk') }}
    {{ Form::textarea('ket', $inventory->ket, ['class'=>'form-control border-input','placeholder'=>'Masukkan keterangan produk']) }}
</div>

<div class="form-group {{ $errors ?? ''->has('image') ? 'has-error' : '' }}">
    {{ Form::label('file','Foto Produk') }}
    {{ Form::file('image', ['class'=>'form-control border-input', 'id' => 'image']) }}
    <div id="thumb-output"></div>
</div>
