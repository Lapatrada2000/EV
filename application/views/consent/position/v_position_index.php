<?php
/*
* v_position_index
* Display position level
* @input  -
* @output -
* @author Piyasak Srijan
* @Create Date 2563-09-01
*/ 
/*
* v_position_index
* Display position level
* @input  -
* @output position level 
* @author Jakkarin Pimpaeng
* @Update Date 2563-10-05
*/

?>
<!-- Start CSS -->
<style>
.border1 {
    border-left: 4px solid #4b6777;
}

.border2 {
    border-left: 4px solid #4b6777;
}

.border3 {
    border-left: 4px solid #4b6777;
    opacity: 0.8;
}

.border4 {
    border-left: 4px solid #4b6777;
}

.border5 {
    border-left: 4px solid #4b6777;
    opacity: 0.8;
}

.text1 {
    color: #c1432e;
}

.text2 {
    color: #c1432e;
}

.text3 {
    color: #c1432e;
}

.text4 {
    color: #c1432e;
}

.text5 {
    color: #c1432e;
}

.pad1 {
    padding: 5px;
    border-radius: 5px
}

#panel_th_Manageposition {
    background-color: #c1432e;
}
</style>
<!-- End CSS -->

<!-- Start Page Content -->
<div class="container-fluid">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Start Card Header : Position Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                        id="panel_th_Manageposition">
                        <div class="col-lg-8">
                            <h1 class="m-0 font-weight-bold text-white">
                                <a href="<?php echo base_url(); ?>/Evs_Controller/main_manage_form">
                                    <i class="fa fa-chevron-circle-left text-white"></i>
                                </a>
                                <i class="fa fa-user"></i> &nbsp; Manage position
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Header : Position Title -->

            <!-- Start Card Body : Position Title -->
            <div class="card-body">
                <!-- Start row -->
                <div class="row">
                    <!-- Start Menu Top Management -->
                    <?php   foreach ($info_pls->result() as $row_lv) { ?>
                    <?php $page = "show_position_all/$row_lv->position_level_id"; //link to controler type data base not have data 
                    // Start foreach
                    $set_year = $patt_year->row();
                    $set_before_year = $patt_before_year->row();
                   
                    foreach($info_pos->result() as $row){
                        // Start if
                        if($set_year->pay_id == $row->ps_pay_id&&$row_lv->position_level_id == $row->ps_status_form_update)
                        {
                            $page = "show_position_edit/$row_lv->position_level_id";//link to controler type data base have data 
                            }//End if
                         
                        //End foreach
                        // Start if 
                        if($set_year->pay_id != $row->ps_pay_id&&$set_year->pay_id-1 == $row->ps_pay_id)
                        {
                            $page = "show_position_new_year_edit/$row_lv->position_level_id";//link to controler type data base have data 
                            }//End if

                        }
                       //End foreach

                    ?>

                    <!-- Start col-xl-4 col-md-6 mb-4 -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <a href="<?php echo base_url();?>/Evs_position/<?php echo $page; ?>">
                            <div class="card border4 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text4 text-uppercase mb-1">Level</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $row_lv->psl_position_level  ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End col-xl-4 col-md-6 mb-4 -->
                    <!-- End Menu Top Manangement -->
                    <?php } 
                    //end foreach
                    ?>
                </div>
                <!-- End row -->

                <!-- Start row -->
                <div class="row">
                    <div class="col-sm-12" align="right">
                        <a href="<?php echo base_url(); ?>/Evs_Controller/main_manage_form">
                            <button type="button" class="btn btn-secondary">Back</button>
                        </a>
                    </div>
                    <!-- Back to main menu  -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Card Body : Position Title -->
        </div>
    </div>
</div>
<!-- End Page Content -->