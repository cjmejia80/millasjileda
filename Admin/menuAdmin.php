<?php
require_once("../../model/conexion.php");
require_once("../../model/validarSesion.php");
require_once("../../model/consultasAdmin.php");
require_once("../../controller/seguridadadmin.php");
require_once("../../controller/verPerfilAdmin.php");
?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     <?php

  mostrarPerfil();

  ?>
 
 <!-- Sidebar user panel (optional) -->
      
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
              <i class="nav-icon fas fa-users"></i>
              
              <p>
                
                Usuarios
                <i class="right fas fa-angle-left"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarUser.php" class="nav-link">
                  <i class="nav-icon fas fa-user-plus nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verUsers.php" class="nav-link">
                  <i class="nav-icon fas fa-eye nav-icon"></i>
                  <p>Ver</p>
                </a>
              </li>
              <li class="nav-item">
               
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-handshake"></i>
              <p>
                Aliados
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registrarAliado.php" class="nav-link">
                <i class="nav-icon fas fa-user-plus nav-icon"></i>
                  <p>Registrar</p>
                </a>
                <li class="nav-item">
                <a href="verAliado.php" class="nav-link">
                  <i class="nav-icon fas fa-eye nav-icon"></i>
                  <p>Ver</p>
                </a>
              </li>
              </li>
              
           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fab fa-wpforms"></i>
              <p>
                Planillas
                <i class=" right fas fa-angle-left"></i>
               
              </p>
              
         </a>
         
            <ul class="nav nav-treeview">
             </li>

              <li class="nav-item">
                <a href="verPlanilla.php" class="nav-link">
                <i class="nav-icon fas fa-eye nav-icon"></i>
                  <p>Ver</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-random"></i>
              <p>
                Transferencia
                <i class="right fas fa-angle-left"> </i>
              </p>
               </a>
               <ul class="nav nav-treeview">
                </a>
              </li>
              <li class="nav-item">
                <a href="verTransferencia.php" class="nav-link">
                <i class="nav-icon fas fa-eye nav-icon"></i>
                  <p>Ver</p>
                </a>
              </li>
           
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>