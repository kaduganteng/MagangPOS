<!DOCTYPE html>
<html>

<head>
	<title>Struk Peminjaman</title>
</head>

<body>
	<style type="text/css">
		table tr td,
		table tr th {
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Struk Peminjaman</h4>
<p>NO : ................................... </p>
	</center>
	<p>Pada Hari ini : ..............................., Tanggal : {{$data['tanggal_pinjam']}}</p>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nippos</th>
				<th>Tanggal Pinjam</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$data['nip']}}</td>
				<td>{{$data['tanggal_pinjam']}}</td>

			</tr>		
		</tbody>
	</table>
	<p>Status Asset:</p>
	<p>Asset tercatat sebagai asset :...................................................... </p>
	<p>Kepada (Pengguna)</p>
	<p>Nama			:	</p>
	<p>NIPPOS		:	</p>
	<p>JABATAN  	:..................</p>
	<p>UNIT KERJA	:..................</p>
	<p>DIVISI		:..................</p>
	<p>SUBDIT		:..................</p>
	<p>Untuk pemenuhan permintaan :............................................................(Jabatan peminta)</p>
	<p>Dengan menunjuk surat :{{$data['suratpinjam']}}</p>


	<center>
	<table>
	<th>
	<td>
	<p>Mengetahui</p>
	<p>Man Infrastruktur</p>
	
	</td>
	
	</th>
	</table>
	</center>
</body>

</html>