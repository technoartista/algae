@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/algae_readings') }}">Algae Reading</a> :
@endsection
@section("contentheader_description", $algae_reading->$view_col)
@section("section", "Algae Readings")
@section("section_url", url(config('laraadmin.adminRoute') . '/algae_readings'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Algae Readings Edit : ".$algae_reading->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($algae_reading, ['route' => [config('laraadmin.adminRoute') . '.algae_readings.update', $algae_reading->id ], 'method'=>'PUT', 'id' => 'algae_reading-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'date')
					@la_input($module, 'camera')
					@la_input($module, 'algae')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/algae_readings') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#algae_reading-edit-form").validate({
		
	});
});
</script>
@endpush
