{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('cost', 'Cost:') !!}
			{!! Form::text('cost') !!}
		</li>
		<li>
			{!! Form::label('source', 'Source:') !!}
			{!! Form::text('source') !!}
		</li>
		<li>
			{!! Form::label('target', 'Target:') !!}
			{!! Form::text('target') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}