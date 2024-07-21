<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter 4</title>
    <link href=" <?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link  rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
</head>
<body>
   <div class="app">
   <?= $this->include('layouts/inc/navbar.php') ?>
   <?= $this->renderSection('content') ?>
   </div> 





<script src=" <?= base_url('assets/js/jquery-3.5.1.js'); ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<!-- using datatables.net , CDN LINK-->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    $(document).ready( function () {
    $('#mydatatable').DataTable();
} );
</script>
<!-- <script>
    $(document).ready(function () {
        <?php if(session()->getFlashdata('status')){
            
         ?>
        alertify.set('notifier','position', 'top-right');
        alertify.success("<?= session()->getFlashdata('status') ?>");
        <?php } ?>
  
    });
</script> -->


<!-- sweets alerts -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        
        <?php if(session()->getFlashdata('status')){?>
            swal({
  title: "<?= session()->getFlashdata('status') ?>",
  text: "<?= session()->getFlashdata('status_text') ?>",
  icon: "<?= session()->getFlashdata('status_icon') ?>",
  button: "OK",
});
            <?php } ?>
            
            
    });
</script>

<?= $this->renderSection('scripts') ?>
    
</body>
</html> 