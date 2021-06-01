@extends('layout.main')

@section ('title', 'Index')

@section('container')

    <div class="container">
        <div class="row">
            <div class="column-18">
            <section class="feature-area section-gap" id="service">
				<div class="container">
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        
        <style>
                    .single-feature {
                    border-radius: 30px;
                    background-color: #E0FFFF;
                    padding: 30px;
                    margin-bottom: 30px;
                    -webkit-transition: all 0.3s ease 0s;
                    -moz-transition: all 0.3s ease 0s;
                    -o-transition: all 0.3s ease 0s;
                    transition: all 0.3s ease 0s;
                    }

                    .single-feature:hover {
                    box-shadow: -14.142px 14.142px 20px 0px rgba(157, 157, 157, 0.5);
                    cursor: pointer;
                    }

                    .single-feature:hover p {
                    color: black;
                    }

                    .single-feature:hover h4 {
                    color: #DAA520;
                    }

                    .single-feature h4 {
                    -webkit-transition: all 0.3s ease 0s;
                    -moz-transition: all 0.3s ease 0s;
                    -o-transition: all 0.3s ease 0s;
                    transition: all 0.3s ease 0s;
                    margin-top: 20px;
                    margin-bottom: 20px;
                    }

                    .single-feature h4 .lnr {
                    margin-right: 15px;
                    }

                    @media (max-width: 991.98px) {
                    .single-feature {
                        margin-bottom: 60px;
                    }
                    .gambar{
                        padding-left:'0px';
                    }
					
                    }
            </style>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

				<div align="center" style="cursor:pointer;">
						<span ><i class="fas fa-car fa-5x"><h1>CAR RENTAL WEBSITE</h1></i></span>
                </div>
				
				<div class="gambar">
							<span><img src="../public/wallpaper/banner.jpg" height="500" width="1090" alt=""/></span>
                                <br><br>
								        <h1>Rent a car at low prices</h1>
                                        <p> As one of the first and most influential international car rental companies in the world - with over 100 years in the business - we have earned a trusted reputation as a global leading car rental provider. Always at the forefront of the industry, we were the first car rental company with a website and the first to accept mobile reservations. Today we are present in over 105 countries with branches in over 2,200 locations. You will be able to easily find car rental services internationally in almost every major city and tourist destination worldwide. We offer convenient locations such as airports, train stations, cruise ports, and hotels.</p>
                                <br><br>
                </div>
</header>


</section>
					<div class="row d-flex justify-content-center" >
						<div class="col-md-8 pb-40 header-text">
							<h1 align="center">Member Identity :</h1>
                            <br>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span><i class="fas fa-user-shield"></i><b> Caesario Fathan Nugroho</b></h4>
								<p>TTL : Malang, 14 September 2002</p>
								<p>Jenis Kelamin : Laki-laki</p>
								<p>Alamat : Malang</p>
								<p>Kelas : XI-RPL 7</p>
								<p>Nomor Telepon : 0895414586648</p>	
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span></span><i class="fas fa-user-shield"></i><b> Malfynas Putra Ansi</b></h4>
								<p>TTL : Malang, 14 Maret 2003</p>
								<p>Jenis Kelamin : Laki-laki</p>
								<p>Alamat : Malang</p>
								<p>Kelas : XI-RPL 7</p>
								<p>Nomor Telepon : 081234545744</p>							
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span><i class="fas fa-user-shield"></i><b> Nurdiana Safitri</b></h4>
								<p>TTL : Probolinggo, 11 Mei 2003</p>
								<p>Jenis Kelamin : Perempuan</p>
								<p>Alamat : Malang</p>
								<p>Kelas : XI-RPL 7</p>
								<p>Nomor Telepon : 0895399666477</p>	
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span><i class="fas fa-user-shield"></i><b> Talenta Melodivany Berniada</b></h4>
								<p>TTL : Surabaya, 4 Maret 2003</p>
								<p>Jenis Kelamin : Perempuan</p>
								<p>Alamat : Malang</p>
								<p>Kelas : XI-RPL 7</p>
								<p>Nomor Telepon : 083847080120</p>						
							</div>
						</div>
</section>
@endsection