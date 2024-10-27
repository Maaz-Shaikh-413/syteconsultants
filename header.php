
   <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/companies/2.png" width="100px" alt="logo" class="img-fluid logo-white" />
                        <img src="assets/img/companies/2.png" width="100px" alt="logo" class="img-fluid logo-color" />
                    </a>
        
                    <!-- Offcanvas Toggle Button for Mobile View -->
                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop"
                        role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                        aria-controls="offcanvasWithBackdrop">
                        <span class="far fa-bars"></span>
                    </a>
        
                    <!-- Desktop Navigation Menu -->
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                <div class="dropdown-menu mega-menu shadow py-4 px-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="drop-heading">Agent Registration</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Individual Registration</a></li>
                                                <li><a class="dropdown-item" href="#">Non-Individual Registration</a></li>
                                                <li><a class="dropdown-item" href="#">Agent Registration</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="drop-heading">Project Registration</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Project Registration</a></li>
                                                <li><a class="dropdown-item" href="#">Project Registration with <br>Quarterly Progress Report</a></li>
                                                <li><a class="dropdown-item" href="#">Rear Project Package</a></li>
                                                <li><a class="dropdown-item" href="#">Yearly Consultancy</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="drop-heading">Other Services</h6>
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item" href="#">Change in Project Name</a></li>
                                                <li><a class="dropdown-item" href="#">Changes in Bank Account</a></li>
                                                <li><a class="dropdown-item" href="#">Quarterly Progress Report</a></li>
                                                <li><a class="dropdown-item" href="#">Project Extension</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Property Consultancy</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Rera Complaints</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Rera Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Notification</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <!-- Offcanvas Menu for Mobile View -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#servicesMenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="servicesMenu">Services</a>
                        <div class="collapse" id="servicesMenu">
                            <ul class="list-unstyled ms-3">
                                <!-- Agent Registration Dropdown -->
                                <li>
                                    <a class="nav-link collapsed" href="#agentRegistration" data-bs-toggle="collapse" aria-expanded="false">Agent Registration</a>
                                    <div class="collapse ms-3" id="agentRegistration">
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="#">Individual Registration</a></li>
                                            <li><a class="dropdown-item" href="#">Non-Individual Registration</a></li>
                                            <li><a class="dropdown-item" href="#">Agent Registration</a></li>
                                        </ul>
                                    </div>
                                </li>
        
                                <!-- Project Registration Dropdown -->
                                <li>
                                    <a class="nav-link collapsed" href="#projectRegistration" data-bs-toggle="collapse" aria-expanded="false">Project Registration</a>
                                    <div class="collapse ms-3" id="projectRegistration">
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="#">Project Registration</a></li>
                                            <li><a class="dropdown-item" href="#">Project Registration with Quarterly Progress Report</a></li>
                                            <li><a class="dropdown-item" href="#">Rear Project Package</a></li>
                                            <li><a class="dropdown-item" href="#">Yearly Consultancy</a></li>
                                        </ul>
                                    </div>
                                </li>
        
                                <!-- Other Services Dropdown -->
                                <li>
                                    <a class="nav-link collapsed" href="#otherServices" data-bs-toggle="collapse" aria-expanded="false">Other Services</a>
                                    <div class="collapse ms-3" id="otherServices">
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="#">Change in Project Name</a></li>
                                            <li><a class="dropdown-item" href="#">Changes in Bank Account</a></li>
                                            <li><a class="dropdown-item" href="#">Quarterly Progress Report</a></li>
                                            <li><a class="dropdown-item" href="#">Project Extension</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Property Consultancy</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Rera Complaints</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Rera Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Notification</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>