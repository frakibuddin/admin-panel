<div class="header py-2">
    <div class="header-inner container-fluid d-flex align-items-center justify-content-between">
        <div class="header-logo d-flex align-items-center gap-5">
            <a href="index.php"><img src="assets/img/sim-unlocker-logo-dark-mode.png" alt="" width="200"></a>
            <div class="menu-btn cursor-pointer">
                <i class="text-light fa-solid fa-bars"></i>
            </div>

            <a href="#!" class="text-light " onclick="javascript:toggleFullScreen()">
                <i class="fa-solid fa-expand "></i>
            </a>


        </div>
        <div class="header-dots d-none"><i class="fa-solid fa-ellipsis"></i></div>
        <div class="header-menu d-flex align-items-center gap-5">
            <div class="mode-btns ml-auto cursor-pointer">
                <i class="fa-regular fa-moon fs-2 text-light"></i>
            </div>
            <div>
                <div class="input-group ">
                    <select class=" my-input dropdown-toggle" id="">
                        <option value="" class="text-dark">English</option>

                    </select>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle show" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="true">
                    <img src="assets/img/img_avatar2.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <span>Rakib</span>
                </a>
                <ul class="dropdown-menu text-small shadow " aria-labelledby="dropdownUser2" data-popper-placement="top-start">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="login.php">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>