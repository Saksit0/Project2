  <style>
    .colorheard {

      color: #ABA7A5;

      background-color: #F8F6F5;
    }
    .coloricon{
     width: 1000;
      
      color:#40E10D
    }
    .menu-vertical .menu-inner>.menu-item .menu-link {
        margin: 0rem 0rem !important;
    }
    .save{
      background-color:#02C35B ;
      border-color:#02C35B ;
      
    }
    .reset{
      border-color:#FF5353;
      background-color:#FF5353;
    }
    .head1{
       color:0000;
    }
    .grid{
        border: 0000;
    };
  </style>
  
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">

                <!-- LOGO ของเว็บไซต์ -->
                <div class="app-brand no-margin " style="background-color: #DC0032; height:75px ">

                    <img class="card-img-top " src="<?= base_url(); ?>/assets/img/logo.png">

                </div>
                <!-- LOGO ของเว็บไซต์ -->

                <div class=" menu menu-inner-shadow"></div>

                <ul class="menu menu-inner py-1 overflow-auto">


                    <!-- Layouts -->
                    <li class="menu-item ">
                        <div>
                            <a href="<?php echo base_url() . "/Home/Project_List" ?>" class="menu-link">
                                <i class='bx bx-list-ul' style='font-size:25px'></i> &emsp;
                                <div data-i18n="Analytics" class="menu">Project List</div>
                            </a>
                        </div>
                    </li>
                    <li class="menu-item ">
                        <a href="<?php echo base_url() . "/Edit_Project/get_Edit_project" ?>" class="menu-link">
                            <i class='bx bx-list-plus' style='font-size:25px'></i> &emsp;
                            <div data-i18n="Analytics" class="menu">Add project</div>
                        </a>
                    </li>

                </ul>

            </aside>
            <!-- / Menu -->
      

      <!-- Layout container -->
      <div class="container g-5 ">
        <h1 class="div-info head1" style='font-size:30px'><i class='bx bx-edit ' style='font-size:50px'></i> Add project </h1>
        <div class="container-add  card div-info mb-3 mt-3 m-5">

          <form style="margin: 40px;" action="">

            <!--Data from1  -->

            <section>
              <h3>1.Project Owner </h3>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Company :</label>
                  <select class="form-select" id="company" aria-label="Default select example" onchange="check_De()">
                    <option disabled selected>Open this select menu</option>
                    <?php
                    for ($i = 0; $i < count($arr_project); $i++) {
                    ?>
                      <option value="<?php echo $arr_project[$i]->Company_id ?>" name="check_compa"><?php echo $arr_project[$i]->Company; ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Department :</label>
                  <select class="form-select" aria-label="Default select example" id="department" onchange="check_section()">
                    <option disabled selected>Open this select menu</option>
                  </select>
                </div>
                <!-- 1a -->
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Section :</label>
                  <select class="form-select" aria-label="Default select example" id="section" onchange="check_owner()">
                    <option disabled selected>Open this select menu</option>

                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="organization" class="form-label">Project Owner :</label>
                  <select class="form-select" aria-label="Default select example" id="owner">
                    <option disabled selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>

                <hr style="height:2px;border-width:0;color:gray;background-color:#E6EAE5">

                <!-- Data from2 -->

                <h3>2.Project </h3>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Project name :</label>
                  <div class="input-group input-group-merge">

                    <input class="form-control" type="text" value="" id="html5-text-input" name="project" required>
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Starting date :</label>
                  <br>
                  <form action="/action_page.php">

                    <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" name="date">

                  </form>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">Status :</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="ST001">Start</option>
                    <option value="ST002">In Progress </option>
                    <option value="ST003">Finished</option>
                    <option value="ST004">Cancelled</option>
                   
                  </select>

                </div>

                <!-- Data from3 -->

                <hr style="height:2px;border-width:0;color:gray;background-color:#E6EAE5">
                <h3>3.Project Details </h3>
                <div class="mb-3 col-md-6">
                  <label for="zipCode" class="form-label">Details :</label>
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="Detail"></textarea>

                </div>

                <div class="mb-3 col-md-6">
                  <label for="language" class="form-label">Request Type :</label>

                  <br>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="RQ001">
                        Project Consui
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="RQ002">

                        Co-adviser
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="RQ003">
                        IT Equipment
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="RQ004">
                        Server
                      </label>
                    </div>

                    <div class="mb-0 col-md-3">
                      <label>
                        <input class="hide_check form-check-input me-1" type="checkbox" id="myCheck" onclick="check_hide() " value="RQ005">
                        Others 
                      </label>
                    </div>
                    <div class="mb-3 col-md-6 ">
                      <label>
                        <input class="form-control" type="text" value="detail" id="text" style="width: 95%; display:none">

                      </label>
                    </div>
                  </div>


                </div>
                <!-- Button uplode -->

                <div class="row">
                  <div class="mb-3 col-md-6">
                    Add Attachments :
                    <i class="bi bi-plus-square coloricon m-1 mt-10" id="icon" type="button" style='font-size:30px'></i>
                  </div>
                </div>

                <!-- Uplode file -->

                <div>
                  <p class="a1"><br></p>
                </div>

              </div>

                <!-- <div class="col-4 col-sm-5 text-end"> -->

                  <br>
                  <br>

                  <button class="btn btn-primary save" type="submit" >Save</button>
                  &emsp;<button type="button" class="btn btn-danger" onclick="history.back()">Cancel</button>
                </div>
       
              
              </div>

          </form>

        </div>
      </div>
    </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script>
  function test() {
      window.location="<?php echo base_url();?>/Home/v_Project_info";
    }
</script> -->


<script>
  $(document).ready(function() {
            $('#department').prop('disabled', true);
            $('#section').prop('disabled', true);
            $('#owner').prop('disabled', true);


          
          });

function check_De() {
            var company = document.getElementById("company").value;
            const department = [];
            var data_row = '';
            console.log(company);
            $.ajax({
              type: "post",
              dataType: "json",
              url: "<?php echo base_url(); ?>/Edit_Project/get_Department",
              data: {
                "company": company
              },
              success: function(data) {
                // console.log("1111");
                // console.log(data);

                data_row += '<option disabled selected>Open this select menu</option>';

                data.forEach((row, index) => {
                  data_row += '<option value="' + row.Department_id + '"name="check_De">' + row.Department + '</option>';
                })
                // foreach
                console.log(data_row);
                $("#department").html(data_row);
                $('#department').prop('disabled', false);

              },
              // success
              error: function(data) {
                console.log("9999: error");

              }
              // error
            });
            // ajax
          }
          // onchange="check_De()"

          function check_section() {
            var department = document.getElementById("department").value;
            const section = [];
            var data_row1 = '';
            console.log(department);
            $.ajax({
              type: "post",
              dataType: "json",
              url: "<?php echo base_url(); ?>/Edit_Project/get_Section",
              data: {
                "department": department
              },
              success: function(data) {
                // console.log("1111");
                // console.log(data);

                data_row1 += '<option disabled selected>Open this select menu</option>';

                data.forEach((row, index) => {
                  data_row1 += '<option value="' + row.Section_id + '"name="check_sec">' + row.Section + '</option>';
                })
                // foreach
                console.log(data_row1);
                $("#section").html(data_row1);
                $('#section').prop('disabled', false);

              },
              // success
              error: function(data) {
                console.log("9999: error");

              }
              // error
            });
            // ajax
          }

          function check_owner() {
            var section = document.getElementById("section").value;
            const owner = [];
            var data_row2 = '';
            console.log(section);
            $.ajax({
              type: "post",
              dataType: "json",
              url: "<?php echo base_url(); ?>/Edit_Project/get_owner",
              data: {
                "section": section
              },
              success: function(data) {
                // console.log("1111");
                // console.log(data);

                data_row2 += '<option disabled selected>Open this select menu</option>';

                data.forEach((row, index) => {
                  data_row2 += '<option value="' + row.Sectioncode_ID + '" name="owner">' + row.Empname_th +"  " +row.Empsurname_th+ '</option>';
                })
                // foreach
                console.log(data_row2);
                $("#owner").html(data_row2);
                $('#owner').prop('disabled', false);

              },
              // success
              error: function(data) {
                console.log("9999: error");

              }
              // error
            });
            // ajax
          }
  
</script>