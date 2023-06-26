<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="tel:+992 000-000-0000"><i class="fas fa-phone-alt text-success mr-1"></i>+992 000-000-0000</a></li>
                                <li><a href="mailto:info@myhouse.tj"><i class="fas fa-envelope text-success mr-1"></i>info@myhouse.tj</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-success mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">Выход</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="login.php">Вход</a>&nbsp;&nbsp;</li>
								<li><?php } ?>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php">myhouse.tj</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Главная</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="about.php">О нас</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="property.php">Покупка</a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="property.php">Аренда</a> </li>

                                    </ul>
                                    
									
									<a class="btn btn-success d-none d-xl-block rounded" href="contact.php">Связаться с нами</a> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>