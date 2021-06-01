<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Century Gothic", sans-serif;
  background-image: url(../public/wallpaper/welcome.jpg);
  background-repeat: no-repeat;
  background-size:cover;   
    /* background-color: #C0C0C0; */
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #008B8B;
  /* background-image: url(../public/wallpaper/12.jpg); */
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white ;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 35px;
  padding-left: 240px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: gray;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #008B8B;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

.active {
  background-color: green;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #008B8B;
  padding-left: 8px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.sidenav a:hover, .dropdown-btn:hover {
  color: white  ;
}
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  background-color: black;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

</style>
</head>
<body>

<div id="mySidebar" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><b>x</b></a>
  <a href="/latihan-Telkom-rental/public/"><i class="fas fa-home"></i><b>  HOME</b></a>
  <button class="dropdown-btn"><i class="fas fa-users"></i><b> USER</b>
  <i class="fab fa-get-pocket" style="padding-left:97px"></i><br>
  </button>
  <div class="dropdown-container">
  <a href="/latihan-Telkom-rental/public/users"><i class="far fa-address-card"></i><b> Users</b></a>
  <a href="/latihan-Telkom-rental/public/rental"><i class="fa fa-car"></i><b>  Rental</b></a>
  <a href="/latihan-Telkom-rental/public/peminjaman"><i class="fas fa-server"></i><b>  Data Peminjaman</b></a>
  <a href="/latihan-Telkom-rental/public/pengembalian"><i class="fas fa-exchange-alt"></i><b>  Pengembalian</b></a>
  </div>
  <button class="dropdown-btn"><i class="fas fa-ad"></i><b> ADMIN</b>
  <i class="fab fa-get-pocket" style="padding-left:80px"></i><br>
  </button>
  <div class="dropdown-container">
  <a href="/latihan-Telkom-rental/public/mobil"><i class="fa fa-list-alt"><b> Data Mobil</b></i></a>
  </div>
  <a href="{{url('/logout')}}"><i class="fas fa-sign-out-alt"></i><b>  LOGOUT</b></a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i><b>  Menu</b></button>  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

   @yield('container')

</body>

</html> 
