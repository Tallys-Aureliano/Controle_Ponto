@section('head')

@endsection
<!-- navigation -->
<header class="navigation fixed-top bg-white  bg-tertiary shadow-sm">
	<nav class="navbar  navbar-expand-xl navbar-light text-center py-3">
		<div class="container-fluid d-flex justify-content-between>
			<a class="navbar-brand" href="index.html">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{ asset('assets/img/logo-media.png') }}" alt="Serido Ponto">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<div class="ms-auto me-4">
				<ul class="navbar-nav  mb-2 mb-lg-0">
				<li class="nav-item"> <a class="nav-link" href="#inicio">Inicio</a>
				</li>
				<li class="nav-item "> <a class="nav-link" href="#funcionalidades">Funcionalidades</a>
				</li>
				<li class="nav-item "> <a class="nav-link" href="#ajuda">Ajuda</a>
				</li>
				<li class="nav-item "> <a class="nav-link" href="#sobre">Sobre</a>
				</li>
			</ul>
				</div>
			
		<div>
			<!-- account btn --> <a href="{{ route('login') }}" class="btn  btn-secundary-m rounded-3">Entrar</a>
			<!-- account btn --> <a href="{{ route('register') }}" class="btn btn-primary-m rounded-3 ms-2">Cadastre-se</a>

		</div>
	</div>
</div>
</nav>
</header>
<!-- /navigation -->
<div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
	<div class="modal-header border-bottom-0">
		<h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	</div>
	<div class="modal-body">
		<form action="#!" method="post">
			<div class="row">
				<div class="col-lg-6 mb-4 pb-2">
					<div class="form-group">
						<label for="loan_amount" class="form-label">Amount</label>
						<input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
					</div>
				</div>
				<div class="col-lg-6 mb-4 pb-2">
					<div class="form-group">
						<label for="loan_how_long_for" class="form-label">How long for?</label>
						<input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
					</div>
				</div>
				<div class="col-lg-12 mb-4 pb-2">
					<div class="form-group">
						<label for="loan_repayment" class="form-label">Repayment</label>
						<input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
					</div>
				</div>
				<div class="col-lg-6 mb-4 pb-2">
					<div class="form-group">
						<label for="loan_full_name" class="form-label">Full Name</label>
						<input type="text" class="form-control shadow-none" id="loan_full_name">
					</div>
				</div>
				<div class="col-lg-6 mb-4 pb-2">
					<div class="form-group">
						<label for="loan_email_address" class="form-label">Email address</label>
						<input type="email" class="form-control shadow-none" id="loan_email_address">
					</div>
				</div>
				<div class="col-lg-12">
					<button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>