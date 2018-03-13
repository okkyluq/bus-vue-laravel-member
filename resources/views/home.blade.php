@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Data Member</div>
                    <div class="panel-body">
                    <search></search>
					<member></member>
					<pagination></pagination>
					</div>
				</div>
			</div>
    	</div>
	</div>
</div>
@endsection
