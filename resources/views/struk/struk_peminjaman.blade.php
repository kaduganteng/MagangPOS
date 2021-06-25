<!DOCTYPE html>
<html>

<head>
	<title>Struk Peminjaman</title>
</head>

<body>
	
	<center>
		<h5>Struk Peminjaman</h4>
<p>NO : ................................... </p>
	</center>
	<p>Pada Hari ini : ..............................., Tanggal : {{$data['tanggal_pinjam']}}</p>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th	>No</th>
				<th>Nama Barang</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$inv['nama']}}</td>
				<td>{{$inv['keterangan']}}</td>

			</tr>		
		</tbody>
	</table>
	<p>Status Asset:</p>
	<p>Asset tercatat sebagai asset :...................................................... </p>
	<p>Kepada (Pengguna)</p>
	<p>Nama			:	{{$user->name}}</p>
	<p>NIPPOS		:	{{$user->nippos}}</p>
	<p>JABATAN  	:	{{$user->jabatan}}</p>
	<p>UNIT KERJA	:..................</p>
	<p>DIVISI		:..................</p>
	<p>SUBDIT		:..................</p>
	<p>Untuk pemenuhan permintaan :............................................................(Jabatan peminta)</p>
	<p>Dengan menunjuk surat : {{$data['suratpinjam']}}</p>


	<center>
	<table>
	<th>
	<td>
	<p>Mengetahui</p>
	<p>Man Infrastruktur</p>
	<img src="{{public_path('image/frame.png')}}" alt="">
	</td>
	
	</th>
	</table>
	</center>
</body>

</html>