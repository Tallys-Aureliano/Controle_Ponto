<li class="nav-item">
    <a class="nav-link" href="{{ route('manager.dashboard') }}">
        <i class="fas fa-fw fa-cog"></i>
        <span><i class="bi bi-gear"></i>Início</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('manager.profile') }}">
        <span><i class="bi bi-person"></i>Perfil</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <span><i class="bi bi-people"></i>Funcionários</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('manager.list_employes') }}"><i class="bi bi-search"></i>ver todos</a>
        </div>
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('manager.create.employe') }}"><i class="bi bi-plus"></i>Novo</a>
        </div>
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('manager.list_employes') }}"><i class="bi bi-pencil"></i>Editar</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <span><i class="bi bi-file-earmark-text"></i>Relatórios</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{ route('manager.create.report.individual') }}"><i class="bi bi-person"></i>Individual</a>
        </div>
        <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{ route('manager.create.report.general') }}"><i class="bi bi-people"></i>Geral</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <span><i class="bi bi-emoji-smile"></i></i>Justificativas</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseTwo">
        <span><i class="bi bi-gear"></i>Configurações</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="buttons.html"><i class="bi bi-building"></i>Minha empresa</a>
        </div>
    </div>
</li>