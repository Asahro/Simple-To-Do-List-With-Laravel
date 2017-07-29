@extends('layout')
@section('judul')
Hello
@endsection
@section('konten')
<form method="POST" action="{{ url('daftar') }}">
{{csrf_field()}}
<input type="text" name="data" class="form-control" placeholder="Kegiatan" style="width:60%;float:left">
<input type="date" name="deadline" class="form-control" placeholder="Deadline" style="width:20%;float:left">
<input type="submit" class="btn btn-succes" style="width:20%;float:right">

</form>

<table class="table teble-hover" style="margin-top:40px;"> 
	<thead>
		<tr>
			<th style="width:5%">No</th>
			<th style="width:60%">Kegiatan</th>
			<th style="width:20%">Deadline</th>
			<th style="width:10%">Status</th>
			<th style="width:5%">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $no = 0; ?>
	@foreach($data as $a)
		<?php $no = $no + 1; ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td>{{$a->data}}</td>
			<td>{{$a->deadline}}</td>			
			<td>{{$a->status}}</td>			
			<td>
			<?php if($a['status'] == 'Belum') { ?>
				<a href="{{ url('selesai/'.$a->no) }}"><button style="width:100%">Selesai</button></a>
			<?php }
				else { ?>
				<a href="{{ url('hapus/'.$a->no ) }}"><button style="width:100%">Hapus</button></a>
			<?php 	}  ?>
			</td>			
		<tr>
	@endforeach
	</tbody>
</table>
@endsection