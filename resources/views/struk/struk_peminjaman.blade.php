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

	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nippos</th>
				<th>Tanggal Pinjam</th>
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
	
</body>

</html>