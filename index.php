      <!-- Content -->
      <?php
      if (isset($_GET['x']) && $_GET['x'] == 'home') {
        $page = "home.php";
        include "main.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'order') {
        $page = "order.php";
        include "main.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'product') {
        $page = "product.php";
        include "main.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'customer') {
        $page = "customer.php";
        include "main.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'report') {
        $page = "report.php";
        include "main.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'login') {
        include "login.php";
      } else if (isset($_GET['x']) && $_GET['x'] == 'logout') {
        include "proses/proses_logout.php";
      } else {
        include "main.php";
      }
      ?>
      <!-- End Content -->