
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{auth()->user()->picture}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{auth()->user()->name}}{{auth()->user()->family}}</h5>
                        <span>admin</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
              <i class="mdi mdi-account"></i>
              </span>
                <span class="menu-title">user</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/user/create.blade.php">create</a></li>
                    @can('show-user')
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/user/showall.blade.php">showall</a></li>
                    @endcan
                </ul>
            </div>
        </li>
        @canany(['show-permissions','show-roles'])
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
              <i class="mdi mdi-account"></i>
              </span>
                <span class="menu-title">permissions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    @can('show-roles')
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/role/showall.blade.php" >all roles</a></li>
                    @endcan
                    @can('show-permissions')
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/permission/showall.blade.php">all permission</a></li>
                    @endcan
                </ul>
            </div>
        </li>
        @endcanany
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
               <i class="mdi mdi-account-box-outline"></i>
              </span>
                <span class="menu-title">contact</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
{{--                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/contact/response.blade.php">response</a></li>--}}
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/contact/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-alert-octagon"></i>
              </span>
                <span class="menu-title">about</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/about/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/about/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-comment-text"></i>
              </span>
                <span class="menu-title">news</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/akhbar/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/akhbar/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-equal-box"></i>
              </span>
                <span class="menu-title">article</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/article/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/article/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-gender-male-female"></i>
              </span>
                <span class="menu-title">gender</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/gender/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/gender/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-format-align-left"></i>
              </span>
                <span class="menu-title">order</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/order/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/order/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-human-greeting"></i>
              </span>
                <span class="menu-title">tourguide</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/tourguide/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/tourguide/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-airplane-takeoff"></i>
              </span>
                <span class="menu-title">vacation</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/travel/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/travel/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-apple-keyboard-shift"></i>
              </span>
                <span class="menu-title">activites</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/activites/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/activites/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-image-filter-hdr"></i>
              </span>
                <span class="menu-title">Event</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/event/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/event/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-image-filter"></i>
              </span>
                <span class="menu-title">Gallery</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/gallery/create.blade.php">create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/panel/gallery/showall.blade.php">showall</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
