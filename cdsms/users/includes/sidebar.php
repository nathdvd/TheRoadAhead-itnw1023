<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
<?php
$uid=$_SESSION['cdsmsuid'];
$ret=mysqli_query($con,"select FirstName,LastName from tblregusers where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FirstName']

?>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="dashboard.php"><?php echo $name; ?></a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="apply.php"> <i class="menu-icon fa fa-tasks"></i>Apply </a>
                    </li>
                    <li class="active">
                        <a href="history-application.php"> <i class="menu-icon fa fa-tasks"></i></i>History of Application </a>
                    </li>



                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>