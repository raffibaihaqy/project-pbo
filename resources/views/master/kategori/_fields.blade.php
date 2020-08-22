<div class="form-group {{ $errors ?? ''->has('nama_kategori') ? 'has-error' : '' }}">
    {{ Form::label('nama_kategori', 'Kategori Produk') }}
    {{ Form::text('nama_kategori',$kategori->nama_kategori,['class'=>'form-control border-input','placeholder'=>'Masukkan kategori produk...']) }}
</div>
