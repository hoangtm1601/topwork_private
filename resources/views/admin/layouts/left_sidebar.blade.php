<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
    <i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu"
         class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light "
         m-menu-vertical="1"
         m-menu-scrollable="0" m-menu-dropdown-timeout="500">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__section m-menu__section--first">
                <h4 class="m-menu__section-text">{{ __('Departments') }}</h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <span class="m-menu__link-text">{{ __('Resources') }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                            <span class="m-menu__link"><span
                                        class="m-menu__link-text">{{ __('Resources') }}</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="#" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __('Timesheet') }}</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __('Contacts') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                <a href="" class="m-menu__link">
                    <span class="m-menu__link-text">{{ __('Category') }}</span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                <a href="{{ route('locations.index') }}" class="m-menu__link">
                    <span class="m-menu__link-text">{{ __('Location') }}</span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                <a href="{{ route('job-types.index') }}" class="m-menu__link">
                    <span class="m-menu__link-text">{{ __('Job Type') }}</span>
                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1">
                <a href="{{ route('roles.index') }}" class="m-menu__link">
                    <span class="m-menu__link-text">{{ __('Role') }}</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
