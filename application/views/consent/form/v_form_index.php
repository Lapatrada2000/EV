<?php
/*
* v_form_index
* Display position level
* @input  -
* @output -
* @author Piyasak Srijan
* @Create Date 2563-09-01
*/ 

/*
* v_form_index
* Display position level
* @input  -  
* @output -
* @author Kunanya Singmee
* @Update Date 2563-09-23
*/

/*
* v_form_index 
* Display position level
* @input  -
* @output -
* @author Piyasak Srijan
* @Update Date 2563-10-02
*/

/*
* v_mav_form_indexin_form
* Display position level
* @input  - 
* @output -
* @author Tanadon Tangjaimongkhon
* @Update Date 2563-10-04
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
    border-radius: 5px;
}

#panel_Manage_form {
    background-color: #c1432e;
}
</style>
<!-- End CSS -->
<!-- Start Page Content -->
<div class="container-fluid">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Start Card Header : Manage form -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                        id="panel_Manage_form">
                        <div class="col-lg-6">
                            <h1 class="m-0 font-weight-bold text-white">
                                <a href="<?php echo base_url(); ?>/Evs_Controller/main_manage_form">
                                    <i class="fa fa-chevron-circle-left text-white"></i>
                                </a>
                                <i class="fa fa-book"></i> &nbsp;Manage form
                            </h1>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Card Header : Manage form -->
            <!-- End Card Header : Position Title -->
            
            <!-- Start Card Body : Position Title -->
            <div class="card-body">
                <div class="row">
                    <!-- Start Menu -->

                    <?php 
                    //start foreach
                    foreach($info_pos_lv->result() as $row){ ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <a href="<?php echo base_url();?>/Evs_form/manage_form/<?php echo $row->psl_id; ?>">
                            <div class="card border4 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text4 text-uppercase mb-1">Level</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row->psl_position_level; ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } 
                    //end foreach
                    ?>
                    <!-- End Menu -->
                    </div>
                <div class="row">
                    <div class="col-sm-12" align="right">
                        <a href="<?php echo base_url() ?>/Evs_Controller/main_manage_form">
                            <button type="button" class="btn btn-secondary">Back</button>
                        </a>
                    </div>
                    <!-- Back to main menu  -->
                </div>

            </div>
            <!-- End Card Body : Position Title -->
        </div>
    </div>
</div>
<!-- End Page Content -->


