@extends('template')

@section('tulisan1','Data Karyawan')

@section('link1')
	<a href="/indexkaryawan/tambahdata"class="btn btn-primary">Tambah Data</a>
@endsection

@section('konten')

	<br/>
	<table class="table table-striped table-hover">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
            <th>Gaji</th>
		</tr>
		@foreach($karyawan1 as $k1)
		<tr>
			<td>{{ $k1->NIP}}</td>
			<td>{{ $k1->Nama}}</td>
            <td>{{ $k1->Pangkat}}</td>
            <td align="text-end">{{ number_format($k1->Gaji, 0, ',', '.') }}</td>
			<td>
				<a href="/indexkaryawan/hapusdata/{{ $k1->NIP }}"class="btn btn-danger">Hapus Data</i></a>
            </td>
		</tr>
		@endforeach
	</table>

 @endsection
