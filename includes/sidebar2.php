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
                <a class="nav-link" href="phel-dashboard.php">
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
                        <a class="collapse-item" href="phel-assigned-vaccine.php">Assigned</a>
			 <a class="collapse-item" href="phel-vaccine-status.php">Vaccine Status</a>                     
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

           
       
            
         

<?php endif;    ?>          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->