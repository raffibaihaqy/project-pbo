<div class="form-group">
    <label for="cc-payment" class="control-label mb-1">All Produk</label>
    <select name="kode_transaksi" id="kode_transaksi" class="form-control">
        @foreach ($inventory as $inv)
            <option value="{{$inv->id}}">{{$inv->nama}}</option>
        @endforeach
    </select>
</div>
