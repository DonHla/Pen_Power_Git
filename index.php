
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
        <section id="content" class="table-layout animated fadeIn">

            <!-- -------------- Column Center -------------- -->
            <div class="chute chute-center">

  <?php include('block\poll.html');?>

  <?php include('block\footer.html');?>

    </section>
    <!-- -------------- /Main Wrapper -------------- -->

<?php include('block\jquery.html');?>
</div>
<!-- -------------- /Body Wrap  -------------- -->


</body>

</html>
