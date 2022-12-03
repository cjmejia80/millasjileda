<?php 
require_once("../../model/conexion.php");
require_once("../../model/validarSesion.php");
require_once("../../controller/seguridadusuario.php");
require_once("../../controller/verperfilUsuario.php");
require_once("../../model/consultasUsuario.php");
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<?php 
  mostrarPerfilUser();
?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              
              <p>
                
              Menú
                <i class="nav-icon right fas fa-angle-left"></i>
                
              </p>
            </a>
            
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="verPlanillaUsuario.php" class="nav-link">
                  <i class="nav-icon fas fa-user-plus nav-icon"></i>
                  <p>Ver Planillas</p>
                </a>
              </li>
              
            </ul>
           
          </li>

          <li class="nav-item">
            
               
                </a>
              </li>
              
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>