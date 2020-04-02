@extends('layouts.app')

@section('style')

@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<restro-group :restros = "{{ json_encode($restros) }}"></restro-group>
		</div>
	</div>
</div>
@endsection
