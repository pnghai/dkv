{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('route_id', 'Route_id:') !!}
			{!! Form::text('route_id') !!}
		</li>
		<li>
			{!! Form::label('vehicle_id', 'Vehicle_id:') !!}
			{!! Form::text('vehicle_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}