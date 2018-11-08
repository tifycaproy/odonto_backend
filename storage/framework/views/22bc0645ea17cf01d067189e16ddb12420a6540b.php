<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo e(Auth::user()->name); ?></p>
                  <div>
                    <small class="designation text-muted">
                       <?php if(Auth::user()->hasRole('admin')): ?>
                        Administrator
                      <?php else: ?>
                          usuario
                      <?php endif; ?>
                    </small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('home')); ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Inicio</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('pacientes')); ?>">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Pacientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('citas')); ?>">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Citas</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Caja</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Configuración</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#">Usuarios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Doctores</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">General</a>
                </li>
              </ul>
            </div>
          </li>
        
        </ul>
      </nav>