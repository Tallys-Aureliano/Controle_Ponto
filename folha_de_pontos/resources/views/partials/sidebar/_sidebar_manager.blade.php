<div class="">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('manager.dashboard') }}">
            <i class="bi bi-house"></i>
            <span>Início</span>
            {{-- <i class="bi bi-file-earmark-text"></i> --}}
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('manager.profile') }}">
            <i class="bi bi-person"></i>
            <span>Perfil</span>
            {{-- <i class="bi bi-file-earmark-text"></i> --}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span><i class="bi bi-people"></i>Funcionários</span>
            {{-- <i class="bi bi-file-earmark-text"></i> --}}
        </a>
    
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opções</h6>
                <a class="collapse-item" href="{{ route('manager.list_employes') }}">Ver todos</a>
                <a class="collapse-item" href="{{ route('manager.create.employe') }}">Novo</a>
                <a class="collapse-item" href="{{ route('manager.list_employes') }}">Editar</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-file-earmark-text"></i>
            <span>Relatórios</span>
            {{-- <i class="bi bi-file-earmark-text"></i> --}}
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tipos</h6>
                <a class="collapse-item" href="{{ route('manager.create.report.individual') }}">Individual</a>
                <a class="collapse-item" href="{{ route('manager.create.report.general') }}">Geral</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" aria-expanded="true">
            <i class="bi bi-emoji-smile"></i>
            <span>Justificativas</span>
            {{-- <i class="bi bi-file-earmark-text"></i> --}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-gear"></i>
            <span>Configurações</span>
            {{-- <i class="bi bi-file-earmark-text"></i> --}}
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opções</h6>
                <a class="collapse-item" href="{{ route('manager.show.business') }}">Minha empresa</a>
            </div>
        </div>
    </li>
</div>


