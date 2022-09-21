<section class="section p-0">
    <div class="container">
        <h1 class="text-center">Dashboard</h1>
        <div class="row gap-1 mb-5 mt-3 mx-auto justify-content-left">
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto shadow-sm">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center">Funcionários</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">
                        @php
                            echo App\Models\User::where('business_id', auth()->user()->business_id)->count();
                        @endphp
                    </h1>
                    <a href="{{ route('manager.list_employes') }}"><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto shadow-sm">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center">Justificativas</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">
                        @php
                            echo $justifications = App\Models\Justification::whereHas('user', function($query)
                            {
                                $query->where('business_id', '=', auth()->user()->business_id);
                            })->get()->count();
                            
                        @endphp
                    </h1>
                    <a href="{{ route('manager.justificative.list') }}"><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto shadow-sm">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center">Horas Atrasadas</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">100</h1>
                    <a href=""><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
      
        </div>
    </div>
</section>