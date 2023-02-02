<?php   
session_start();  
$conn=mysqli_connect("localhost","root","","tutorials");  
if (!isset($_SESSION['USER_ID'])) {  
     header("location:login.php");  
     die();  
}  
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>TORMS</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("visitorCount").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "visitorCount.php", true);
        xhttp.send();


        
    }

    
    
    </script>

</head>
<body onload="loadDoc()">
<!-- partial:index.partial.html -->
<nav class="mnb navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <i class="ic fa fa-bars"></i>
      </button>
      <div style="padding: 15px 0;">
         <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
      </div>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">kisw</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['USER_NAME'] ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Upgrade</a></li>
            <li><a href="#">Help</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-bell-o"><div id="visitorCount">Loading...</div></i></a></li>
        <li><a href="#"><i class="fa fa-comment-o"></i></a></li>
      </ul>
      <form class="navbar-form navbar-right" id="form">
        <input type="text" class="form-control" placeholder="Ingiza namber ya leseni.." id="search-bar" maxlength="10" onkeyup="//search()">
      </form>
    </div>
  </div>
</nav>
<!--msb: main sidebar-->
<div class="msb" id="msb">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="brand-wrapper">
					<!-- Brand -->
					<div class="brand-name-wrapper">
						<a class="navbar-brand" href="#">
							TORMS
						</a>
					</div>
                   
				</div>

			</div>

			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">

					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
					<li class="active"><a href="#"><i class="fa fa-puzzle-piece"></i> Components</a></li>
					<li><a href="#"><i class="fa fa-heart"></i> Extras</a></li>

					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							<i class="fa fa-diamond"></i> Apps
						  <span class="caret"></span>
            </a>
						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="#">Mail</a></li>
									<li><a href="#">Calendar</a></li>
									<li><a href="#">Ecommerce</a></li>
									<li><a href="#">User</a></li>
									<li><a href="#">Social</a></li>

									<!-- Dropdown level 2 -->
									<li class="panel panel-default" id="dropdown">
										<a data-toggle="collapse" href="#dropdown-lvl2">
											<i class="glyphicon glyphicon-off"></i> Sub Level <span class="caret"></span>
										</a>
										<div id="dropdown-lvl2" class="panel-collapse collapse">
											<div class="panel-body">
												<ul class="nav navbar-nav">
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
													<li><a href="#">Link</a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>  
</div>
<!--main content wrapper-->
<div class="mcw">
  <!--navigation here-->
  <!--main content view-->
  <div class="cv">
    <div>
     <div class="inbox">
       <div class="inbox-sb">
         
       </div>
       <div class="inbox-bx container-fluid">
         <div class="row">
           <div class="col-md-2">
             <ul>
               <li><a href="#">Inbox</a></li>
               <li><a href="#">Sent</a></li>
               <li><a href="#">Trash</a></li>
             </ul>
           </div>
           <div class="col-md-10">
             <table class="table table-stripped">
               <tbody>
                 <tr>
                   <td><input type="checkbox"/></td>
                   <td><i class="fa fa-star"></i></td>
                   <td><b>PoliceTz</b></td>
                   <td><b>Siku ya usalama bara barani</b></td>
                   <td></td>
                   <td>Mar 10</td>
                 </tr>
                 <tr>
                   <td><input type="checkbox"/></td>
                   <td><i class="fa fa-star-o"></i></td>
                   <td>Dan Glenn</td>
                   <td>[ptcuser-announcements] - PTC/USER Expert Speaker Series Webinar March 9, 2017 11AM (EST)</td>
                   <td><i class="fa fa-paperclip"></i></td>
                   <td>Mar 10</td>
                 </tr>
                 <tr>
                   <td><input type="checkbox"/></td>
                   <td><i class="fa fa-star-o"></i></td>
                   <td>Jetpack</td>
                   <td>Announcing some highly requested improvements and our new affiliate program</td>
                   <td></td>
                   <td>Mar 08</td>
                 </tr>
                 <tr>
                   <td><input type="checkbox"/></td>
                   <td><i class="fa fa-star-o"></i></td>
                   <td>Jetpack</td>
                   <td>Announcing some highly requested improvements and our new affiliate program</td>
                   <td></td>
                   <td>Mar 08</td>
                 </tr>
                 <tr>
                   <td><input type="checkbox"/></td>
                   <td><i class="fa fa-star-o"></i></td>
                   <td>Jetpack</td>
                   <td>Announcing some highly requested improvements and our new affiliate program</td>
                   <td></td>
                   <td>Mar 08</td>
                 </tr>
                 <tr>
                   <td><input type="checkbox"/></td>
                   <td><i class="fa fa-star-o"></i></td>
                   <td>Jetpack</td>
                   <td>Announcing some highly requested improvements and our new affiliate program</td>
                   <td></td>
                   <td>Mar 08</td>
                 </tr>
                 <tr>
                   <td><input type="checkbox"/></td>
                   <td><i class="fa fa-star-o"></i></td>
                   <td>Jetpack</td>
                   <td>Announcing some highly requested improvements and our new affiliate program</td>
                   <td></td>
                   <td>Mar 08</td>
                 </tr>
                 <tr>
                   <td><input type="checkbox"/></td>
                   <td><i class="fa fa-star-o"></i></td>
                   <td>Jetpack</td>
                   <td>Announcing some highly requested improvements and our new affiliate program</td>
                   <td></td>
                   <td>Mar 08</td>
                 </tr>

               </tbody>
               <h3></h3>
             </table>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</div>

<!-- i want to place my data here that i have queried from the  api -->
<div class="card text-center" >
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <h3 class="card-title"></h3>
    <!--<p class="card-text">mambo</p>-->
    <ul>
  <li>Name: </li>
  <li>Age:</li>
  <li>PlateNumber:</li>
</ul>

    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<!-- partial -->


<!-- am trying to call my api here -->


<script type="text/javascript">
var searchValue = document.getElementById("search-bar");
var form = document.getElementById("form");
searchValue.addEventListener("input", function(){
    if(this.value.length == 10){
        form.submit();
console.log(searchValue)

fetch('http://localhost/CHAMAMATA/users?leseni=' + this.value)
.then(response => response.json())
.then(data => {
data.forEach(user => {
const markup =`<li> ${user.fldName} ${user.age} ${user.fldEmail} ${user.fldPhone} ${user.platenumber}</li>`;

document.querySelector('h5').insertAdjacentHTML('beforeend',markup);




})




console.log(data);
// Use the data here
})
.catch(error => {
console.error(error);
});
    }
 });
 
</script>



  <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>
