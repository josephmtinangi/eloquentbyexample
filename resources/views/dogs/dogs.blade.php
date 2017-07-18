<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Age</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@php $i = 1 @endphp
		@foreach($dogs as $dog)
		<tr>
			<td>{{ $i++ }}.</td>
			<td>{{ $dog->name }}</td>
			<td>{{ $dog->age }}</td>
			<th><a href="#">Edit</a></th>
			<th>
				<form method="POST" action="{{ route('dogs.destroy', $dog->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
				</form>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>