@extends('template')

@section('tulisan1','Data Tumbuhan')

@section('link1')
<a href=" /pegawai/tumbuhan"> Kembali</a>
@endsection

@section('konten')
	<form action="/tumbuhan/storetumbuhan" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="namatumbuhan" class="col-sm-2 col-form-label">Nama Tumbuhan</label>
            <div class="col-sm-10">
              <input type="text" name="namatumbuhan" class="form-control" id="namatumbuhan" required="required">
            </div>
          </div>
        <div class="row mb-3">
            <label for="jumlahtumbuhan" class="col-sm-2 col-form-label">Jumlah Tumbuhan</label>
            <div class="col-sm-10">
              <input type="number" name="jumlahtumbuhan" class="form-control" id="jumlahtumbuhan" required="required">
          </div>
          </div>
          <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="tersedia"
                        id="tersediaY"
                        value="Y"
                    >
                    <label class="form-check-label" for="tersediaY">
                        Ada
                    </label>
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="tersedia"
                        id="tersediaN"
                        value="N"
                    >
                    <label class="form-check-label" for="tersediaN">
                        Habis
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
            <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
        </div>
    </div>
	</form>
    @endsection


