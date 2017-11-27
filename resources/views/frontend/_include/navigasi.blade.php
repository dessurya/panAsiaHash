<div id="navbar">
	<div class="set-wrapper">
		<div id="set-width" class="width-large">
			<div id="logo" class="bar">
				<div class="midle">
					<div id="col">
						<a href="{{ route('frontend.home') }}">
							<img src="{{ asset('assets/images-base/logo-pah.png') }}">	
						</a>
						<div id="burger-icon">
							<div></div>
							<div></div>
							<div></div>
						</div>
					</div>
				</div>
			</div>
			<div id="list" class="bar">
				<div class="midle">
					<div id="col">
						<a href="{{ route('frontend.coming') }}" class="{{ Route::is('frontend.coming') ? 'active' : '' }}">
							Who's Coming
						</a>
					</div>
				</div>
				<div class="midle">
					<div id="col">
						<a href="{{ route('frontend.schedule') }}" class="{{ Route::is('frontend.schedule') ? 'active' : '' }}">
							Schedule
						</a>
					</div>
				</div>
				<div class="midle">
					<div id="col">
						<a href="{{ route('frontend.commitee') }}" class="{{ Route::is('frontend.commitee') ? 'active' : '' }}">
							Commitee
						</a>
					</div>
				</div>
				<div class="midle">
					<div id="col">
						<a href="{{ route('frontend.gallery') }}" class="{{ Route::is('frontend.gallery') ? 'active' : '' }}">
							Gallery
						</a>
					</div>
				</div>
				<div class="midle">
					<div id="col">
						<a href="{{ route('frontend.registerPayment') }}" class="{{ Route::is('frontend.registerPayment') ? 'active' : '' }}">
							Registrasi & Payment
						</a>
					</div>
				</div>
				<div class="midle">
					<div id="col">
						<a href="{{ route('frontend.goverment-message') }}" class="{{ Route::is('frontend.goverment-message') ? 'active' : '' }}">
							Goverment Message
						</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>