@extends('layouts.main')

@section('container')

	<div class="bg-overlay">
		<div class="color-bg-overlay overlay">
			<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; padding: 6.4rem 0 3.2rem 0">
				<div class="row justify-content-center border-0 rounded-4 bg-white" style="width: 65%; height: fit-content;">

					{{-- Left Side --}}
					<div class="col-md-7 col-xs-12 pt-2 px-4">
						<img src="{{ asset('images/login-telkom-logo.png') }}" class="d-flex mx-auto img-fluid py-3" width="40%" alt="">
						<p class="text-center fw-bold fs-5 mt-3">
							Online KTM Service
						</p>
						<p class="mt-3 ps-3">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ratione blanditiis animi dolore nesciunt, ullam, culpa atque harum, eos dignissimos illo dolor repudiandae quos. Maxime, dolor doloribus nostrum incidunt accusantium, placeat dolorem omnis ratione, alias tenetur ipsam beatae veniam sit.
						</p>
					</div>

					{{-- Right Side --}}
					<div class="col-md-5 col-xs-12 py-4 px-4 border-0 rounded-4" style="background-color: #9F0000;">
						<p class="text-center fw-bold fs-2 mt-3 text-white">
							SSO Login
						</p>
						<div class="px-4">
							<form action="">
								<div class="mt-5 mb-3">
									<input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username" id="username" placeholder="Username">
									@error('username')
										<div class="invalid-feedback text-white">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="mb-5">
									<input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" id="password" placeholder="Password">
									@error('password')
										<div class="invalid-feedback text-white">
											{{ $message }}
										</div>
									@enderror
								</div>
								@if (Session::has('error'))
									<div class="text-white text-end mb-2">
										{{ Session::get('error') }}
									</div>
								@endif
								<div class="d-flex flex-row-reverse">
									<button type="submit" class="btn btn-light">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection