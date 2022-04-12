<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Modals - UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() . "/assets/img/favicon/favicon.ico" ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url() . "/assets/vendor/fonts/boxicons.css" ?>" />




    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo base_url() . "/assets/vendor/js/helpers.js" ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>
<style>
.bg-all-project {
    background-color: rgb(190, 124, 255, 0.2) !important;
    border: 2px;
    border-style: solid;
    border-color: #BE7CFF;

}

.menu-vertical .menu-inner>.menu-item .menu-link {
    margin: 0rem 0rem !important;
}

.no-margin {
    margin: 15;
}

.font-black {
    color: black;
}

.row-center {
    padding: 10px;
}

.bg-strating {
    background-color: #e8fadf !important;
    border: 2px;
    border-style: solid;
    border-color: #71dd37;

}

.bg-inprogress {
    background-color: #e7e7ff !important;
    border: 2px;
    border-style: solid;
    border-color: #696cff;
}

.bg-finished {
    background-color: #fff2d6 !important;
    border: 2px;
    border-style: solid;
    border-color: #ffab00;
}

.bg-cancel {
    background-color: #ffe0db !important;
    border: 2px;
    border-style: solid;
    border-color: #ff3e1d;
}

.search-bar {
    padding: 16px;
    text-align: center;
    max-width: 1350px;
    height: 100px;
    margin-bottom: 10px;
    margin-right: 150px;
    margin-left: 40px;
    border: 5px;
}
</style>

<style>
    .fullscreen {
        margin: 0;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">

                <!-- LOGO ของเว็บไซต์ -->
                <div class="app-brand no-margin " style="background-color: #DC0032; height:75px">

                    <img class="card-img-top " src="<?= base_url(); ?>/assets/img/logo.png">

                </div>
                <!-- LOGO ของเว็บไซต์ -->

                <div class=" menu menu-inner-shadow">

                </div>

                <ul class="menu menu-inner py-1 overflow-auto">


                    <!-- Layouts -->
                    <li class="menu-item ">
                        <div>
                            <a href="<?php echo base_url() . "/Project/project_list" ?>" class="menu-link ">
                                <i class='bx bx-list-ul' style='font-size:25px'></i> &emsp;
                                <div data-i18n="Analytics" class="menu">Project List</div>
                            </a>
                        </div>
                    </li>
                    <li class="menu-item ">
                        <a href="<?php echo base_url() . "/Add_project/get_Add_Project" ?>" class="menu-link">
                            <i class='bx bx-list-plus' style='font-size:25px'></i> &emsp;
                            <div data-i18n="Analytics" class="menu">Add project</div>
                        </a>
                    </li>

                </ul>

            </aside>
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">
                <!-- Search Bar -->
                <div class=" container bg-transparent rounded search-bar">
                    <nav class="layout-navbar navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <input type="text" id="myInput" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
                                </div>
                            </div>
                            <!-- /Search -->


                            <ul class="navbar-nav flex-row align-items-center ms-auto">



                                <!-- Place this tag where you want the button to render. -->
                                <li class="nav-item lh-1 me-3">
                                    <span></span>
                                </li>

                            </ul>
                        </div>



                    </nav>
                </div>
                <!-- Search Bar -->
                <div class="centerdiv container bg-white div-search rounded" id="layout-page">
                    <!-- <div class="container"> -->
                    <div class="row" style="text-align: center;">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <nobr style="font-size: 22;" margin-right: 20px;"> Year</nobr>

                                    </select>
                                </div>
                                <div class="col">

                                    <select id="demoShort" multiple="" size="3" style="display: inline-block;">
                                        <option value="Abarth">Abarth</option>
                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                        <option value="Alpine" data-test="example">Alpine</option>
                                        <option value="Aston Martin">Aston Martin</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Bentley">Bentley</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Citroën">Citroën</option>
                                        <option value="Cupra">Cupra</option>
                                        <option value="DACIA">DACIA</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <nobr style="font-size: 22;" margin-right: 20px;"> Year</nobr>

                                    </select>
                                </div>
                                <div class="col">

                                    <select id="demoShort2" multiple="" size="3" style="display: inline-block;">
                                        <option value="Abarth">Abarth</option>
                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                        <option value="Alpine" data-test="example">Alpine</option>
                                        <option value="Aston Martin">Aston Martin</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Bentley">Bentley</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Citroën">Citroën</option>
                                        <option value="Cupra">Cupra</option>
                                        <option value="DACIA">DACIA</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <nobr style="font-size: 22;" margin-right: 20px;"> Year</nobr>

                                    </select>
                                </div>
                                <div class="col">

                                    <select id="demoShort3" multiple="" size="3" style="display: inline-block;">
                                        <option value="Abarth">Abarth</option>
                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                        <option value="Alpine" data-test="example">Alpine</option>
                                        <option value="Aston Martin">Aston Martin</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Bentley">Bentley</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Citroën">Citroën</option>
                                        <option value="Cupra">Cupra</option>
                                        <option value="DACIA">DACIA</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <nobr style="font-size: 22;" margin-right: 20px;"> Year</nobr>

                                    </select>
                                </div>
                                <div class="col">

                                    <select id="demoShort4" multiple="" size="3" style="display: inline-block;">
                                        <option value="Abarth">Abarth</option>
                                        <option value="Alfa Romeo">Alfa Romeo</option>
                                        <option value="Alpine" data-test="example">Alpine</option>
                                        <option value="Aston Martin">Aston Martin</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Bentley">Bentley</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Citroën">Citroën</option>
                                        <option value="Cupra">Cupra</option>
                                        <option value="DACIA">DACIA</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-1">
                            <nobr style="font-size: 22;" margin-right: 20px;"> ค้นหา</nobr>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

                <!-- Navbar -->
                <div class="container bg-white div-static rounded" id="layout-page">

                    <div class="row-center row">
                        <div class="static-margin col-md-4">
                            <div class="bg-all-project card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1"
                                        style="color: #BE7CFF; font-size:20px">All project
                                    </span>
                                    <h3 class="font-black card-title mb-2" style="color: #BE7CFF;">4</h3>
                                    <!-- <small class="font-black fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->

                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-strating card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1"
                                        style="color: #71dd37;">Starting
                                    </span>
                                    <h3 class="font-black card-title mb-2" style="color: #71dd37;">1</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-inprogress card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1" style="color: #696cff;">In
                                        Progress
                                    </span>
                                    <h3 class="font-black card-title mb-2" style="color: #696cff;">2</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-finished card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1"
                                        style="color: #ffab00;">Finished
                                    </span>
                                    <h3 class="font-black card-title mb-2" style="color: #ffab00;">1</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-cancel card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1 "
                                        style="color: #ff3e1d;">Cancel</span>
                                    <h3 class="font-black card-title mb-2" style="color: #ff3e1d;">0</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row" style="margin: 40px;">
                        <div class="col-4 border border-primary" style="height: 30px;">

                        </div>
                        <div class="col-2 border border-primary">

                        </div>
                        <div class="col-2 border border-primary">

                        </div>
                        <div class="col-2 border border-primary">

                        </div>
                        <div class="col-2 border border-primary">

                        </div>
                    </div> -->
                </div>


                <div class="container bg-white div-content rounded" id="layout-page">
                    <div class="container pt-5">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Project name</th>
                                        <th>Status</th>
                                        <th>Users</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr class="table-default">
                                        <td>1</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span>
                                        </td>
                                        <td><a href="<?php echo base_url() . "/Home/v_Project_info" ?>" class="">Ronnie
                                                Shane</a>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>

                                        <td>

                                            <!-- Button trigger modal -->

                                            <!-- Trigger the modal with a button -->
                                            <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

                                            <!-- Modal -->
                                            <!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
     -->
                                            <!-- Modal content-->
                                            <!-- <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div></div> -->



                                            <!-- Modal -->
                                            <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel1"><i class='bx bx-paperclip'></i> Add Attachment</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <div class="row">
                                                                        <div class="mb-3 col-md-2">
                                                                            Add Attachments :
                                                                            <i class="bi bi-plus-square coloricon m-1 mt-10" id="icon" type="button" style='font-size:30px'></i>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Uplode file -->

                                                                    <div>
                                                                        <p class="a1"><br></p>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>2</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>IoT Data
                                                Software</strong></td>
                                        <td><a>นายชัยยุทธ์ สีครามสดใส</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Starting</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit
                                                        Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add
                                                        Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>3</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-danger me-1">Cancel</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit
                                                        Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add
                                                        Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>4</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-success me-1">Starting</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit
                                                        Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add
                                                        Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>5</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit
                                                        Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add
                                                        Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>6</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong>
                                        </td>
                                        <td><a>Ronnie Shane
                                        </td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit
                                                        Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add
                                                        Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>7</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong>
                                            </td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit
                                                        Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add
                                                        Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>8</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit
                                                        Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add
                                                        Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="table-default">
                                        <td>9</td>
                                        <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                Project</strong></td>
                                        <td><a>Ronnie Shane</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit
                                                        Project</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add
                                                        Attachment</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Navbar -->
        </div>
        <!-- Content wrapper -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <div id="extwaiokist" style="display:none" v="kdknj" q="583c7e36" c="292.8" i="302" u="1.331" s="03222217" d="1" w="false" e="" m="BMe=" vn="6volk">
        <div id="extwaigglbit" style="display:none" v="kdknj" q="583c7e36" c="292.8" i="302" u="1.331" s="03222217" d="1" w="false" e="" m="BMe="></div>
    </div>
    <!-- / Layout wrapper -->
</body>

<div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Add Attachment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
    selectBoxTest = new vanillaSelectBox("#demoShort", {
        "maxHeight": 330,
        "search": true,
        "translations": {
            "all": "All",
            "items": "unit",
            "selectAll": "Check All",
            "clearAll": "Clear All",
            "placeHolder": "Choose a brand..."
        }
    });

    selectBoxTest = new vanillaSelectBox("#demoShort2", {
        "maxHeight": 330,
        "search": true,
        "translations": {
            "all": "All",
            "items": "unit",
            "selectAll": "Check All",
            "clearAll": "Clear All",
            "placeHolder": "Choose a brand..."
        }
    });

    selectBoxTest = new vanillaSelectBox("#demoShort3", {
        "maxHeight": 330,
        "search": true,
        "translations": {
            "all": "All",
            "items": "unit",
            "selectAll": "Check All",
            "clearAll": "Clear All",
            "placeHolder": "Choose a brand..."
        }
    });
    selectBoxTest = new vanillaSelectBox("#demoShort4", {
        "maxHeight": 330,
        "search": true,
        "translations": {
            "all": "All",
            "items": "unit",
            "selectAll": "Check All",
            "clearAll": "Clear All",
            "placeHolder": "Choose a brand..."
        }
    });
    </script>

<script>
    let i = 0;
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    $(document).ready(function() {
        $("#icon").click(() => {
            i = i + 1;

            $('.a1 ').append("<div class='row m-4'>" + "File : " + i +
                "<div class='col'>" +
                "<input class='form-control' type='file' id='formFile' style='width:100%'>" +
                "</div>" +
                "<div class='col'>" +
                "<textarea class='box_teaxt form-control mt-0' placeholder='Leave a comment here' id='floatingTextarea2' style='height: 95px;width:100%' value='comment'></textarea> " +
                "</div>" +
                "</div>" + "<br>");

        });
    });
    // function modal(){
    //     console.log('frame');
    // }
</script>


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?php echo base_url() . "/assets/vendor/libs/jquery/jquery.js" ?>"></script>
<script src="<?php echo base_url() . "/assets/vendor/libs/popper/popper.js" ?>"></script>
<script src="<?php echo base_url() . "/assets/vendor/js/bootstrap.js" ?>"></script>
<script src="<?php echo base_url() . "/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js" ?>"></script>

<!-- endbuild -->

<!-- Vendors JS -->



<!-- Main JS -->
<!-- <script src="<?php echo base_url() . "/assets/js/main.js" ?>"></script> -->

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
