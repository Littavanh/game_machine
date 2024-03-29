  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="mn_home">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">

                      <li class="breadcrumb-item active mn_home">Dashboard</li>
                  </ol>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=master/deviceType';"
                  style="cursor:pointer">
                  <div class="info-box">
                      <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-boxes"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text mn_master"></span>
                          <span class="info-box-number mn_deviceType">

                          </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </div>
              <!-- ./col -->

              <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=device/device';"
                  style="cursor:pointer">
                  <div class="info-box">
                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list-alt"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text mn_device"></span>
                          <span class="info-box-number mn_addNewDevice">

                          </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </div>
              <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=device/approveAddNewDevice';"
                  style="cursor:pointer">
                  <div class="info-box">
                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text mn_device"></span>
                          <span class="info-box-number mn_approveAddNewDevice">

                          </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </div>
              <!-- ./col -->
              <div class="col-12 col-sm-6 col-md-3" onclick="location.href='index.php?d=report/device';"
                  style="cursor:pointer">
                  <div class="info-box">
                      <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-chart-bar"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text mn_report"></span>
                          <span class="info-box-number mn_reportDevice">

                          </span>
                      </div>
                      <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </div>
              <!-- ./col -->

              <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->

          <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->