@extends('template')

@section('tulisan1','Beli')

@section('link1')
<a href=" /keranjang"> Kembali</a>
@endsection

@section('konten')
	<form action="/keranjang/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
              <input type="text" name="kodebarang" class="form-control" id="kodebarang" required="required">
          </div>
          </div>
          <div class="row mb-3">
            <label for="jumlahpembelian" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
                <input type="number" name="jumlahpembelian" class="form-control" id="jumlahpembelian" required="required">
            </div>
            </div>
            <div class="row mb-3">
                <label for="hargaperitem" class="col-sm-2 col-form-label">Harga per item</label>
                <div class="col-sm-10">
                    <input type="number" name="hargaperitem" class="form-control" id="hargaperitem" required="required">
                </div>
                </div>
        <div class="row mb-3">
            <div class="col-sm-12">
            <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
        </div>
    </div>
	</form>
    @endsection


