 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
     <div class="sidebar-brand-icon">
       <img src="<?= base_url() ?>assets/img/core-img/untirta.png" width="30" alt="">
     </div>
     <div class="sidebar-brand-text mx-3">Sisfo Alumni</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item <?php if ($this->uri->segment(1) == 'dashboard') echo 'active' ?>">
     <a class="nav-link" href="<?= base_url('dashboard') ?>">
       <i class="fas fa-fw fa-tachometer-alt"></i>
       <span>Dashboard</span></a>
   </li>

   <li class="nav-item <?php if ($this->uri->segment(1) == 'prodi') echo 'active' ?>">
     <a class="nav-link" href="<?= base_url('prodi') ?>">
       <i class="fas fa-fw fa-user"></i>
       <span>Info Kaprodi</span></a>
   </li>

   <li class="nav-item <?php if ($this->uri->segment(1) == 'angkatan') echo 'active' ?>">
     <a class="nav-link" href="<?= base_url('angkatan') ?>">
       <i class="fas fa-fw fa-info"></i>
       <span>Info Angkatan</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
     Menu
   </div>

   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item <?php if ($this->uri->segment(1) == 'service') echo 'active' ?>">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
       <i class="fas fa-fw fa-cog"></i>
       <span>Service</span>
     </a>
     <div id="collapseTwo" class="collapse <?php if ($this->uri->segment(1) == 'service') echo 'show' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
       <div class="bg-white py-2 collapse-inner rounded">
         <h6 class="collapse-header">Info :</h6>
         <!-- jika dia adalah kaporidi maka hilangkan menu tracer study, profile, users -->
         <?php if($this->session->userdata('role_id') == 3): ?>

          <!-- jika dia adalah alumni maka hilangkan menu users -->
          <?php elseif($this->session->userdata('role_id') == 4): ?>

              <a class="collapse-item <?php if ($this->uri->segment(2) == 'tracer') echo 'active' ?>" href="<?= base_url('service/tracer') ?>"><i class="fas fa-fw fa-book mr-1"></i> Pertanyaan</a>

              <a class="collapse-item <?php if ($this->uri->segment(2) == 'list_tracer') echo 'active' ?>" href="<?= base_url('service/list_tracer') ?>"><i class="fas fa-fw fa-book mr-1"></i> Tracer Study</a>

             <a class="collapse-item <?php if ($this->uri->segment(2) == 'profile') echo 'active' ?>" href="<?= base_url('service/profile') ?>"><i class="fas fa-fw fa-user mr-1"></i> Profile</a>

          <?php else: ?>
            <!-- jika dia admin maka dapat mengakses seluruh menu -->
         <a class="collapse-item <?php if ($this->uri->segment(2) == 'tracer') echo 'active' ?>" href="<?= base_url('service/tracer') ?>"><i class="fas fa-fw fa-book mr-1"></i> Pertanyaan</a>

         <a class="collapse-item <?php if ($this->uri->segment(2) == 'list_tracer') echo 'active' ?>" href="<?= base_url('service/list_tracer') ?>"><i class="fas fa-fw fa-book mr-1"></i> Tracer Study</a>
          
          <a class="collapse-item <?php if ($this->uri->segment(2) == 'user') echo 'active' ?>" href="<?= base_url('service/user') ?>"><i class="fas fa-fw fa-users mr-1"></i> Users</a>

         <a class="collapse-item <?php if ($this->uri->segment(2) == 'profile') echo 'active' ?>" href="<?= base_url('service/profile') ?>"><i class="fas fa-fw fa-user mr-1"></i> Profile</a>
          <?php endif; ?>

         <a class="collapse-item <?php if ($this->uri->segment(2) == 'loker') echo 'active' ?>" href="<?= base_url('service/loker') ?>"><i class="fas fa-fw fa-info-circle mr-1"></i> Loker</a>

         <a class="collapse-item <?php if ($this->uri->segment(2) == 'event') echo 'active' ?>" href="<?= base_url('service/event') ?>"><i class="fas fa-fw fa-calendar mr-1"></i> Event</a>

         <a class="collapse-item <?php if ($this->uri->segment(2) == 'testimoni') echo 'active' ?>" href="<?= base_url('service/testimoni') ?>"><i class="fas fa-fw fa-comment mr-1"></i> Testimoni</a>

         <a class="collapse-item <?php if ($this->uri->segment(2) == 'kritik_dan_saran') echo 'active' ?>" href="<?= base_url('service/kritik_dan_saran') ?>"><i class="fas fa-fw fa-envelope-open mr-1"></i> Kritik dan Saran</a>
       </div>
     </div>
   </li>

   <!-- Nav Item - Utilities Collapse Menu -->
   <!-- jika dia adalah alumni maka hanya tampilkan data jurnal dari modul data master -->
    <?php if($this->session->userdata('role_id') == 4): ?>

      <li class="nav-item <?php if ($this->uri->segment(2) == 'jurnal') echo 'active' ?>">
       <a class="nav-link" href="<?= base_url('data/jurnal') ?>">
         <i class="fas fa-fw fa-car"></i>
         <span>Data Jurnal</span></a>
     </li>

   <!-- Jika di adalah kaprodi maka hapus modul data master dan tampilkan hanya data jurnal dan data tracer study -->
    <?php elseif($this->session->userdata('role_id') == 3): ?>
      <li class="nav-item <?php if ($this->uri->segment(2) == 'jurnal') echo 'active' ?>">
         <a class="nav-link" href="<?= base_url('data/jurnal') ?>">
           <i class="fas fa-fw fa-car"></i>
           <span>Data Jurnal</span></a>
       </li>
       <li class="nav-item <?php if ($this->uri->segment(2) == 'tracer_study') echo 'active' ?>">
         <a class="nav-link" href="<?= base_url('data/tracer_study') ?>">
           <i class="fas fa-fw fa-car"></i>
           <span>Data Tracer Study</span></a>
       </li>

    <?php else: ?>
      <!-- admin -->
       <li class="nav-item <?php if ($this->uri->segment(1) == 'data') echo 'active' ?>">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
           <i class="fas fa-fw fa-database"></i>
           <span>Data Master</span>
         </a>
         <div id="collapseUtilities" class="collapse <?php if ($this->uri->segment(1) == 'data') echo 'show' ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item <?php if ($this->uri->segment(2) == 'alumni') echo 'active' ?>" href="<?= base_url('data/alumni') ?>">Data Alumni</a>

             <a class="collapse-item <?php if ($this->uri->segment(2) == 'banner') echo 'active' ?>" href="<?= base_url('data/banner') ?>">Data Banner</a>

             <a class="collapse-item <?php if ($this->uri->segment(2) == 'jurnal') echo 'active' ?>" href="<?= base_url('data/jurnal') ?>">Data Jurnal</a>

             <a class="collapse-item <?php if ($this->uri->segment(2) == 'kuesioner') echo 'active' ?>" href="<?= base_url('data/kuesioner') ?>">Data Kuesioner</a>

             <a class="collapse-item <?php if ($this->uri->segment(2) == 'tracer_study') echo 'active' ?>" href="<?= base_url('data/tracer_study') ?>">Data Tracer Study</a>
           </div>
         </div>
       </li>
    <?php endif; ?>

   <li class="nav-item <?php if ($this->uri->segment(1) == 'ganti_password') echo 'active' ?>">
     <a class="nav-link" href="<?= base_url('ganti_password') ?>">
       <i class="fas fa-fw fa-key"></i>
       <span>Ganti Password</span></a>
   </li>

   <li class="nav-item">
     <a class="nav-link" href="<?= base_url('auth/logout') ?>">
       <i class="fas fa-fw fa-sign-out-alt"></i>
       <span>Logout</span></a>
   </li>

   <li class="nav-item">
     <a class="nav-link" href="<?= base_url('home') ?>">
       <i class="fas fa-fw fa-home"></i>
       <span>Ke Home</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
     <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

 </ul>
 <!-- End of Sidebar -->