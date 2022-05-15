<div class="container-fluid">
  <div class="alert alert-primary" role="alert">
    <i class="fas fa-university"></i> Jurusan Form
  </div>

  <form method="POST" action="<?php echo base_url('administrator/jurusan/input_aksi') ?>">
    <div class="form-group">
      <label for="kode_jurusan">Kode Jurusan</label>
      <input 
      type="text" 
      name="kode_jurusan"
      class="form-control"
      placeholder="Masukkan Kode Jurusan">
      <?php echo form_error('kode_jurusan', '<div class="text-danger small" ml-3>') ?>
    </div>

    <div class="form-group">
      <label for="nama_jurusan">Nama Jurusan</label>
      <input 
      type="text" 
      name="nama_jurusan"
      class="form-control"
      placeholder="Masukkan Nama Jurusan">
      <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>