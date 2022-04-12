<body>
  <style>
    .colorheard {

      color: #ABA7A5;

      background-color: #F8F6F5;
    }

    .coloricon {
      width: 1000;

      color: #40E10D
    }

    .save {
      background-color: #02C35B;
      border-color: #02C35B;

    }

    .reset {
      border-color: #FF5353;
      background-color: #FF5353;
    }

    .box {
      display: flex;

    }

    h3 {
      color: #151515;
    }
  </style>
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

      <div class="container g-5 ">
        <h1 class="div-info head1" style='font-size:30px'><i class='bx bx-edit ' style='font-size:50px'></i> Add project </h1>
        <div class="container-add  card div-info mb-3 mt-3 m-5">

          <form style="margin: 40px;" action="<?php echo base_url(); ?>/Add_project/insert_project" method="POST">

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
                      <option value="<?php echo $arr_project[$i]->Company_id ?>"><?php echo $arr_project[$i]->Company; ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Department :</label>
                  <select class="form-select" aria-label="Default select example" id="department"onchange="check_section()">
                    <option disabled selected>Open this select menu</option>
                  </select>
                </div>
                <!-- 1a -->
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Section :</label>
                  <select class="form-select" aria-label="Default select example" id="section" onchange="check_owner()">
                    <option disabled  selected>Open this select menu</option>

                  </select>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="organization" class="form-label">Project Owner :</label>
                  <select  class="form-select" aria-label="Default select example" id="owner" name="owner">
                    <option disabled selected>Open this select menu</option>

                  </select>
                </div>

                <hr style="height:2px;border-width:0;color:gray;background-color:#E6EAE5">

                <!-- Data from2 -->

                <h3>2.Project </h3>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Project name :</label>
                  <div class="input-group input-group-merge">
                    <input class="form-control" type="text" value="" required name="p_name">
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Starting date :</label>
                  <br>
                    <input required class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>" id="html5-date-input" name="date">
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">Status :</label>
                  <select class="form-select" name="status_id" >
                    <option disabled selected value="">Open this select menu</option>
                    <?php foreach($arr_status as $row){ ?>
                      <option value="<?php echo $row->id_status; ?>"><?php echo $row->sta_name; ?></option>
                    <?php }
                    // foreach  ?>
                    

                  </select>

                </div>

                <!-- Data from3 -->

                <hr style="height:2px;border-width:0;color:gray;background-color:#E6EAE5">
                <h3>3.Project Details </h3>
                <div class="mb-3 col-md-6">
                  <label for="zipCode" class="form-label">Details :</label>
                  <textarea required class="form-control" placeholder="Leave a comment here" name="details" id="floatingTextarea2" style="height: 100px"></textarea>

                </div>

                <div class="mb-3 col-md-6">
                  <label for="language" class="form-label">Request Type :</label>

                  <br>

                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="RQ001" name="rq1">
                        Project Consui
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="RQ002"  name="rq2">

                        Bear claw cake biscuit
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="RQ003"  name="rq3">
                        IT Equipment
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label>
                        <input class="form-check-input me-1" type="checkbox" value="RQ004" name="rq4">
                        Server
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


              <!-- Button Save and Reset -->

              <div class="mb-6 col-md-12 modal-footer">
                <br>
                <br>
                <button class="btn btn-primary save" type="submit">Save</button>
                <button class="btn btn-primary reset" type="reset">Reset</button>
              </div>

        </div>

        <script>
          var i = 0;
          $(".box_teaxt").hide()
          $("#yourText").hide()

          $(document).ready(function() {
            $('#department').prop('disabled', true);
            $('#section').prop('disabled', true);
            $('#owner').prop('disabled', true);

            $("#icon").click(() => {
              i = i + 1;
              $("#count_file").val(i);
              $('.a1 ').append("File : " + i + "<div class='row'>" +
                "<div class='col'>" +
                "<input class='form-control' type='file' id='formFile' name='file_"+i+"' style='width:100%'>" +
                "</div>" +
                "<div class='col'>" +
                "<textarea class='box_teaxt form-control mt-0' name='com_"+i+"' placeholder='Leave a comment here' id='floatingTextarea2' style='height: 95px;width:100%' value='comment'></textarea> " +
                "</div>" +
                "</div>" + "<br>");

            });
          });


          function check_hide() {
            var checkBox = document.getElementById("myCheck");
            var text = document.getElementById("text");
            if (checkBox.checked == true) {
              text.style.display = "block";
            } else {
              text.style.display = "none";
            }
          }

          function check_De() {
            var company = document.getElementById("company").value;
            const department = [];
            var data_row = '';
            console.log(company);
            $.ajax({
              type: "post",
              dataType: "json",
              url: "<?php echo base_url(); ?>/Add_project/get_Department",
              data: {
                "company": company
              },
              success: function(data) {
                // console.log("1111");
                // console.log(data);

                data_row += '<option disabled selected>Open this select menu</option>';

                data.forEach((row, index) => {
                  data_row += '<option value="' + row.Department_id + '">' + row.Department + '</option>';
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
            var department= document.getElementById("department").value;
            const section = [];
            var data_row1 = '';
            console.log(department);
            $.ajax({
              type: "post",
              dataType: "json",
              url: "<?php echo base_url(); ?>/Add_project/get_Section",
              data: {
                "department": department
              },
              success: function(data) {
                // console.log("1111");
                // console.log(data);

                data_row1 += '<option disabled selected>Open this select menu</option>';

                data.forEach((row, index) => {
                  data_row1 += '<option value="' + row.	Section_id + '">' + row.Section + '</option>';
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
              url: "<?php echo base_url(); ?>/Add_project/get_owner",
              data: {
                "section": section
              },
              success: function(data) {
                // console.log("1111");
                // console.log(data);

                data_row2 += '<option disabled selected>Open this select menu</option>';

                data.forEach((row, index) => {
                  data_row2 += '<option value="' + row.Emp_ID + '" name="owner">' + row.Empname_th + "  " + row.Empsurname_th + '</option>';
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
          //select Data//
        </script>

        </form>

      </div>
    </div>
  </div>
  </div>