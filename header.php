<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php $title ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<div class="header" id="home">
		<header style="background: #9E3E33;">
			<div class="container-fluid">
				<div class="row justify-content-between">
					<!-- col for img/banner -->
					<div class="col-md-4">
						<a href="index.php#home" class="d-flex align-items-center text-black text-decoration-none">
							<img class="img-fluid" src="imgs/logo.jpg" alt="Festival logo" width="80%" height="80%">
						</a>
					</div>
					<!-- col for content rows -->
					<div class="col-md-4">
						<!-- row for space -->
						<div class="row" style="min-height: 17%;"></div>
						<!-- row for social media -->
						<div class="row justify-content-end">	
							<span style="text-align: end; padding-right: 150px;">
                                <a href=""><img src="imgs/twitter-x.svg" class="img-fluid" width="24px" height="24px"></a>
                                <a href=""><img src="imgs/instagram.svg" class="img-fluid" width="24px" height="24px" style="margin-left: 5px;"></a>
                                <a href=""><img src="imgs/facebook.svg" class="img-fluid" width="24px" height="24px" style="margin-left: 5px;"></a>
                                <a href=""><img src="imgs/youtube.svg" class="img-fluid" width="24px" height="24px" style="margin-left: 5px;"></a>
                            </span>
						</div>
						<!-- row for navs -->
                        <div class="row position-relative d-flex align-items-end flex-column mb-4 nav-div">
                            <nav class="mb-auto p-2">
                                <ul class="nav">
                                    <li class="nav-item"><a href="index.php#merch" class="nav-link text-black">Merchandise</a></li>
                                    <li class="nav-item"><a href="index.php#lineup" class="nav-link text-black">Line-up</a></li>
                                    <li class="nav-item"><a href="index.php#tickets" class="nav-link text-black">Tickets</a></li>
                                    <li class="nav-item"><a href="index.php#schedule" class="nav-link text-black">Schedule</a></li>
                                    <li class="nav-item"><a href="index.php#about" class="nav-link text-black">About</a></li>
                                </ul>
                            </nav>
                        </div>
					</div>
				<!-- main row, whole header -->
				</div>
			<!-- big container, whole header -->
			</div>
		</header>
	</div>