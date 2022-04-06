<div class="sidebar">
    <div class="logo-details">
        <img src="asset/image/logo pic.png" alt="">
        <span class="logo_name">JJJ MedCare</span>
    </div>

    <div class="sidebar-details">
        <ul class="nav-links">
            <li class="item">
                <a <?php echo ($page == 'staffdashboard') ? "class='active'" : ""; ?> href="staffdashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Main Dashboard</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'staffUserList') ? "class='active'" : ""; ?> href="staffUserList.php">
                    <i class='fa fa-user fa-xs'></i>
                    <span class="links_name">User</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'staffMedrec') ? "class='active'" : ""; ?> href="staffMedrec.php">
                    <i class="fas fa-notes-medical"></i>
                    <span class="links_name">Medical Record</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'staffVac') ? "class='active'" : ""; ?> href="staffVac.php">
                    <i class="fas fa-syringe"></i>
                    <span class="links_name">Vaccination</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'staffApp') ? "class='active'" : ""; ?> href="staffApp.php">
                    <i class="fas fa-calendar-check"></i>
                    <span class="links_name">Appointment</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'staffStock') ? "class='active'" : ""; ?> href="staffStock.php">
                    <i class="fas fa-prescription-bottle-alt"></i>
                    <span class="links_name">Medicine Stock</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'staffbed') ? "class='active'" : ""; ?> href="staffbed.php">
                    <i class="fas fa-procedures"></i>
                    <span class="links_name">Bed</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'staffprofile') ? "class='active'" : ""; ?> href="staffprofile.php">
                    <i class='bx bxs-user-rectangle'></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li class="item">
                <a href="index.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
</div>