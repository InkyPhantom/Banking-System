<?php
include "templates/database_conn.php";
 $sql5="SELECT branch_mgr_contact from branch where branch_id in (select branch_id from customers where userid=$userid)";
  $result5 = mysqli_query($conn,$sql5);
  $accounts5=mysqli_fetch_array($result5, MYSQLI_ASSOC);
   ?>

   <footer class="section">
   	<div class ="container">
   	<h3 class="center black-text">for further details contact your branch manager: <?php echo htmlspecialchars($accounts5['branch_mgr_contact']); ?></h3>
	<h6 class=" center black-text">Banking Project</h6>
</div>
</footer>
</body>