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
        <i class="bi bi-people"></i>
            <span>Justificativas</span>
            {{-- <i class="bi bi-file-earmark-text"></i> --}}
        </a>
    
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opções</h6>
                <a class="collapse-item" href="{{ route('manager.list_employes') }}">Nova Justificativa</a>
                <a class="collapse-item" href="{{ route('manager.create.employe') }}">Minhas Justificativas</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-file-earmark-text"></i>
            <span>Histórico de pontos</span>
            {{-- <i class="bi bi-file-earmark-text"></i> --}}
        </a>
    </li>
</div>


