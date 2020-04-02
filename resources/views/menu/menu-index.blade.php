@extends('layouts.app')

@section('style')
	{{-- <style type="text/css">
		.table td {
			white-space: normal;
			line-height: normal;
		}
	</style> --}}
@endsection

@section('content')
<div class="container">
	
	<div class="row">
		<div class="col-md-12">
			<menu-container :items = "{{ json_encode($menus) }}" :restro-id = {{ $restroId }}></menu-container>
		</div>
	</div>
    
</div>
@endsection
