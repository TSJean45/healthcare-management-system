<div class="sidebar">
    <div class="logo-details">
        <img src="asset/image/logo pic.png" alt="">
        <span class="logo_name">JJJ MedCare</span>
    </div>

    <div class="sidebar-details">
        <ul class="nav-links">
            <li class="item">
                <a <?php echo ($page == 'admindashboard') ? "class='active'" : ""; ?> href="admindashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Main Dashboard</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'adminlist') ? "class='active'" : ""; ?> href="adminlist.php">
                    <i class='fa fa-user-cog fa-xs'></i>
                    <span class="links_name">Admin</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'stafflist') ? "class='active'" : ""; ?> href="stafflist.php">
                    <i class='fa fa-user-md fa-xs'></i>
                    <span class="links_name">Medical Staff</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'adminUserlist') ? "class='active'" : ""; ?> href="adminUserlist.php">
                    <i class='fa fa-user fa-xs'></i>
                    <span class="links_name">User</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'adminMedRec') ? "class='active'" : ""; ?> href="adminMedRec.php">
                    <i class="fas fa-notes-medical"></i>
                    <span class="links_name">Medical Record</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'adminContact') ? "class='active'" : ""; ?> href="adminContact.php">
                    <i class="fas fa-file-signature"></i>
                    <span class="links_name">Contact</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'adminVac') ? "class='active'" : ""; ?> href="adminVac.php">
                    <i class="fas fa-syringe"></i>
                    <span class="links_name">Vaccination</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'adminApp') ? "class='active'" : ""; ?> href="adminApp.php">
                    <i class="fas fa-calendar-check"></i>
                    <span class="links_name">Appointment</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'adminStock') ? "class='active'" : ""; ?> href="adminStock.php">
                    <i class="fas fa-prescription-bottle-alt"></i>
                    <span class="links_name">Medicine Stock</span>
                </a>
            </li>
            <li class="item">
                <a <?php echo ($page == 'adminprofile') ? "class='active'" : ""; ?> href="adminprofile.php">
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