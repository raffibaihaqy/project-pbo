<div class="form-group {{ $errors ?? ''->has('curr') ? 'has-error' : '' }}">
    {{ Form::label('curr', 'Curr') }}
    {{ Form::text('curr',$curr->curr,['class'=>'form-control border-input','placeholder'=>'Masukkan Curr produk...']) }}
</div>
