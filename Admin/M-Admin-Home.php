<!DOCTYPE html>
<html>
<meta name="viewport" content="width=90% , intial-scale=1">
<?php include('./Temp/css.php'); ?>

<head>
  <title>Admin Home Page</title>

</head>
<body>
<div id="wrapper"> 
   <div class="shell">
        
          <?php include('./Temp/logo.php'); ?>

           <!--Header & Navigation Bar Page-->
            <?php include('./Temp/header.php'); ?>
       

             <!---Main Content of Page Begins-->
                          <div class="main">
                              <section class="content">
                              <div class="post">
                               <div class="post-inner">
                              <header>
                                <h2 style="color: yellow; width: 98%;">
                                  <marquee class="marquee" >  Welcome to Al-Ameen Institute of Information Sciences.. Hosur Road Bangalore 560-027</marquee></h2>
                                      
                              <div class="cl">&nbsp;</div>
                              </header>

                              <div class="content-area">
           
                              <div class="row1">
  		             		       <div class="column1">
    				          
                                <?php include('./EmployeePages/Admin-HomePage.php'); ?>                 
  				                  </div>
			              </div>
                  </div>
              </div>
              </div>
            </section>
      </div>
  <!-- Side Bar Page -->     
<?php include('./temp/sidebar.php');?>
<!-- footer Page --> 
 <?php include('./temp/footer.php'); ?>
</div>
</div>
</body>
</html>
