<div class="container-fluid">
  <div class="alert alert-primary" role="alert">
    <i class="fa-solid fa-book"></i> Program Studi
  </div>

  <?php echo $this->session->flashdata('pesan') ?>
  <?php echo anchor('administrator/prodi/tambah_prodi',
  '<button class="btn btn-sm btn-primary mb-3">
    <i class="fas fa-plus"></i> Prodi
  </button>
  ') ?>

  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>No</th>
      <th>Kode Prodi</th>
      <th>Nama Prodi</th>
      <th>Nama Jurusan</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php 
    $no = 1;
    foreach ($prodi as $prd) : ?>
    <tr>
      <td width="20px"><?php echo $no++ ?></td>
      <td><?php echo $prd->kode_prodi ?></td>
      <td><?php echo $prd->nama_prodi ?></td>
      <td><?php echo $prd->nama_jurusan ?></td>
      <td>
        <?php echo anchor('administrator/prodi/update/'.$prd->id_prodi , 
        '<div class="btn btn-sm btn-primary">
          <i class="fa fa-edit"></i>
        </div>
        ') ?>
        <?php echo anchor('administrator/prodi/delete/'.$prd->id_prodi , 
        '<div class="btn btn-sm btn-danger">
          <i class="fa fa-trash"></i>
        </div>
        ') ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>