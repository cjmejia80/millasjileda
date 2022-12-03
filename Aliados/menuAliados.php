<?php 
require_once("../../model/conexion.php");
require_once("../../model/validarSesion.php");
require_once("../../controller/seguridadaliados.php");
require_once("../../controller/verPerfilaliados.php");
require_once("../../model/consultasAliados.php");
?>



<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php

  mostrarPerfil();

  ?>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="nav-icon fab fa-wpforms"></i>
              
              <p>
                
                Planillas
                <i class="nav-icon right fas fa-angle-left"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Aliados/registrarPlanilla.php" class="nav-link">
                <i class="nav-icon fas fa-user-plus nav-icon"></i>
                  <p>Registrar Planilla</p>
                </a>
              </li>
                       
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="verPlanillaAliado.php" class="nav-link">
                <i class="nav-icon fas fa-eye nav-icon"></i>
                  <p>Ver Planillas</p>
                </a>
              </li>
              
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="verTransferenciaAliados.php" class="nav-link">
                <i class="nav-icon fas fa-random"></i>
                  <p>Planillas Transferidas</p>
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