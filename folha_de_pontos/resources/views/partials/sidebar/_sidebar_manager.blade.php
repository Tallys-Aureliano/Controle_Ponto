<li class="nav-item">
    <a class="nav-link" href="{{ route('manager.dashboard') }}">
        <i class="fas fa-fw fa-cog"></i>
        <span><i class="bi bi-gear"></i>Início</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('manager.profile') }}">
        <i class="fas fa-fw fa-cog"></i>
        <span><i class="bi bi-gear"></i>Perfil</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-cog"></i>
        <span><i class="bi bi-gear"></i>Funcionários</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('manager.create.employe') }}">Novo</a>
        </div>
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('manager.list_employes') }}">Editar</a>
        </div>
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('manager.list_employes') }}">Pesquisar</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span><i class="bi bi-gear"></i>Relatórios</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('manager.create.report.general') }}">Geral</a>
        </div>
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('manager.create.report.individual') }}">Individual</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-cog"></i>
        <span><i class="bi bi-gear"></i>Justificativas</span>
    </a>

</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span><i class="bi bi-gear"></i>Configurações</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="buttons.html">Minha empresa</a>
        </div>
    </div>
</li>