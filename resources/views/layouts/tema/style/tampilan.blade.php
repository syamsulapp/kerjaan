<style>
        #formValidate .wizard>.content {
            min-height: 25em;
        }

        #example-vertical.wizard>.content {
            min-height: 24.5em;
        }
    </style>
    <!--  END CUSTOM STYLE FILE  -->

    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        /* 
            Note: If you are using this demo without activity sidebar then you have to make some changes by applying the .admin-data-content css inside structure.css
        */

        .admin-data-content {
            height: calc(100vh - 132px);
            max-width: 100%;
            margin: 0;
        }

        .admin-header .header-container {
            margin: 0;
            max-width: 100%;
        }

        .footer-wrapper {
            max-width: 100%;
            margin: 0;
        }


        /* User Profile Dropdown*/
        .admin-header .header-container .nav-item.user-profile-dropdown {
            align-self: center;
            padding: 0;
            border-radius: 8px;
            margin-left: 22px;
            margin-right: 0;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-toggle {
            display: flex;
            justify-content: flex-end;
            padding: 0 20px 0 16px;
            transition: .5s;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-toggle:after {
            display: none;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-toggle svg {
            color: #515365;
            width: 15px;
            height: 15px;
            align-self: center;
            margin-left: 6px;
            stroke-width: 1.7px;
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition: -webkit-transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown.show .dropdown-toggle svg {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media {
            margin: 0;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media img {
            width: 33px;
            height: 33px;
            border-radius: 6px;
            box-shadow: 0 0px 0.9px rgba(0, 0, 0, 0.07), 0 0px 7px rgba(0, 0, 0, 0.14);
            margin-right: 13px;
            border: none;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media .media-body {
            flex: auto;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media .media-body h6 {
            color: #4361ee;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media .media-body h6 span {
            color: #515365;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown a.user .media .media-body p {
            color: #bfc9d4;
            font-size: 10px;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .nav-link.user {
            padding: 0 0;
            font-size: 25px;
        }

        .admin-header .header-container .nav-item.dropdown.user-profile-dropdown .nav-link:after {
            display: none;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu {
            z-index: 9999;
            max-width: 13rem;
            padding: 0 11px;
            top: 166% !important;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu.show {
            top: 42px !important;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section {
            padding: 16px 14px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            margin-right: -12px;
            margin-left: -12px;
            background: rgb(96 152 149);
            margin-top: -1px;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media {
            margin: 0;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 3px solid rgb(224 230 237 / 58%);
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body {
            align-self: center;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body h5 {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 0;
            color: #fafafa;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body p {
            font-size: 11px;
            font-weight: 500;
            margin-bottom: 0;
            color: #e0e6ed;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item {
            padding: 0;
            background: transparent;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item a {
            display: block;
            color: #3b3f5c;
            font-size: 13px;
            font-weight: 600;
            padding: 9px 14px;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item a:hover {
            color: #000
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item.active,
        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:active {
            background-color: transparent;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:not(:last-child) {
            border-bottom: 1px solid #ebedf2;
        }

        .admin-header .header-container .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item svg {
            width: 17px;
            margin-right: 7px;
            height: 17px;
            color: #009688;
            fill: rgb(0 150 136 / 13%);
        }

        #content .col-left {
            margin-right: 0;
        }

        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise, Remove it
        */
        .navbar .navbar-item.navbar-dropdown {
            margin-left: auto;
        }

        .layout-px-spacing {
            min-height: calc(100vh - 145px) !important;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->