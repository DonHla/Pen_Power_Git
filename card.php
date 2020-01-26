
<?php include('block\head.html');?>
<body class="dashboard-page">

  <!-- <script src="assets\miniscript\shop.js"></script> -->
<!-- -------------- Body Wrap  -------------- -->
<div id="main">

  <?php include('block\header.html');?>

  <!-- -------------- Sidebar  -------------- -->
  <aside id="sidebar_left" class="nano nano-light affix">

      <!-- -------------- Sidebar Left Wrapper  -------------- -->
      <div class="sidebar-left-content nano-content">

<?php include('block\personmenu.html');?>

  <?php include('block\leftmenu.html');?>

    </aside>
    <!-- -------------- /Sidebar -------------- -->

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">


  <?php include('block\help.html');?>


        <!-- -------------- Content -------------- -->

          <section class="a">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-9 col-xl-6 a1"> <h4>ООО «Брешь» <h4>  <?php include('char.php');?></div>
                <div class="col-md-9 col-xl-6 a2"><h4>ООО «Брешь <h4> <h4>Круговая диаграмма <h4><?php include('block\poll.html');?>
                <img src="assets\icon\ciclo.png"></div>
              <!-- <div class="col-md-6 col-xl-4 a3">А3</div> -->

              </div>
            </div>
          </section>


            <!-- -------------- Column Center -------------- -->


    </section>
    </div>
    <!-- -------------- /Main Wrapper -------------- -->
  <?php include('block\footer.html');?>
<?php include('block\jquery.html');?>

<!-- -------------- /Body Wrap  -------------- -->


</body>

</html>
