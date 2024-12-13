@extends('template')

@section('tulisan1','Keranjang Belanja')

@section('link1')
	<a href="/keranjang/beli"class="btn btn-primary">Belanja</a>
@endsection

@section('konten')

	<br/>
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjang as $k)
		<tr>
			<td>{{ $k->ID}}</td>
			<td>{{ $k->KodeBarang}}</td>
            <td>{{ $k->Jumlah}}</td>
            <td align="text-end">{{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td align="text-end">{{ number_format($k->Harga * $k->Jumlah, 0, ',', '.') }}</td>

			<td>
				<a href="/keranjang/batal/{{ $k->ID }}"class="btn btn-danger">Batal</i></a>
            </td>
		</tr>
		@endforeach
	</table>

 @endsection
