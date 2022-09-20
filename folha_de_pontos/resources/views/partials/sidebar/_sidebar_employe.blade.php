<li class="nav-item">
    <a class="nav-link" href=""><span>Inicio</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('employe.profile') }}"><span>Perfil</span></a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-cog"></i>
        <span>Justificativas</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('employe.justifications.create') }}">Nova justificativa</a>
            <a class="collapse-item" href="cards.html">Minhas justificativas</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href=""><span>Histórico de pontos</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Sair">
    </form>
</li>