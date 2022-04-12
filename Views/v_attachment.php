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

    <!-- CSS Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitterbootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css">
    <!-- JavaScript Library -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>

</head>

<style>
    .bg-all-project {
        background-color: rgb(190, 124, 255, 0.2) !important;
        border: 2px;
        border-style: solid;
        border-color: #BE7CFF;

    }

    .form-select form-select-sm {
        width: 100px !important;
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




    .bg-cancel {
        background-color: #ffe0db !important;
        border: 2px;
        border-style: solid;
        border-color: #ff3e1d;
    }

    .search-bar {

        max-width: auto;
        height: auto;

        padding: 16px;
        text-align: center;
        margin-bottom: 10px;
        margin-right: 150px;
        margin-left: 40px;
        border: 5px;
    }

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

                <div class=" menu menu-inner-shadow"></div>

                <ul class="menu menu-inner py-1 overflow-auto">


                    <!-- Layouts -->
                    <li class="menu-item ">
                        <div>
                            <a href="<?php echo base_url() . "/Project/project_list" ?>" class="bg-red menu-link ">
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
                <!-- <div class="container bg-white rounded no-margin"> -->
                <!-- Search Bar -->
                <div class="container bg-transparent div-project-list rounded">
                    <h1 class="h1">View Attachment</h1>
                    <br><br>


                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
                <div class="bg-red div-project-list rounded">
                    <h3>Project name : IoT Data Software </h3>

                </div>
                <!-- Fliter Bar -->
                <!-- </div> -->
                <!-- Navbar -->
                <div class="container bg-white div-content rounded" id="layout-page">
                    <div class="container pt-5">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">

                                <table id="example" class="table table-striped" style="width:100%">

                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Subject</th>
                                            <th>Comment</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">


                                        <tr class="table-default">
                                            <td>1</td>
                                            <td><a href="<?php echo base_url() . "/Home/v_Project_info" ?>" class="">จัดการงบประมาณชิ้นส่วนประกอบเครื่องปรับอากาศรถยนต์</a></td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>


                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                        <hr>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class='bx bxs-download' onclick="exportData()"></i></i>Download</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr class="table-default">
                                            <td>2</td>
                                            <td><a href="<?php echo base_url() . "/Home/v_Project_info" ?>" class="">IoT Data Software</a></td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>

                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="table-default">
                                            <td>3</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch Project</strong></td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>



                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="table-default">
                                            <td>4</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch Project</strong></td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>



                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>5</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch Project</strong></td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>



                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>6</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch Project</strong></td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>



                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>7</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch Project</strong></td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>



                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>8</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch Project</strong></td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>



                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>9</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                    Project</strong></td>

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
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>10</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                    Project</strong></td>

                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                            </td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>11</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                    Project</strong></td>

                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                            </td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>12</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                    Project</strong></td>

                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                            </td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>13</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                    Project</strong></td>

                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                            </td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-default">
                                            <td>14</td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>Sketch
                                                    Project</strong></td>

                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">

                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">

                                                </li>
                                            </ul>
                                            </td>
                                            <td><span class="badge bg-label-primary me-1">In Progress</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
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
            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <div id="extwaiokist" style="display:none" v="kdknj" q="583c7e36" c="292.8" i="302" u="1.331" s="03222217" d="1" w="false" e="" m="BMe=" vn="6volk">
        <div id="extwaigglbit" style="display:none" v="kdknj" q="583c7e36" c="292.8" i="302" u="1.331" s="03222217" d="1" w="false" e="" m="BMe="></div>
    </div>
    </div>
    <!-- / Layout wrapper -->

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
    

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });
            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
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