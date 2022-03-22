@extends('layout.main')

@section('content')

<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2 class="card-title">	
				Check If Entry Exists
			</h2>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<img src="{{ asset('assets/images/id-card.png') }}" alt="Id Card Number">
				</div>
				<div class="col">

					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
						</ul>
					</div>
					@endif

					<form action="{{ url('check_id') }}" method="POST">
					@csrf
						<div class="mb-3">
							<label for="national_id" class="form-label">Enter Id Number</label>
							<input type="text" name="national_id" class="form-control" id="national_id">
							<input type="hidden" name="agent_name" value="{{ auth()->user()->first_name . ' ' }} . {{ auth()->user()->last_name }}">
						</div>

						<button type="submit" class="btn btn-primary">Check</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection