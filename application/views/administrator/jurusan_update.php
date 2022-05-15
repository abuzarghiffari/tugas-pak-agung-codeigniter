<div class="container-fluid">
  <div class="alert alert-primary" role="alert">
    <i class="fas fa-university"></i> Jurusan Update
  </div>

  <?php foreach($jurusan as $jrs) : ?>
    <form method="POST" action="<?php echo base_url('administrator/jurusan/update_aksi') ?>">
      <div class="form-group">
        <label for="kode_jurusan">Kode Jurusan</label>
        <input 
        type="hidden" 
        name="id_jurusan" 
        value="<?php echo $jrs->id_jurusan ?>">
        <input 
        type="text" 
        name="kode_jurusan"
        class="form-control"
        value="<?php echo $jrs->kode_jurusan ?>">
      </div>
      <div class="form-group">
        <label for="nama_jurusan">Nama Jurusan</label>
        <input 
        type="text" 
        name="nama_jurusan"
        class="form-control"
        value="<?php echo $jrs->nama_jurusan ?>">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  <?php endforeach ?>
</div>