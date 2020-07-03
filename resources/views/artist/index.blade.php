@extends('tamplate.index')

@section('title')
<h1 class="h3 mb-0 text-gray-800">Data Artist</h1>
@endsection


@section('content')
<a href="{{ url('artist/create') }}" class="btn btn-success btn-circle btn-lg">
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
			<td>ARTIST ID</td>
			<td>ARTIST NAME</td>
		</tr>
		</thead>
		</tbody>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->artist_name }}</td>
			
			<td>

			<form action="{{ url('artist/' . $row->artist_id) }}" method="POST">
				<a href="{{ url('artist/' . $row->artist_id . '/edit') }}">Edit</a>
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