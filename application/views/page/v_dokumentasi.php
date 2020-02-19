   <!-- Page Content -->
  <div class="container" style="margin-top: 100px">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Dokumentasi KAI
      <small>Tahun <?= $_GET['tahun'] ?></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo site_url('Home') ?>">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="<?php echo base_url('Dokumentasi?tahun='.$_GET['tahun']) ?>"><?= $_GET['tahun'] ?></a>
      </li>
    </ol>

    <div class="row">
      <?php foreach ($foto_dokumentasi as $fd) {
        $nama_file = $fd->dokumentasi_file;
        $str = explode("-", $nama_file);
        $nama_perusahaan = $str[0];
        $tahun = $str[1];
        $tempat_kunjung = $fd->dokumentasi_tempat;
       ?>
        <div class="col-lg-3 col-sm-3 col-md-3 portfolio-item">
          <div class="card h-100">
            <a href="<?php echo base_url().'assets/img/'.$tahun.'/'.$tempat_kunjung.'/'.$nama_file ?>"><img class="card-img-top" src="<?php echo base_url().'assets/img/'.$tahun.'/'.$tempat_kunjung.'/'.$nama_file ?>" alt="<?= $nama_file ?>"></a>
            <div class="card-body">
              <h4 class="card-title">
                <?= $nama_perusahaan."-".$tempat_kunjung ?>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <!-- /.row -->

    
    <ul class="pagination">
      <?php 
      $page = ceil($count_image / 10);
      echo $count_image;
      for ($i = 1; $i == $page; $i++) { ?>
        <li id="<?php echo $i ?>" ><a href="<?php echo base_url('Dokumentasi?tahun='.$_GET['tahun'].'&page='.$i) ?>"><?= $i ?></a></li>
      <?php } ?>
    </ul>

    </div>


    <script type="text/javascript">
      var li_id = document.getElementById("<?php echo $_GET['page'] ?>");
      li_id.classList.add("active");
    </script>