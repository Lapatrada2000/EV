<?php
/*
* v_indicator_attitude_insert
* Add Indicator of Attitude
* @input  -
* @output -
* @author Piyasak Srijan
* @Create Date 2563-09-01
*/

/*
* v_indicator_attitude_insert
* Add Indicator of Attitude 
* @input  -
* @output attitude for insert
* @author Kunanya Singmee
* @Update Date 2563-09-25
*/

/*
* v_indicator_attitude_insert
* Add Indicator of Attitude 
* @input  -
* @output attitude for insert
* @author Jirayu​ Jaravichit
* @Update Date 2563-09-27
*/
?>
<?php
    $row = $info_pos->row();
?>
<input type="hidden" id="value_psl_id" name="value_psl_id" value="<?php echo $row->psl_id; ?>">
<input type="hidden" id="value_pos_id" name="value_pos_id" value="<?php echo $info_pos_id; ?>">
<input type="hidden" id="value_pos_level" name="value_pos_level" value="<?php echo $row->psl_position_level; ?>">
<input type="hidden" id="value_pos_name" name="value_pos_name" value="<?php echo $row->pos_name; ?>">
<script>
var value_pos_id = document.getElementById("value_pos_id").value; // position id
var value_psl_id = document.getElementById("value_psl_id").value; // position level id
var value_pos_level = document.getElementById("value_pos_level").value; // position level name
var value_pos_name = document.getElementById("value_pos_name").value; // position name
$(document).ready(function() {
    var index = 1; //index table
    $('#add').click(function() {
        index++; //upate inextable
        $('#dynamic_field').append(
            '<div id="row' + index + '">' +
            // id=row 
            '<!-- Start input Identification -->' +
            '<div class="row">' +
            '<div class="col-6">' +
            '<div class="row">' +
            '<div class="col-4" align="right">' +
            '<label for="textarea-input" class=" form-control-label">Identification EN :</label>' +
            '</div>' +
            '<div class="col-8"><textarea name="arr_add_iden_en[]" id="text-Key" rows="4"' +
            'placeholder="Enter Identification" class="form-control" style="resize: none"' +
            'required></textarea>' +
            '</div>' +
            '</div>' +
            '<!-- row -->' +
            '</div>' +
            '<!-- col-6-1  -->' +
            '<div class="col-6">' +
            '<div class="row">' +
            '<div class="col-4" align="right">' +
            '<label for="textarea-input" class=" form-control-label">Identification TH :</label>' +
            '</div>' +
            '<!-- col-4  -->' +
            '<div class="col-8"><textarea name="arr_add_iden_th[]" id="text-Key" rows="4"' +
            'placeholder="Enter Identification" class="form-control" style="resize: none"' +
            'required></textarea>' +
            '</div>' +
            '<!-- col-8  -->' +
            '</div>' +
            '<!-- row -->' +
            '</div>' +
            '<!-- col-6-2  -->' +
            '</div>' +
            '<!-- row  -->' +
            '<br>' +
            '<!-- End input Identification -->' +

            '<!-- Start input position  -->' +
            '<div class="row">' +
            '<div class="col-6">' +
            '<div class="row">' +
            '<div class="col-4" align="right">' +
            '<label for="textarea-input" class=" form-control-label">Position level:</label>' +
            '</div>' +
            '<!-- col-4  -->' +
            '<div class="col-8">' +
            '<select id="pos_lv_' + index +
            '" class="form-control" onchange="add_pos_level(id) ">' +
            '<option value= "'+value_psl_id+'">'+value_pos_level+'</option>' +
            '</select>' +
            '</div>' +
            '<!-- seclect position level  -->' +
            '</div>' +
            '<!-- row  -->' +
            '</div>' +
            '<!-- col-6  -->' +
            '<div class="col-6" id="add_table_' + index + '">' +

            // Start col-12 
            '<div class="row">' +

            // Start label position +
            '<div class="col-4" align="right">' +
            '<label for="textarea-input"' +
            'class=" form-control-label">Position :</label>' +
            '</div>' +
            // col-2 
            // End label position

            // Start select 
            '<div class="col-8">'+
            '<select name="arr_add_pos[]" id="select" class="form-control">' +

            '<option value="' + value_pos_id + '">' + value_pos_name + '</option>' +

            '</select>' +
            '</div>' +
            // End select col-10
            '</div>' +

            '</div>' +
            '<!-- include form function add_pos_level -->' +
            '</div>' +
            '<!-- row  -->' +

            '<br>' +

            '<div class="col-1"></div>' +

            '<!-- End input position  -->' +

            '<div class="row">' +
            // start col-12 button
            '<div class="col-12" align="right">' +
            '<button type="button" name="remove" id="' + index +
            '" class="btn btn-danger btn_remove"><i class="fa fa-times"> Delete </i> </button>' +
            '</div>' +
            // end col-12 button
            '</div>' +
            // End row button 

            '<hr>' +

            '</div>'
            // id row 


        );
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id"); //remove Identification
        $('#row' + button_id + '').remove();
    });
});
</script>
<!-- Start Css -->
<style>
#panel {
    background-color: #c1432e;
}

#add_category {
    width: 30%;
}
</style>
<!-- End Css -->
<!-- Start Page Content -->
<div class="col-lg-12">
    <!-- Start card shadow mb-4 -->
    <div class="card shadow mb-4">
        <!-- Start Card header -->
        <div class="card-header py-3" id="panel">
            <div class="col-xl-12">
                <h1 class="m-0 font-weight-bold text-primary">
                <a href="<?php echo base_url(); ?>/Evs_attitude_form/indicator_attitude_table/<?php echo $info_pos_id; ?>">
                        <i class="fa fa-chevron-circle-left text-white"></i>
                    </a>
                    <i class="fa fa-pencil-square text-white"></i>
                    <font color="white">Items from Attitude&Behavior</font>
                </h1>
            </div>

        </div>
        <!-- End Card header -->
        <!-- Start Card body -->
        <div class="card-body">
            <!-- Start Form : Attitude -->
            <form class="form-horizontal" id="form_indicator_attitude" method="post"
                action="<?php echo base_url(); ?>/Evs_attitude_indicators_form/indicator_attitude_insert">
                <h3 class="m-0 ">Please increase Items of form Attitude & Behavior</h3><br>

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
                                            $row = $info_pos->row();
                                            echo $row->psl_position_level;
                                                // display level of position
                                            ?>
                                        </div>
                                        <div class="text-left dib">
                                            <div class="stat-text"><span>
                                                    <?php 
                                                    echo $row->pos_name;
                                                    // display name of position

                                                    ?>

                                                </span></div>
                                            <div class="stat-heading">Position</div>
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
                                        <div class="stat">Fiscal year :
                                            <?php $row = $info_pattern_year->row();  echo $row->pay_year; ?> </div>
                                        <div class="text-left dib">
                                            <br>

                                            <!-- start patten grade -->
                                            <div class="stat">Grade pattern :
                                                <?php 
                                                
                                                echo $row->pay_pattern;
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


                <!-- Start table  -->
                <div class="table" id="dynamic_field">

                    <!-- Start input Category  -->
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4" align="right">
                                    <label for="textarea-input" class=" form-control-label">Category EN :</label>
                                </div>
                                <!-- col-4  -->
                                <div class="col-8">
                                    <textarea name="add_category_en" id="textarea-input" rows="3"
                                        placeholder="Enter Category" class="form-control" style="resize: none"
                                        required></textarea>
                                </div>
                                <!-- col-8  -->
                            </div>
                            <!-- row  -->
                        </div>
                        <!-- col-6-1  -->

                        <div class="col-6">
                            <div class="row">
                                <div class="col-4" align="right">
                                    <label for="textarea-input" class=" form-control-label">Category TH :</label>
                                </div>
                                <!-- col-4  -->
                                <div class="col-8">
                                    <textarea name="add_category_th" id="textarea-input" rows="3"
                                        placeholder="Enter Category" class="form-control" style="resize: none"
                                        required></textarea>
                                </div>
                                <!-- col-8  -->
                            </div>
                            <!-- row  -->
                        </div>
                        <!-- col-6-2  -->
                    </div>
                    <!-- End input Category  -->
                    <hr>

                    <!-- Start input Identification -->
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4" align="right">
                                    <label for="textarea-input" class=" form-control-label">Identification EN :</label>
                                </div>
                                <div class="col-8"><textarea name="arr_add_iden_en[]" id="text-Key" rows="2"
                                        placeholder="Enter Identification" class="form-control" style="resize: none"
                                        required></textarea>
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                        <!-- col-6-1  -->
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4" align="right">
                                    <label for="textarea-input" class=" form-control-label">Identification TH :</label>
                                </div>
                                <!-- col-4  -->
                                <div class="col-8"><textarea name="arr_add_iden_th[]" id="text-Key" rows="2"
                                        placeholder="Enter Identification" class="form-control" style="resize: none"
                                        required></textarea>
                                </div>
                                <!-- col-8  -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- col-6-2  -->
                    </div>
                    <!-- row  -->
                    <br>
                    <!-- End input Identification -->
                    <?php 
                        $row = $info_pos->row();
                    ?> 
                    <!-- Start input position  -->
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-4" align="right">
                                    <label for="textarea-input" class=" form-control-label">Position level:</label>
                                </div>
                                <!-- col-4  -->
                                <div class="col-8">
                                    <select id="pos_lv_1" class="form-control">
                                        <option value="<?php $row->psl_id; ?>"><?php echo $row->psl_position_level; ?></option>
                                    </select>
                                </div>
                                <!-- seclect position level  -->
                            
                            </div>
                            <!-- row  -->
                        </div>

                        <!-- col-6  -->
                    <div class="col-6" id="add_table_1">
                        <div class="row">
                            <div class="col-4" align="right">
                                <label for="textarea-input" class=" form-control-label">Position :</label>
                            </div>
                            <div class="col-8">
                                <select name="arr_add_pos[]" id="select" class="form-control">
                                    <option value="<?php echo $info_pos_id; ?>"> <?php echo $row->pos_name; ?> </option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <!-- include form function add_pos_level -->
                    </div>
                    <!-- row  -->

                    <hr>

                    <div class="col-1"></div>

                </div>
                <!-- End input position  -->


                <!-- End Form : Attitude-->
                <!-- Start row -->
                <div class="row">
                    <div class="col-sm-12" align="right">

                        <button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i> Add</button>
                        <br><br>
                        <a href="<?php echo base_url(); ?>/Evs_attitude_form/indicator_attitude_table/<?php echo $info_pos_id; ?>">
                                <button type="button" class="btn btn-secondary float-left">Back</button>
                            </a>
                        <!-- Back to main position  -->

                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    <!-- col-12  -->
                </div>
                <!-- end row -->
            </form>
            <!-- end form method post   -->
        </div>
        <!-- End Class table  -->
    </div>
    <!-- end Card body -->
</div>
<!-- end card shadow mb-4 -->
</div>
<!-- end Page Content -->