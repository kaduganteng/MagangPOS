<!DOCTYPE html>
<html>

<head>
	<title>Struk Peminjaman</title>
</head>

<body>

	<center>
		<h1>Struk Peminjaman Perangkat</h1>
		<p>NO : ................................... </p>
	</center>
	<p>Pada Hari ini : ..............................., Tanggal : {{$data['tanggal_pinjam']}}</p>


	<table style="width:100%">
		<caption>Monthly savings</caption>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jumlah Unit</th>
			<th>Keterangan</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</table>
	<p>Status Asset:</p>
	<p></p>
	<p>Asset tercatat sebagai asset :...................................................... </p>
	<p>Kepada (Pengguna)</p>
	<p>Nama : {{$user->name}}</p>
	<p>NIPPOS : {{$user->nippos}}</p>
	<p>JABATAN : {{$user->jabatan}}</p>
	<p>UNIT KERJA :..................</p>
	<p>DIVISI :..................</p>
	<p>SUBDIT :..................</p>
	<p> </p>
	<p> </p>
	<p>Untuk pemenuhan permintaan :............................................................(Jabatan peminta)</p>
	<p>Dengan menunjuk surat : {{$data['suratpinjam']}}</p>
	<p>No : </p>
	<p>Perihal : </p>

	<center>
		<table>
			<th>
			<td>
				<p>Mengetahui</p>
				<p>Man Infrastruktur</p>
				<img src="{{public_path('image/frame.png')}}" alt="" height="50px" width="50px">
			</td>
			<td>

				<p>Yang Menyerahkan</p>
				<img src="{{public_path('image/frame.png')}}" alt="" height="50px" width="50px">
			</td>
			</th>
		</table>
	</center>
</body>

</html>