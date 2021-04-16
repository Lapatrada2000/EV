<?php
/*
* v_pos_top
* Display Top Management level
* @input    
* @output
* @author   Piyasak Srijan
* @Create Date 2563-09-01
*/  
?>
<?php
/*
* v_pos_top
* Display Top Management level
* @input    
* @output
* @author Kunanya Singmee
* @Update Date 2563-09-23
*/
/*
* v_pos_top
* Display Top Management level
* @input    
* @output
* @author   Jakkarin Pimpaeng
* @Update Date 2563-10-01
*/  
?>
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript">
    function show_attendance_pe(id) {
        var x = document.getElementById(id).value;
        y = id.substring(12);
        console.log(y);
        var z;
        z = 100 - x;
        if (x > 100) {
            document.getElementById('adt_PE_' + y).innerHTML = "Over 100%";

        } else {
            document.getElementById('adt_PE_' + y).innerHTML = z + "%";
        }

    }

    function show_attendance_ce(id) {
        var x = document.getElementById(id).value;
        y = id.substring(12);
        console.log(y);
        var z;
        z = 100 - x;

        if (x > 100) {
            document.getElementById('adt_CE_' + y).innerHTML = "Over 100%";

        } else {
            document.getElementById('adt_CE_' + y).innerHTML = z + "%";
        }
    }
    </script>

    <style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #24AC6E;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;

    }

    #t01 th {
        background-color: #2c2c2c;
        color: #ffffff;
        text-align: center;

    }

    #t01 td {
        background-color: #f8f8f8;
        color: #2c2c2c;

    }

    #panel_th_topManage {
        background-color: #c1432e;
    }
    </style>
</head>

<body>
    <div class="form-group" id="">
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="col-lg-12">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3" id="panel_th_topManage">
                    <div class="col-xl-12">
                        <h2 class="m-0 font-weight-bold text-primary">
                            <a href="<?php echo base_url(); ?>/Evs_position/main_position">
                                <i class="fa fa-chevron-circle-left text-white"></i>
                            </a>
                            <i class="fa fa-user text-white"></i>
                            <font color="white">Manage position</font>
                        </h2>
                    </div>
                    <!-- style="font-size:40px;color:white" -->
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Start Widgets -->
                        <div class="col-lg-6 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="stat">


                                                <?php 

                                            $pos_level_from;
                                            
                                            if($pos_level_from == 8){

                                                echo "Top Management Level";

                                            }
                                            // Top Management Level

                                            else if($pos_level_from == 6){

                                                echo "Middle Management Level";

                                            }
                                            // Middle Management Level

                                            else if($pos_level_from == 5){

                                                echo "Junior Management Level";

                                            }
                                            // Junior  Management Level

                                            else if($pos_level_from == 4){

                                                echo "Staff";

                                            }
                                            // Staff

                                            else if($pos_level_from == 2){

                                                echo "Officier";

                                            }
                                            // Officier
     
                                            ?>
                                                <!-- display Level  -->

                                            </div>
                                            <div class="text-left dib">
                                                <div class="stat-text"><span class="count">
                                                        <?php 
                                            $count_pos = 0;
                                            // count of position in level
                                            // start foreach
                                            foreach ($info_pos->result() as $row) {
                                                $count_pos++;
                                            } 
                                            // end foreach                                           
                                            echo $count_pos;
                                            // display count of position
                                            ?>
                                                    </span></div>
                                                <div class="stat-heading">Positions</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widgets  -->
                        <!-- Start Widgets -->
                        <div class="col-lg-6 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-five">
                                        <div class="stat-icon dib">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="stat">Fiscal year : <?php echo date("Y"); ?> </div>
                                            <div class="text-left dib">
                                                <br>

                                                <!-- start patten grade -->
                                                <div class="stat">Grade pattern :
                                                    <?php 
                                                $patten = "";

                                            // start foreach
                                            foreach ($patt_year->result() as $row) {
                                                $year = $row->yap_pattern;
                                            } 
                                            // end foreach
                                            
                                            echo "Pettern ".$year;
                                            // display Grade pattern

                                            ?>
                                                </div>
                                                <!--End  pattern grade -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widgets  -->
                    </div>
                    <!-- Start table show position  -->
                    <form method="post"
                        action="<?php echo base_url();?>/Evs_position/insert_ps_all/<?php echo $pos_level_from ?>">
                        <table id="t01" border="1" class="table" width="100%">
                            <thead>
                                <tr>
                                    <th rowspan="1">#</th>
                                    <th width="28%">Positions Title</th>
                                    <th width="10%">Status</th>
                                    <th>Tools</th>
                                    <th width="20%">Form</th>
                                    <th width="15%">Form ratio (%)</th>
                                    <th width="15%">Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Start form insert information -->

                                <?php
                            $i = 0;
                            $num = 0;
                            foreach ($info_pos->result() as $row) {
                            $pos_id[] = $row->pos_id;
                            // echo $pos_id[$i];
                            // echo $i;
                            ?><input type="input" name="pos_id[]" value="<?php echo "".$row->pos_id; ?>" hidden>
                                <?php
                            $i++;
                            $num = $i;             
                            ?>

                                <tr>
                                    <td rowspan="2" align="center"><?php echo $i; ?></td>
                                    <td rowspan="2"><?php echo $row->pos_name; ?></td>
                                    <td align="center">
                                        <label class="switch">
                                            <input type="checkbox" id="<?php echo "statusPE".$i; ?>"
                                                value="<?php echo $row->pos_id; ?>" name="checked_PE[] " checked>
                                            <?php
                                    
                            ?>
                                            <span class="slider round">
                                            </span>
                                        </label>
                                    </td>
                                    <td>
                                        <font color="black">
                                            <center>PE</center>
                                        </font>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <!-- Start select  -->
                                            <div class="col-sm-12">
                                                <select class="form-control" id="<?php echo "formPE_".$i; ?>"
                                                    name="formPE[]">
                                                    <option value="">Select Form</option>
                                                    <option value="G&O">G&O</option>
                                                    <option value="MBO">MBO</option>
                                                    <option value="MHRD">MHRD</option>
                                                </select>
                                            </div>
                                            <!-- End select  -->
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" placeholder="Ex.50"
                                                    name="form_adt_PE[]" id="<?php echo "form_adt_PE_".$i; ?>"
                                                    onchange="show_attendance_pe(id)" min="0" max="100" required>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p id="<?php echo "adt_PE_".$i; ?>" align="center">-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <label class="switch">
                                            <input type="checkbox" id="<?php echo "statusCE".$i; ?>"
                                                value="<?php echo $row->pos_id; ?>" name="checked_CE[]" checked>
                                            <span class="slider round">
                                            </span>
                                        </label>
                                    </td>
                                    <td>
                                        <font color="black">
                                            <center>CE</center>
                                        </font>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <select class="form-control" id="<?php echo "formCE_".$i; ?>"
                                                    name="formCE[]">
                                                    <option value="">Select Form</option>
                                                    <option value="GCM">GCM</option>
                                                    <option value="ACM">ACM</option>
                                                    <option value="Attitude & Behavior">Attitude & Behavior</option>
                                                    <option value="ACM & Attitude">ACM & Attitude</option>

                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" placeholder="Ex.50"
                                                    name="form_adt_CE[]" id="<?php echo "form_adt_CE_".$i; ?>"
                                                    onchange="show_attendance_ce(id)" min="0" max="100" required>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p id="<?php echo "adt_CE_".$i; ?>" align="center">-</p>
                                    </td>
                                </tr>
                                <?php } // foreach ?>
                                <br>

                                <!-- End form insert information -->
                            </tbody>
                            <!-- tbody  -->
                        </table>

                        <!-- End table show position  -->
                        <div class="row">
                            <div class="col-sm-12" align="right">
                                <a href="<?php echo base_url(); ?>/Evs_position/main_position">
                                    <button type="button" class="btn btn-secondary">Back</button>
                                </a>
                                <!-- Back to main position  -->
                                <button type="submit" class="btn btn-success" id="save">Save</button>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <hr>

                    <!-- Start Description -->
                    <div>
                        <h4 class="text">Description</h4><br>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Status : Form Status</h5><br>
                        </div>
                        <div class="col-sm-6">
                            <h5>Tools : Evaluation tools</h5><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2">
                            <p>Enable form</p>
                            <label class="switch"><input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <p>Disable form</p>
                            <label class="switch"><input type="checkbox" unchecked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <p>PE : Performent Evaluation</p>
                            <p>CE : Compentency Evaluation</p>
                        </div>
                    </div>
                    <!-- Status  -->
                    <hr>
                    <!-- End Description -->
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- /.container-fluid -->
    <script>
    // $( document ).ready(function() {
    //     $(this).closest('tr').find(":input:not(:first)").attr('disabled', !this.unchecked);
    // });
    $('tr td:first-child input[type="checkbox"]').click(function() {
        //enable/disable all except checkboxes, based on the row is checked or not
        $(this).closest('tr').find(":input:not(:first)").attr('disabled', !this.checked);

    });
    $('tr td:not(:first-child) input[type="checkbox"]').click(function() {
        //enable/disable all except checkboxes, based on the row is checked or not
        $(this).closest('tr').find(":input:not(:first)").attr('disabled', !this.checked);

    });
    </script>
</body>

</html>