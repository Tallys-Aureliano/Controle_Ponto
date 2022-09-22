<section class="section p-0">
        <h1 class="text-center"></h1>
        <div class="col-12 mt-5 mx-auto">
            <h1 class="text-center mt-1 mb-1">
                    @php
                        echo "Registro de pontos do dia " . date('d/m/Y');
                        @endphp
                    </h1>
                <div>
                    <div class="table-responsive rounded-2 shadow-sm mt-5">
                        <table class="table table-sm overflow-auto">
                            <thead>
                                <th>Funcionário</th>
                                <th>Entrada</th>
                                <th>Saída</th>
                                <th>Situação</th>
                            </thead>
                            <tbody>
                                @foreach($points as $point)
                                    <tr 
                                    @if($point->exit_time)
                                    style="background-color: white;"
                                    @else
                                    style="background-color: #FFC70040;"
                                    @endif
                                    >
                                        <td><a href="{{ route('manager.show.employe', ['id'=>$point->users->id]) }}">
                                            {{$point->users->name}}
                                            </a>
                                        </td>
                                        <td>{{$point->entry_time}}</td>
                                        <td>{{$point->exit_time}}</td>
                                        <td>
                                            @if($point->exit_time)
                                                Fechado
                                            @else
                                                Aberto
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr>

                <div class="text-center card shadow-sm mt-5">

                    <div class="card-body">
                        <h2 class="mt-3">Registro de pontos</h2>
                        <h4 class="mt-3">(Exclusivo para usuário de pontos)</h4>
                        <a href="{{ route('manager.point.create') }}"><button class="btn btn-lg  btn-primary-m mt-3 mb-3">Registrar pontos</button></a>
                    </div>
                </div>
            <hr>

               
        <div class="row gap-1 mb-5 mt-3 mx-auto justify-content-left mt-5">
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center">Funcionários</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">
                        @php
                            echo App\Models\User::where('business_id', auth()->user()->business_id)->count();
                        @endphp
                    </h1>
                    <a href="{{ route('manager.list_employes') }}"><button class="btn  btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
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
                    <a href="{{ route('manager.justificative.list') }}"><button class="btn  btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center">Horas Atrasadas</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">100</h1>
                    <a href=""><button class="btn btn-detalhar">Detalhar</button></a>
                </div>
            </div>
        </div> 
</section>
