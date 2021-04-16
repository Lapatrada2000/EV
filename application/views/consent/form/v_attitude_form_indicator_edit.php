<?php
    /*
    * v_indicator_attitude_upddate
    * Add Indicator of Attitude
    * @input  -
    * @output -
    * @author Piyasak Srijan
    * @Create Date 2563-09-01
    */

    /*
    * v_ind_attitude_update_data
    * Add Indicator of Attitude 
    * @input  id position and data cattagory  
    * @output id position and data cattagory to database  
    * @author Kunanya Singmee
    * @Update Date 2563-09-25
    */

    /*
    * v_ind_attitude_update_data
    * Add Indicator of Attitude 
    * @input  id position and data cattagory
    * @output id position and data cattagory to database  
    * @author Pondruthai Loekngam
    * @Update Date 2563-09-28
    */
    /*
    * v_ind_attitude_update_data
    * Add Indicator of Attitude 
    * @input  id position and data cattagory  
    * @output id position and data cattagory to database  
    * @author Jakkarin Pimpaeng
    * @Update Date 2563-10-16
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
            '<option value= "' + value_psl_id + '">' + value_pos_level + '</option>' +
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
            '<div class="col-8">' +
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
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">

            <!-- Start Card Header -->
            <div class="card-header py-3" id="panel">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 class="m-0 font-weight-bold text-primary">
                            <a
                                href="<?php echo base_url(); ?>/Evs_attitude_form/indicator_attitude_table/<?php echo $info_pos_id; ?>">
                                <i class="fa fa-chevron-circle-left text-white"></i>
                            </a>
                            <i class="fa fa-pencil-square text-white"></i>
                            <font color="white">Edit Items from Attitude&Behavior</font>
                        </h1>
                    </div>
                    <!-- style="font-size:40px;color:white" -->
                </div>
                <!-- row  -->
            </div>
            <!-- End Card Header -->


            <!-- Start Card body -->
            <div class="card-body">
                <!-- Start Form : Attitude -->
                <form class="form-horizontal" id="form_indicator_attitude" method="post"
                    action="<?php echo base_url(); ?>/Evs_attitude_form/indicator_attitude_update/<?php echo $info_pos_id; ?>">
                    <h3 class="m-0 ">Please edit indicator of form Attitude & Behavior</h3><br>
                    <!-- Start Card body -->   
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
                                                    <?php $row = $info_pattern_year->row();  echo $row->pay_year; ?>
                                                </div>
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

                            <!-- ------------------------------- Start Category ------------------------------ -->

                            <!-- Start input Category  -->
                            <div class="row">

                                <div class="col-2" align="right">
                                    <label for="textarea-input" class=" form-control-label">Category EN :</label>
                                </div>
                                <!-- col-4  -->
                                <div class="col-3">
                                    <?php //Start foreach
                                     foreach($cattagory_table_id->result() as $row ){
                                         $ctg_category_detail_en  = $row->ctg_category_detail_en; //save category en
                                         $ctg_category_detail_th  = $row->ctg_category_detail_th; //save category th
                                         $cattagory_id  = $row->ctg_id; //save category id
                                         }//End foreach
                                         ?>
                                    <textarea name="up_date_category_en" id="textarea-input" rows="1"
                                        placeholder="Enter Category EN" class="form-control" style="resize: none"
                                        required><?php echo $ctg_category_detail_en ?></textarea>


                                </div>
                                <!-- text-area  -->
                                <div class="col-2" align="right">
                                    <label for="textarea-input" class=" form-control-label">Category TH :</label>
                                </div>
                                <div class="col-3">
                                    <textarea name="up_date_category_th" id="textarea-input" rows="1"
                                        placeholder="Enter Category TH" class="form-control" style="resize: none"
                                        required><?php echo $ctg_category_detail_th ?></textarea>
                                    <input type="input" name="category_id" value="<?php echo $cattagory_id  ?>" hidden>
                                </div>
                            </div>
                            <!-- End input Category  -->
                            <hr>
                            <!-- ------------------------------- End Category -------------------------------->

                            <!-- ------------------------------- Start Identification ------------------------------ -->

                            <!-- Start input Identification -->
                            <?php $index = 1; //index table
                                  $arry_index = 0; //index for remove identification
                              //Start foreach
                              foreach($cattagory_table->result() as $row ){ ?>
                            <!-- for loop  -->

                            <div class="row" id="row<?php echo $arry_index; ?>">
                                <input type="input" name="arr_identification_id[]" value="<?php echo $row->idf_id  ?>"
                                    hidden>


                                <!-- Start section-1 col-1-4 -->
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-2" align="right">
                                            <label for="textarea-input" class=" form-control-label">
                                                Identification EN :
                                            </label>
                                        </div>
                                        <!-- col-4 Label  -->

                                        <div class="col-4">
                                            <textarea name="arr_update_iden_en[]" placeholder="Enter Identification en"
                                                class="form-control" style="resize: none"
                                                required><?php echo $row->idf_identification_detail_en; ?></textarea>
                                        </div>
                                        <!-- col-8  text-area  -->
                                        <div class="col-2" align="right">
                                            <label for="textarea-input" class=" form-control-label">
                                                Identification TH :
                                            </label>
                                        </div>
                                        <!-- col-4 Label  -->

                                        <div class="col-4">
                                            <textarea name="arr_update_iden_th[]" placeholder="Enter Identification th"
                                                class="form-control"
                                                required><?php echo $row->idf_identification_detail_th; ?></textarea>
                                        </div>
                                        <!-- col-8  text-area  -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!--End section-1 col-1-4 -->

                                <!-- Start section-1 col-5-12 -->
                                <div class="col-6">
                                    <div class="row">

                                        <!-- Start Level  -->
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="col-6">
                                                        <label for="textarea-input" class=" form-control-label">
                                                            Position level :
                                                        </label>
                                                    </div>
                                                    <!-- col-2  -->

                                                    <?php 
                                                        $text_selected_top = "";     //check show position manage top
                                                        $text_selected_middle ="";   //check show position manage middle
                                                        $text_selected_Junior ="";   //check show position manage Junior
                                                        $text_selected_Staf ="";    //check show position manage Staf
                                                        $text_selected_Officier =""; //check show position manage Officier
                                                        //Start if
                                                        if($row->pos_psl_id =="1" ){$text_selected_top = 'selected';}
                                                        //End if
                                                        //Start if
                                                        if($row->pos_psl_id =="2" ){$text_selected_middle = 'selected';}
                                                        //End if
                                                        //Start if
                                                        if($row->pos_psl_id =="3" ){$text_selected_Junior = 'selected';}
                                                        //End if
                                                        //Start if
                                                        if($row->pos_psl_id =="4" ){$text_selected_Staf = 'selected';}
                                                        //End if
                                                        //Start if
                                                        if($row->pos_psl_id =="5" ){$text_selected_Officier = 'selected';}
                                                        //End if
                                                            ?>

                                                    <div class="col-10">
                                                        <select id="pos_lv_<?php echo $arry_index; ?>"
                                                            class="form-control" onchange="pos_level(id) ">
                                                            <option>Select position level</option>
                                                            <option value="1" <?php echo $text_selected_top; ?>>
                                                                Top Management
                                                            </option>
                                                            <option value="2" <?php echo $text_selected_middle; ?>>
                                                                Middle Management
                                                            </option>
                                                            <option value="3" <?php echo $text_selected_Junior; ?>>
                                                                Junior Management
                                                            </option>
                                                            <option value="4" <?php echo $text_selected_Staf; ?>>
                                                                Staff
                                                            </option>
                                                            <option value="5" <?php echo $text_selected_Officier; ?>>
                                                                Officier
                                                            </option>
                                                        </select>
                                                        <!-- seclect position level  -->
                                                    </div>
                                                    <!-- col-10  -->
                                                </div>
                                                <!-- col-12  -->
                                            </div>
                                            <!-- row  -->
                                        </div>
                                        <!-- col-5  -->
                                        <!-- End Level  -->


                                        <!-- Start Position  -->
                                        <div class="col-5">

                                            <div class="row">
                                                <div class="col-10">

                                                    <div id="add_table_<?php echo $arry_index; ?>"></div>
                                                    <!-- add select after change level  -->

                                                    <div id="select_remove<?php echo $arry_index; ?>">
                                                        <div class="col-2>">
                                                            <label for="textarea-input"
                                                                class=" form-control-label">Position
                                                                :</label>
                                                        </div>
                                                        <!-- text position  -->

                                                        <div class="col-6>">
                                                            <select name="arr_update_pos[]" class="form-control">
                                                                <option>Select position</option>
                                                                <?php   //start if foreach
                                                                        foreach($cattagory_position->result() as $row_chack ){ ?>
                                                                <?php       //start if pos_level
                                                                            if($row_chack->pos_level == $row->pos_level){ ?>
                                                                <?php           //start if pos_id
                                                                                if($row_chack->pos_id == $row->pos_id){  ?>
                                                                <option value="<?php echo $row_chack->pos_id; ?>"
                                                                    selected>
                                                                    <?php echo $row_chack->pos_name;?></option>
                                                                <?php } //End if pos_id
                                                                                //start else
                                                                                else {?>
                                                                <option value="<?php echo $row_chack->pos_id; ?>">
                                                                    <?php echo $row_chack->pos_name;?></option>
                                                                <?php           }//End else
                                                                            }//End if pos_level
                                                                        } //End foreach  ?>
                                                            </select>
                                                        </div>
                                                        <!-- col-10  -->
                                                    </div>
                                                    <!-- id select_remove -->

                                                </div>
                                                <!-- col-10  -->
                                            </div>
                                            <!-- row  -->

                                        </div>
                                        <!-- col-6  -->
                                        <!-- End Position  -->


                                        <!-- Start button  -->
                                        <div class="col-2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <?php if($arry_index != 0){ ?>
                                                    <div class="row">
                                                        <div class="col-12" align="right">
                                                            <button type="button" name="remove"
                                                                id="<?php echo $arry_index; ?>"
                                                                class="btn btn-danger btn_remove"><i
                                                                    class="fa fa-times">
                                                                    Delete
                                                                </i> </button>
                                                        </div>
                                                        <!-- col-12  -->
                                                    </div>
                                                    <!-- row  -->
                                                    <?php } ?>
                                                    <!-- End if  -->
                                                </div>
                                                <!-- col-12  -->
                                            </div>
                                            <!-- row  -->
                                        </div>
                                        <!-- col-1  -->
                                        <!-- End button  -->

                                    </div>
                                    <!-- row  -->
                                </div>
                                <!-- col-8  -->
                                <!-- End col 7-12 -->

                            </div>
                            <!-- row+id  -->
                            <br>

                            <?php  $arry_index++; //update arry_index
                                  }//End foreach ?>
                            <input id="index_add" type="input" value="<?php echo $arry_index;  ?>" hidden>
                            <!-- include form function pos_level -->
                            <hr>
                        </div>
                        <!-- End table  -->
                        <!-- dynamic_field -->



                        <!-- -------------------------------End Identification ------------------------------ -->

                        <!-- Start button  add more  -->
                        <div class="row">
                            <div class="col-12" align="right">
                                <!-- Start Add More  -->
                                <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                <!-- End Add More  -->
                            </div>
                            <!-- col-sm-12 -->
                        </div>
                        <!-- row  -->
                        <!-- End button  add more  -->

                        <div class="row">
                            <div class="col-sm-12" align="right">
                                <br><br>
                                <!-- Start Back to main position  -->
                                <a
                                    href="<?php echo base_url(); ?>/Evs_attitude_form/indicator_attitude_table/<?php echo $info_pos_id; ?>">
                                    <button type="button" class="btn btn-secondary">Back</button>
                                </a>
                                <!-- End Back to main position  -->

                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                            <!-- col-sm-12  -->
                        </div>
                        <!-- row  -->

                </form>
                <!-- End Card body -->
                <!-- End form method post   -->

            </div>
            <!-- End Card body -->

            <!-- End Class table  -->
            <!-- End Form : Attitude-->

        </div>
        <!-- card shadow mb-4  -->
    </div>
    <!-- col-12  -->

</div>
<!-- End Page Content -->