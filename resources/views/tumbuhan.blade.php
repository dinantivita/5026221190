@extends('template')

@section('tulisan1','Tumbuhan')

@section('link1')
	<a href="/tumbuhan/tambahtumbuhan"class="btn btn-primary"> + Tambah Tumbuhan Baru</a>
    <br>
    <a href="/pegawai"> kembali ke pegawai</a>
@endsection

@section('konten')

	<br/>
	<form action="/tumbuhan/caritumbuhan" method="GET">
        <div class="row mb-3">
            <label for="caritumbuhan" class="col-sm-2 col-form-label">Cari Nama Tumbuhan:</label>
            <div class="col-sm-6">
              <input type="text" name="caritumbuhan" class="form-control" id="caritumbuhan" placeholder="Cari Tumbuhan .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI"class="btn btn-success">
              </div>
          </div>
	</form>
	<br/>
	<table class="table table-striped table-hover">
		<tr>
			<th>Nama Tumbuhan</th>
			<th>Jumlah Tumbuhan</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($tumbuhan as $t)
		<tr>
			<td>{{ $t->namatumbuhan }}</td>
			<td>{{ $t->jumlahtumbuhan }}</td>
			<td>{{ $t->tersedia }}</td>

			<td>
				<a href="/tumbuhan/edittumbuhan/{{ $t->kodetumbuhan }}"class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/tumbuhan/hapustumbuhan/{{ $t->kodetumbuhan }}" class="btn btn-info"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>


    <br/>
	Halaman : {{ $tumbuhan->currentPage() }} <br/>
	Jumlah Data : {{ $tumbuhan->total() }} <br/>
	Data Per Halaman : {{ $tumbuhan->perPage() }} <br/>


	{{ $tumbuhan->links() }}

 @endsection
