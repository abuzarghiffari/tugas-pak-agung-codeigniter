<div class="container-fluid">
  <div class="alert alert-primary" role="alert">
    <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>
  <div class="alert alert-primary" role="alert">
    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat Datang <strong><?php echo $username; ?></strong> di Sistem Informasi Akademik SMK Negeri 69 Jakarta, Anda Login sebagai <strong><?php echo $level; ?></strong></p>
    <hr>
      <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-cogs"></i> Control Panel
    </button>
  </div>

  

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Mahasiswa</p>
              </a>
              <i class="fas fa-3x fa-user-graduate"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Tahun Akademik</p>
              </a>
              <i class="fas fa-3x fa-calendar-alt"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">KRS</p>
              </a>
              <i class="fas fa-3x fa-edit"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">KS</p>
              </a>
              <i class="fas fa-3x fa-file-alt"></i>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Input Nilai</p>
              </a>
              <i class="fas fa-3x fa-sort-numeric-down"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Cetak Transkrip</p>
              </a>
              <i class="fas fa-3x fa-print"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Kategori</p>
              </a>
              <i class="fas fa-3x fa-list-ul"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Info Kampus</p>
              </a>
              <i class="fas fa-3x fa-bullhorn"></i>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Identitas</p>
              </a>
              <i class="fas fa-3x fa-id-card-alt"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Tentang Kampus</p>
              </a>
              <i class="fas fa-3x fa-info"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Fasilitas</p>
              </a>
              <i class="fas fa-3x fa-laptop"></i>
            </div>
            <div class="col-md-3 text-primary text-center">
              <a href="<?php echo base_url('administrator/guru'); ?>">
                <p class="nav-link small text-primary">Galeri</p>
              </a>
              <i class="fas fa-3x fa-images"></i>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>