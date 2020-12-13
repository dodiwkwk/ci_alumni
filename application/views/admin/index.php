  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800 font-weight-bold"><?= $title; ?></h1>

         <!-- Donut Chart -->
           <div class="row">
             <div class="col-md-8">
              <div class="row">

                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Alumni</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($alumni) ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Lowongan Kerja</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($lowongan) ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-info fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jurnal</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($jurnal) ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-car fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              
              <div class="card">
                <div class="card-body shadow pt-3 pb-3">
                  <h3>Selamat Datang, <?= $this->session->userdata('nama') ?></h3>
                  <p>Sistem informasi alumni adalah aplikasi berbasis website, untuk mengelola data alumni, seperti jumlah alumni pada prodi tertentu, informasi lowongan kerja, testimoni alumni terhadap pembelajaran kampus selama masa perkuliahan dan informasi kegiatan alumni</p>
                </div>
              </div>
                

             </div>
             <div class="col-md-4">
               <div class="card shadow">
                  <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Kuesioner Chart</h6>  
                  </div>
                  <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                      <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                      <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Sudah
                      </span>
                      <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Belum
                      </span>
                    </div>
                  </div>
               </div>
             </div>
              <input type="hidden" id="sudah" value="<?= count($sudah); ?>">
              <input type="hidden" id="belum" value="<?= count($belum); ?>">
           </div>   
          </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->