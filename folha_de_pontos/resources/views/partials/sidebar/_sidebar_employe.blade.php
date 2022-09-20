<li class="nav-item">
    <a class="nav-link" href="{{ route('manager.dashboard') }}">
        <i class="bi bi-house-door-fill"></i>
        <span>Início</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('employe.profile') }}">
        <i class="bi bi-person-fill"></i>
        <span>Perfil</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="bi bi-emoji-smile-fill"></i>
        <span>Justificativas</span>
    </a>

    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opções</h6>
            <a class="collapse-item" href="{{ route('employe.justifications.create') }}">Nova Justificativa</a>
            <a class="collapse-item" href="{{ route('employe.justifications.show') }}">Minhas Justificativas</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="bi bi-file-earmark-text-fill"></i>
        <span>Histórico de pontos</span>
    </a>
</li>