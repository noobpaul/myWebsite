@extends('layouts.master')

@section('content')
	<form action="{{url('add')}}" method="post">
	{{csrf_field()}}
		<div>
		
			<input type="text" name="title"><br>
			<input type="text" name="about"><br>
			<button type="submit">Create</button>

		</div>
	</form>
@stop