        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-biohazard"></i>
                </div>
                <div class="sidebar-brand-text mx-2">COVID19-VMS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
<?php if($_SESSION['aid']):?>


    <li class="nav-item">
                <a class="nav-link" href="dashboard-v.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Phlebotomist</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="add-phlebotomist.php">Add</a>
                         <a class="collapse-item" href="manage-phlebotomist.php">Manage</a>
                    </div>
                </div>
            </li>


     


<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefifty"
                    aria-expanded="true" aria-controls="collapsefifty">
                    <i class="fas fa-fw fa-syringe"></i>
                    <span>Vaccination</span>
                </a>
                <div id="collapsefifty" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-vaccine.php">New</a>
                        <a class="collapse-item" href="assigned-vaccine.php">Assigned</a>
			<a class="collapse-item" href="on-the-way.php">On the Way</a>
                   <a class="collapse-item" href="reportdelivered-vaccine.php">Report Delivered</a>
 <a class="collapse-item" href="all-vaccine.php">All Vaccinations</a>
                    </div>
                </div>
            </li>


   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-clipboard-list fa-2x"></i>
                    <span>Report</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="bwdates-report-ds.php">B/W Dates Report</a>
                         <a class="collapse-item" href="search-report.php">Search Report</a>
                        </div>
                </div>
            </li>

<?php else:    ?>          
         
            <!-- Nav Item - Live Updates -->
            <li class="nav-item">
                <a class="nav-link" href="live-updates.php">
                    <i class="fas fa-fw fa-map-marker-alt"></i>
                    <span> Live Updates</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                COVID19 Vaccination
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Vaccination</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="new-user-vaccination.php">New User</a>
                        <a class="collapse-item" href="registered-user-vaccination.php">Registered User</a>
                    </div>
                </div>
            </li>

         <li class="nav-item">
                 <a class="nav-link" href="patient-search-vreport.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Vaccine Status</span></a>
            </li>

     <li class="nav-item">
                 <a class="nav-link" href="patient-search-certificate.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Vaccine Certificate</span></a>
            </li>
            
         
<li class="nav-item active">
                <a class="nav-link" href="login.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span></a>
            </li>

<?php endif;    ?>          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->