<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href=""><img src="https://cdn.iconscout.com/icon/free/png-256/account-avatar-profile-human-man-user-30448.png" class="img-circle" width="80"></a></p>
            <h5 class="centered"><?=$_SESSION["username"]?></h5>
            <li class="mt">
                <a href="index">
                    <i class="fa fa-dashboard"></i>
                    <span>Anasayfa</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="edit-theme" <?=$page == "edit-theme" ? 'class="active"' : ''?>>
                    <i class="fa fa-cogs"></i>
                    <span>Elementler</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="contacts" <?=$page == "contacts" ? 'class="active"' : ''?>>
                    <i class="fa fa-desktop"></i>
                    <span>İletişim Formları</span>
                </a>

            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>