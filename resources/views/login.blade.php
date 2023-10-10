@extends('layouts.main')

@section('container')

	<div class="bg-overlay" style="height: 100vh">
		<div class="color-bg-overlay">
			<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
				<div class="row justify-content-center border-0 rounded bg-white" style="width: 50%; height: fit-content;">

					{{-- Left Side --}}
					<div class="col-md-7 col-xs-12 pt-2 px-4">
						<img src="{{ asset('images/login-telkom-logo.png') }}" class="mx-auto img-fluid" width="40%" alt="">
					</div>

					{{-- Right Side --}}
					<div class="col-md-12 col-xs-12 ">

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection