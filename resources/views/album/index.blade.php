@extends('tamplate.index')

@section('title')
<h1 class="h3 mb-0 text-gray-800">Data Album</h1>
@endsection


@section('content')
<a href="{{ url('album/create') }}" class="btn btn-success btn-circle btn-lg">
    <i class="fas fa-plus"></i>
</a>
<hr>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
		<tr>
        	<th>ALBUM ID</th>
			<th>ARTIST ID</th>
			<th>ALBUM NAME</th>	
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->album_id }}</td>
			<td>{{ $row->artist_name}}</td>
			<td>{{ $row->album_name }}</td>
			<td>

			<form action="{{ url('album/' . $row->album_id) }}" method="POST">
				<a href="{{ url('album/' . $row->album_id . '/edit') }}">Edit</a>
			
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button>Hapus</button>
			</form>
			</td>
		</tr>
		@endforeach
		</tbody>
                </table>
              </div>
            </div>
</div>



@endsection