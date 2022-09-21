<section class="section p-0">
    <div class="container">
        <h1 class="text-center"></h1>
        <div class="row gap-1 mb-5 mt-3 mx-auto justify-content-left">
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center shadow-sm">Carga horária</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">100</h1>
                    <a href=""><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center shadow-sm">Horas extra</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">100</h1>
                    <a href=""><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center shadow-sm">Horas Atrasadas</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">100</h1>
                    <a href=""><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center shadow-sm">Folgas</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">100</h1>
                    <a href=""><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center shadow-sm">Faltas</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">100</h1>
                    <a href=""><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center shadow-sm">Justificativas</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">
                        @php
                           echo App\Models\Justification::where('users_id', auth()->user()->id)->count();
                        @endphp
                    </h1>
                    <a href="{{ route('employe.justification.list') }}"><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
      
        </div>