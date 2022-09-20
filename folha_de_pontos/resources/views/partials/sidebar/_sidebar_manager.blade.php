     <li class="nav-item">
         <a class="nav-link" href="{{ route('manager.dashboard') }}">
             <i class="bi bi-house-door-fill"></i>
             <span>Início</span>
         </a>
     </li>

     <li class="nav-item">
         <a class="nav-link collapsed" href="{{ route('manager.profile') }}">
             <i class="bi bi-person-fill"></i>
             <span>Perfil</span>
         </a>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#">
             <i class="bi bi-emoji-smile-fill"></i>
             <span>Justificativas</span>
         </a>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             <i class="bi bi-people-fill"></i>
             <span>Funcionários</span>
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
             <i class="bi bi-file-earmark-text-fill"></i>
             <span>Relatórios</span>
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
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
             <i class="bi bi-gear-fill"></i>
             <span>Configurações</span>
         </a>
         <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Opções</h6>
                 <a class="collapse-item" href="{{ route('manager.show.business') }}">Minha empresa</a>
             </div>
         </div>
     </li>
     </div>