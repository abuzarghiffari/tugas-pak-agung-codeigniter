<div class="container-fluid">
  <div class="alert alert-primary" role="alert">
    <i class="fas fa-university"></i> Prodi Form
  </div>

  <form method="POST" action="<?php echo base_url('administrator/prodi/tambah_prodi_aksi') ?>">
    <div class="form-group">
      <label for="kode_prodi">Kode Prodi</label>
      <input 
      type="text" 
      name="kode_prodi"
      class="form-control"
      placeholder="Masukkan Kode Prodi">
      <?php echo form_error('kode_prodi', '<div class="text-danger small" ml-3>') ?>
    </div>

    <div class="form-group">
      <label for="nama_prodi">Nama Prodi</label>
      <input 
      type="text" 
      name="nama_prodi"
      class="form-control"
      placeholder="Masukkan Nama Prodi">
      <?php echo form_error('nama_prodi', '<div class="text-danger small" ml-3>') ?>
    </div>

    <div class="form-group">
      <label for="nama_prodi">Nama Jurusan</label>
      <select name="nama_jurusan" class="form-control" id="">
        <option value="">-- Pilih Jurusan --</option>
        <?php foreach ($jurusan as $jur) : ?>
          <option value="<?php echo $jur->nama_jurusan ?>"><?php echo $jur->nama_jurusan ?></option>
        <?php endforeach; ?>
      </select>
      <?php echo form_error('nama_jurusan', '<div class="text-danger small" ml-3>') ?>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>