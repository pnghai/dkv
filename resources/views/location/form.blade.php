<form method="POST" action="{{ route('locations.store') }}">
	{!! csrf_field() !!}
	<ul>
		<li>
			<label for="location_types_id">Location_types_id </label>
			<input id="location_types_id" name="location_types_id" type="text"/>
		</li>
		<li>
			<button type="submit">Submit</button>
		</li>
	</ul>
</form>