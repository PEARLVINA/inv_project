<nav class="navbar navbar-dark bg-dark">
  <a href="header.php" class="navbar-brand" 
          style="text-align:left;  font-size:20px; color: white;">  Inventory System </a>

<div class="container">
              <div class="navbar-header" >
                <ul class="nav mr-auto">
                </ul>
              </div>
            
        <?php
          if (isset($_SESSION["userid"])) {
            ?>
            <li class="nav-item active">
              <a class="nav-item" href="logout.php" style="color: white; font-size: 16px;"><i class="fa fa-user">&nbsp;</i>Logout</a>
            </li>
       
            <?php
          }
        ?>
        
   
  </div>
</nav>