<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>IoT Data Management System</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">IoT Data </a>
      
<ul class="nav navbar-nav ml-auto">
    <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list"></i>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks

              <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a>
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-secondary">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
<button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
    <span class="navbar-toggler-icon"></span>
  </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item"> </li>
            
            <li class="nav-item"> </li>
            <li class="nav-item"> </li>
            
            <li class="nav-item nav-dropdown">
  <ul class="nav-dropdown-items">
    <li class="nav-item">
      <a class="nav-link" href="base/breadcrumb.html">
        <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/cards.html">
        <i class="nav-icon icon-puzzle"></i> Cards</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/carousel.html">
        <i class="nav-icon icon-puzzle"></i> Carousel</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/collapse.html">
        <i class="nav-icon icon-puzzle"></i> Collapse</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/forms.html">
        <i class="nav-icon icon-puzzle"></i> Forms</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/jumbotron.html">
        <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/list-group.html">
        <i class="nav-icon icon-puzzle"></i> List group</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/navs.html">
        <i class="nav-icon icon-puzzle"></i> Navs</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/pagination.html">
        <i class="nav-icon icon-puzzle"></i> Pagination</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/popovers.html">
        <i class="nav-icon icon-puzzle"></i> Popovers</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/progress.html">
        <i class="nav-icon icon-puzzle"></i> Progress</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/scrollspy.html">
        <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/switches.html">
        <i class="nav-icon icon-puzzle"></i> Switches</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/tables.html">
        <i class="nav-icon icon-puzzle"></i> Tables</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/tabs.html">
        <i class="nav-icon icon-puzzle"></i> Tabs</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="base/tooltips.html">
        <i class="nav-icon icon-puzzle"></i> Tooltips</a>
      </li>
    </ul>
            </li>
            <li class="nav-item nav-dropdown">
<ul class="nav-dropdown-items">
            <li class="nav-item">
                  <a class="nav-link" href="buttons/buttons.html">
                    <i class="nav-icon icon-cursor"></i> Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/button-group.html">
                    <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/dropdowns.html">
                    <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/brand-buttons.html">
                    <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item"> </li>
            <li class="nav-item nav-dropdown">
<ul class="nav-dropdown-items">
            <li class="nav-item">
                  <a class="nav-link" href="icons/coreui-icons.html">
                    <i class="nav-icon icon-star"></i> CoreUI Icons
                    <span class="badge badge-success">NEW</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/flags.html">
                    <i class="nav-icon icon-star"></i> Flags</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/font-awesome.html">
                    <i class="nav-icon icon-star"></i> Font Awesome
                    <span class="badge badge-secondary">4.7</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/simple-line-icons.html">
                    <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
<ul class="nav-dropdown-items">
            <li class="nav-item">
                  <a class="nav-link" href="notifications/alerts.html">
                    <i class="nav-icon icon-bell"></i> Alerts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/badge.html">
                    <i class="nav-icon icon-bell"></i> Badge</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/modals.html">
                    <i class="nav-icon icon-bell"></i> Modals</a>
                </li>
              </ul>
            </li>
            <li class="nav-item"> </li>
            <li class="divider"></li>
            
            <li class="nav-item nav-dropdown">
  <ul class="nav-dropdown-items">
    <li class="nav-item">
      <a class="nav-link" href="login.html" target="_top">
        <i class="nav-icon icon-star"></i> Login</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="register.html" target="_top">
        <i class="nav-icon icon-star"></i> Register</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="404.html" target="_top">
        <i class="nav-icon icon-star"></i> Error 404</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="500.html" target="_top">
        <i class="nav-icon icon-star"></i> Error 500</a>
      </li>
    </ul>
            </li>
            <li class="nav-item mt-auto"> <div class="nav-link nav-link-success" target="_top"> <form class="form-horizontal" action="UserReport_Export.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="">
                            <div class="">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>
                   </div>                    
            </form>  </div> </li>
            <li class="nav-item">
              <a class="nav-link nav-link-danger" href="index.php?logout='1'"target="_top">
                <i class="nav-icon icon-layers"></i> 
                <strong>Log Out</strong>
              </a>
            </li>
          </ul>
        </nav>
</div>
      <main class="main">
        <!-- Breadcrumb-->
        
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row"> <!-- /.col-->              <!-- /.col-->
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3"> </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0">Data&nbsp;Graph</h4>
                  </div>
                  <!-- /.col-->                  <!-- /.col-->
                </div>
                <!-- /.row-->
                					  <?php
$filepath = realpath (dirname(__FILE__));
require_once($filepath."/api/dbConnect.php");
$conn = connect();	
 

$sql= ("SELECT *FROM IoTweatherData ORDER BY id desc LIMIT 100;");
		
$result = mysqli_query($conn, $sql);
	
$chart_data = '';
while($row = mysqli_fetch_assoc($result)){
 $chart_data .= "{ id:'".$row["id"]."', mq5:".$row["mq5"].", mq9:".$row["mq9"].", mq135:".$row["mq135"].",temp:".$row["temp"].",hume:".$row["hume"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
                <div class="chart-wrapper" style="height:400px;margin-top:20px;">
                  <div id="chart"></div>
                                            <script>
        Morris.Line({
         element : 'chart',
         data:[<?php echo $chart_data; ?>],
         xkey:'id',
         ykeys:['mq5', 'mq9', 'mq135','temp','hume'],
         labels:['mq5', 'mq9', 'mq135','temp','hume'],
         hideHover:'auto',
         stacked:true
        });
        </script>
                </div>
              </div>
              <div class="card-footer">
                
            </div>
            <!-- /.card-->
				<?php

    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/api/dbConnect.php");
    $conn = connect();

        $sql= ("SELECT MIN(mq5) as mq5L FROM IoTweatherData;");	
        $result = mysqli_query($conn, $sql);
        $a = mysqli_fetch_assoc($result);
        $mq5L = $a['mq5L'];
      
        
        ?>
				
				
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-facebook">
                    <i class="fa fa-facebook">Natural Gas</i>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-1" height="90"></canvas>
                    </div>
                  </div>
                  
                  
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value"><?php echo $mq5L?></div>
                      <div class="text-uppercase text-muted small">&nbsp;</div>
                    </div>
                    <?php
        $sql= ("SELECT MAX(mq5) as mq5H FROM IoTweatherData;");	
        $result = mysqli_query($conn, $sql);
        $a = mysqli_fetch_assoc($result);
        $mq5H = $a['mq5H'];
      
        
        ?>
                    <div>
                      <div class="text-value"><?php echo $mq5H?></div>
                      <div class="text-uppercase text-muted small">&nbsp;</div>
                    </div>
                  </div>
                </div>
              </div>
				
				
              <!-- /.col-->
              <?php
              $sql= ("SELECT MAX(mq9) as mq5l FROM IoTweatherData;");	
        $result = mysqli_query($conn, $sql);
        $a = mysqli_fetch_assoc($result);
        $mq5l = $a['mq5l'];
        $sql= ("SELECT MIN(mq9) as mq5H FROM IoTweatherData;");	
        $result = mysqli_query($conn, $sql);
        $a = mysqli_fetch_assoc($result);
        $mq5H = $a['mq5H'];
        ?>
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-twitter">
                    <i class="fa fa-twitter">Coal Gas</i>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-2" height="90"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value"><?php echo $mq5l?></div>
                      <div class="text-uppercase text-muted small">&nbsp;</div>
                    </div>
                    <div>
                      <div class="text-value"><?php echo $mq5H?></div>
                      <div class="text-uppercase text-muted small">&nbsp;</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
				 <?php
              $sql= ("SELECT MAX(temp) as mq5l FROM IoTweatherData;");	
        $result = mysqli_query($conn, $sql);
        $a = mysqli_fetch_assoc($result);
        $mq5l = $a['mq5l'];
        $sql= ("SELECT MIN(temp) as mq5H FROM IoTweatherData;");	
        $result = mysqli_query($conn, $sql);
        $a = mysqli_fetch_assoc($result);
        $mq5H = $a['mq5H'];
        ?>
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-linkedin">
                    <i class="fa fa-linkedin">Temperature</i>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-3" height="90"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value"><?php echo $mq5H?></div>
                      <div class="text-uppercase text-muted small">&nbsp;</div>
                    </div>
                    <div>
                      <div class="text-value"><?php echo $mq5l?></div>
                      <div class="text-uppercase text-muted small">&nbsp;</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
				 <?php
              $sql= ("SELECT MAX(hume) as mq5l FROM IoTweatherData;");	
        $result = mysqli_query($conn, $sql);
        $a = mysqli_fetch_assoc($result);
        $mq5l = $a['mq5l'];
        $sql= ("SELECT MIN(hume) as mq5H FROM IoTweatherData;");	
        $result = mysqli_query($conn, $sql);
        $a = mysqli_fetch_assoc($result);
        $mq5H = $a['mq5H'];
        ?>
              <div class="col-sm-6 col-lg-3">
                <div class="brand-card">
                  <div class="brand-card-header bg-google-plus">
                    <i class="fa fa-google-plus">Humidity </i>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-4" height="90"></canvas>
                    </div>
                  </div>
                  <div class="brand-card-body">
                    <div>
                      <div class="text-value"><?php echo $mq5H?></div>
                      <div class="text-uppercase text-muted small">&nbsp;</div>
                    </div>
                    <div>
                      <div class="text-value"><?php echo $mq5l?></div>
                      <div class="text-uppercase text-muted small">&nbsp;</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Traffic & Sales</div>
                  <div class="card-body"> <!-- /.row-->
                    <br>
                    <table class="table table-responsive-sm table-hover table-outline mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center">Index</th>
                          <th class="text-center">MQ5</th>
                          <th class="text-center">MQ9</th>
                          <th class="text-center">MQ135</th>
			  <th class="text-center">Temperature</th>
			  <th class="text-center">Humidity</th>
			  <th class="text-center">Dust</th>
                        </tr>
                      </thead>
                      <tbody>
	


    <?php

    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/api/dbConnect.php");
    $conn = connect();

    $sql = "SELECT *FROM IoTweatherData ORDER BY id desc limit 20;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
                $mq5 = $row['mq5'];
                $mq9 = $row['mq9'];
                $mq135 = $row['mq135'];
                $temp = $row['temp'];
                $hume = $row['hume'];
                $time = $row['time'];
		
	?>

	<tr>
	<td class="text-center"><?php echo  $id ;?> </td>
        <td class="text-center"><?php echo  $mq5 ;?> </td>
        <td class="text-center"><?php echo  $mq9 ;?> </td>
        <td class="text-center"><?php echo  $mq135 ;?> </td>
        <td class="text-center"><?php echo  $temp ;?> </td>
        <td class="text-center"><?php echo  $hume ;?> </td>
        <td class="text-center"><?php echo  $time ;?> </td>
        
	</tr>
<?php 
}
	}
?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>
      </main>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
              <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                <div class="avatar float-right">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                </div>
                <div>Meeting with
                  <strong>Lucas</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-info">
                <div class="avatar float-right">
                  <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                </div>
                <div>Skype with
                  <strong>Megan</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 5pm</small>
                <small class="text-muted">
                  <i class="icon-social-skype"></i>  On-line</small>
              </div>
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
              <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                <div>New UI Project -
                  <strong>deadline</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  10 - 11pm</small>
                <small class="text-muted">
                  <i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                <div>
                  <strong>#10 Startups.Garden</strong> Meetup</div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                <div>
                  <strong>Team meeting</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 6pm</small>
                <small class="text-muted">
                  <i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
          </div>
          <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="aside-options">
              <div class="clearfix mt-4">
                <small>
                  <b>Option 1</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 2</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 3</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 4</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4">
              <small>
                <b>CPU Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>Memory Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>SSD 1 Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>SSD 2 Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">25GB/256GB</small>
          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <span>&copy; 2019 Akil Hamid Chowdhury</span>
      </div>
      <div class="ml-auto">
        <span>ID: 1330335</span>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
