<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Struk Peminjaman</title>
	<style type="text/css">
		.table {
			border-style: double;
			border-width: 10px;
			border-color: white;
		}

		.table,
		tr .text2 {
			text-align: right;
			font-size: 17px;
		}

		.table,
		.tr,
		.text {
			text-align: center;
			font-size: 17px;
		}

		.table,
		.tr,
		.td {
			font-size: 13px;
		}

		.table1 {
			width: 50%;
			font-size: 20 px;
			position: center;
			margin: auto;
			padding: 10px;
		}


		.table1,
		.th1,
		.td1 {
			border: 1px solid black;
			border-collapse: collapse;
		}

		.th1,
		.td1 {
			padding: 1px;
			text-align: left;
		}

		#t01 tr:nth-child(even) {
			background-color: #eee;
		}

		#t01 tr:nth-child(odd) {
			background-color: #fff;
		}

		#t01 th {
			background-color: black;
		}

		.text2 {
			text-align: right;
			font-size: 15px;
		}

		.font1 {
			width: 50%;
			font-size: 20 px;
			position: center;
			margin: auto;
			padding: 10px;
		}
	</style>
</head>

<body>
	<center>
		<table class="font1">
			<tr>

				<td>
					<center>
						<font class="font1">FORMULIR SERAH TERIMA TERIMA PERANGKAT </font><br>
						<font class="font1">NO : ....................................</font><br>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
			<table width="525">
				<tr>
					<td class="text2">Bandung, {{$data['tgl_peminjaman']}}</td>
				</tr>
			</table>
		</table>
		<table>
			<tr>
				<td>Perihal</td>
				<td width="564">: Peminjaman Aset</td>
			</tr>
		</table>
		<br>
		<center>
			<table class="table1">
				@php
				$no = 1;
				@endphp

				<tr>

					<th class="th1">No</th>
					<th class="th1">Nama Barang</th>
					<th class="th1">Keterangan</th>
				</tr>
				<tr>

					<th class="th1">{{$no++}}</th>
					<th class="th1">{{$inv->nama}}</th>
					<th class="th1">{!!$inv->kelengkapan!!}</th>
				</tr>

			</table <table>
		</center>


		<tr>
			<td>Nama</td>
			<td width="525">: {{$user->name}}</td>
		</tr>
		<tr>

			<td>NIPPOS</td>
			<td width="525">: {{$user->nippos}}</td>
		</tr>

		<tr>
			<td>Jabatan</td>
			<td width="525">: {{$user->jabatan}} </td>

		</tr>
		<tr>
			<td>Divisi</td>
			<td width="525">: {{$user->divisi}}</td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td width="525">: {{$user->jabatan}}</td>
		</tr>
		<tr>



		</tr>


		</table>
		<br>

		<table width="625">
			<tr>
				<td>
					<font size="3">Untuk penuhan permintaan :........................ (jabatan peminta)</font><br>
					<font size="3">Tanggal : <b>{{$data['tgl_peminjaman']}}</b> </font>
					<font size="3">dengan menunjukan surat :<b>{{$data['surat_peminjaman']}} </b></font>

				</td>

			</tr>
		</table>
		<br>
		<br>
		<br>
		<br>
		<table width="500">
			<tr>
				<td width=""><br><br><br><br></td>
				<td class="text" style="text-align: center;" font size="3">Man Infrastruktur<br><br><br><br>

					UUD SUDIONO
				</td>
			</tr>
		</table>
	</center>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

</html>