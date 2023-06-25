 <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       
                        <div class="form-inline">
                            
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <?php
$ret1=mysqli_query($con,"select ID,FullName from tblapplication where Status is null");
$num=mysqli_num_rows($ret1);

?>   
                                <span class="count bg-danger"><?php echo $num;?></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                               
                
                              
                                <?php if($num>0){
while($result=mysqli_fetch_array($ret1))
{
            ?>
         <p>  <a class="dropdown-item" href="view-application-details.php?viewid=<?php echo $result['ID'];?>">  <i class="fa fa-check"></i>New Application Received from <?php echo $result['FullName'];?></a></p> 
<?php }} else {?>
    <a class="dropdown-item" href="all-application.php">No New Application Received</a>
        <?php } ?>
                        
                                
                                
                            </div>
                        </div>
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <?php
$ret2=mysqli_query($con,"select ID,FullName from tblenquiry where Is_Read is null");
$num1=mysqli_num_rows($ret2);

?>
                                <span class="count bg-primary"><?php echo $num1;?></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                              
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/user.png"></span>
                                <span class="message media-body">
                                    
                                        <?php if($num1>0){
while($result1=mysqli_fetch_array($ret2))
{
            ?>
            <a class="dropdown-item" href="view-user-enquiry.php?enqid=<?php echo $result1['ID'];?>">New Enquiry Received from <?php echo $result1['FullName'];?></a>
<?php }} else {?>
    <a class="dropdown-item" href="#">No New Enquiry Received</a>
        <?php } ?>
                                </span>
                            </a>
                             
                            </div>
                        </div>
                        <div class="form-inline">
                            
                        </div>

                      
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="adminprofile.php"><i class="fa fa-user"></i> My Profile</a>

                            

                            <a class="nav-link" href="change-password.php"><i class="fa fa-cog"></i>Change Password</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header>