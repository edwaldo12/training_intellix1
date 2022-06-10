<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layouts/header') ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php $this->load->view('layouts/script') ?>
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src=<?= base_url("adminlte/ecentrix.png") ?> alt="AdminLTELogo" height="60" width="60">
    </div>

    <?php $this->load->view('layouts/navbar') ?>
    <?php $this->load->view('layouts/sidebar') ?>

    <div class="content-wrapper">
      <?php
      isset($_view) ? $this->load->view($_view) : "";
      ?>
    </div>

  </div>
  <?php $this->load->view('layouts/footer') ?>
</body>

</html>