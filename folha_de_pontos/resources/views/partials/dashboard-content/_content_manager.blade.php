<section class="section p-0">
    <div class="container">
        <h1 class="text-center"></h1>


        <div class=" card col-12 mt-5 mx-auto">
                <h3 class="text-center mt-1 mb-1">
                    @php
                        echo "Registro de pontos do dia " . date('d/m/Y');
                    @endphp
                </h3>
                <h4>Total: {{$points->count()}}</h4>
                <div class="table-responsive mt-2">
                    <table class="table table-sm">
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
                                style="background-color: green;"
                                @else
                                style="background-color: gray;"
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
                <a href="{{ route('manager.point.create') }}"><button class="btn btn-lg btn-primary mb-2">Registrar pontos</button></a>
            </div>


        <div class="row gap-1 mb-5 mt-3 mx-auto justify-content-left">
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
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
                    <a href="{{ route('manager.justificative.list') }}"><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
            <div class=" card col-lg-3 col-md-5 service-item mt-5 mx-auto">
                <div class=" ">
                    <h5 class="fw-semibold mb-3 mt-3 service-description text-center">Horas Atrasadas</h5>
                    <h1 class="fw-bold mb-5 service-title text-center text-black">100</h1>
                    <a href=""><button class="btn btn-lg btn-detalhar">Detalhar</button></a>
                </div>
            </div>
        </div>
    </div>
</section>