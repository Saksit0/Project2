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

    /* .no-margin {
        margin: 0 !important;
    } */

    .add-padding {
        padding: 15px;
    }

    .font-black {
        color: black;
    }

    .row-center {
        padding: 10px;
    }

    .bg-strating {
        background-color: #fff2d6 !important;
        border: 2px;
        border-style: solid;
        border-color: #ffab00;
    }

    .bg-inprogress {
        background-color: #e7e7ff !important;
        border: 2px;
        border-style: solid;
        border-color: #696cff;
    }

    .bg-finished {
        background-color: #e8fadf !important;
        border: 2px;
        border-style: solid;
        border-color: #71dd37;
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
                <!-- <div class="container bg-white rounded no-margin"> -->
                <!-- Search Bar -->
                <div class="container bg-transparent div-project-list rounded">
                    <h1 class="h1">Project List</h1> <br>
                </div>
                <!-- Fliter Bar -->
                <!-- </div> -->
                <!-- Navbar -->
                <div class="container bg-white div-static rounded" id="layout-page">

                    <div class="row-center row">
                        <div class="static-margin col-md-4">
                            <div class="bg-all-project card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1" style="color: #BE7CFF ">All project</span>
                                    <h3 class="font-black card-title mb-2" style="color: #BE7CFF;">4</h3>
                                    <!-- <small class="font-black fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->

                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-strating card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1" style="color: #ffab00;">Starting</span>
                                    <h3 class="font-black card-title mb-2" style="color: #ffab00;">1</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-inprogress card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1" style="color: #696cff;">In Progress</span>
                                    <h3 class="font-black card-title mb-2" style="color: #696cff;">2</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-finished card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1" style="color: #71dd37;">Finished</span>
                                    <h3 class="font-black card-title mb-2" style="color: #71dd37;">1</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                        <div class="static-margin mb-3 col-md-2">
                            <div class="bg-cancel card">
                                <div class=" card-body">

                                    <span class="font-black fw-semibold d-block mb-1 " style="color: #ff3e1d;">Cancel</span>
                                    <h3 class="font-black card-title mb-2" style="color: #ff3e1d;">0</h3>
                                    <!-- <small class="font-black fw-semibold"></i> 72.80%</small> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="container bg-white div-content rounded" id="layout-page">
                    <div class="container pt-5">

                        <div class="table-responsive">

                            <?php
                            $i = 0;
                            ?>
                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Project name</th>
                                        <th>Status</th>
                                        <th>Start</th>
                                        <th>Request</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody id="myTable">
                                    <?php $n = 0;
                                    for ($i = 0; $i < count($arr_project); $i++) { ?>
                                        <?php

                                        $n++;
                                        ?>
                                        <tr class="table-default">
                                            <td><?php echo $n ?></td>
                                            <td><a href="<?php echo base_url() . "/Project_info/show_project_info/" . $arr_project[$i]->id_project ?>" class=""> <?php echo $arr_project[$i]->p_name ?></a></td>
                                            <td>

                                                <?php if ($arr_project[$i]->sta_name == "Start") { ?>
                                                    <span class="badge bg-label-warning me-1">Start</span>
                                                <?php } else if ($arr_project[$i]->sta_name == "Finished") { ?>
                                                    <span class="badge bg-label-success me-1">Finished</span>
                                                <?php } else if ($arr_project[$i]->sta_name == "Cancelled") { ?>
                                                    <span class="badge bg-label-danger me-1">Cancelled</span>
                                                <?php } else if ($arr_project[$i]->sta_name == "In Progress") { ?>
                                                    <span class="badge bg-label-primary me-1">In Progress</span>
                                                <?php } ?>

                                            </td>
                                            <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong><?php echo $arr_project[$i]->date ?></strong> </td>
                                            <td align="center">



                                                <!-- <i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong><?php echo $arr_project[$i]->date ?></strong><br> -->
                                                <!-- <i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong><?php echo $arr_project[$i]->date ?></strong>  -->

                                            <td>
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
                                                        <a class="dropdown-item" href="<?php echo base_url('Edit_Project/get_Edit_Project'); ?>"><i class="bx bx-edit-alt me-1"></i> Edit Project</a>
                                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);"><i class='bx bx-paperclip'></i> Add Attachment</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class='bx bxs-download'></i> Download</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print'
                ],
                "aoColumns": [
                    null,
                    null,
                    null,
                    {
                        "sType": "date-uk"
                    },
                    null,
                    null
                ]
            });

        });
        jQuery.extend(jQuery.fn.dataTableExt.oSort, {
            "date-uk-pre": function(a) {
                var ukDatea = a.split('/');
                return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
            },

            "date-uk-asc": function(a, b) {
                return ((a < b) ? -1 : ((a > b) ? 1 : 0));
            },

            "date-uk-desc": function(a, b) {
                return ((a < b) ? 1 : ((a > b) ? -1 : 0));
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        $(document).ready(function() {
            let i = 0;
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
        // console.log('frame');
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