<?php
/*
* v_main_form.php
* Display v_main_form
* @input    
* @output
* @author   Kunanya Singmee
* @Create Date 2564-04-06
*/  
?>

<style>


#color_head{
	background-color:#3f51b5;
}

</style>
<!-- END style -->

<script>

$(document).ready(function(){
  $("#show_noti").hide();
});
// document ready

function onChangeBG(){
	$("#emp_id").css("background-color", "#ffffff");
    $("#emp_id").css("border-style", "solid");
    $("#emp_id").css("border-color", "#d9d9d9");
	$("#show_noti").hide();
}
// function onChangeBG


function validate(){
	
	var check = document.getElementById("emp_id").value;
	console.log(check);
	
	if (check == "" || check.length <= 4 || check.length >= 8) {
        $("#emp_id").css("background-color", "#ffe6e6");
        $("#emp_id").css("border-style", "solid");
        $("#emp_id").css("border-color", "#e60000");
		$("#show_noti").show();
		
        return false;
    }
    // if 
    else {
        return true;
    }
    // else 
	
	
}
// function varidate

</script>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-indigo" data-widget='{"draggable": "false"}'>
				<div class="panel-heading ">
					<h1> <font color="#ffffff"><b> Created & Evaluation </b></font></h1>
				</div>
				<!-- heading -->
				<div class="panel-body" style="height: 400px">
					
					<div class="row">
						<div class="col-md-6" align="center">
							<a data-toggle="modal" href="#input_empid" >
							<img src="<?php echo base_url();?>/pic/createdMBO.png" height="350px">
							</a>
						</div>
						<!-- col-6  -->
						
						<div class="col-md-6" align="center">
							<a href="" disable>
							<img src="<?php echo base_url();?>/pic/evaluation.png" height="350px">
							</a>
						</div>
						<!-- col-6  -->
					</div>
					<!-- row  -->

				</div>
				<!-- body -->
			</div>
			<!-- panel-indigo -->
			<hr>
			<br>
		</div>
		<!-- col-12 -->
	</div>
	<!-- row -->
	<br>
	
	
	<!-- Modal -->
  <div class="modal fade" id="input_empid" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" id="color_head">
          <button type="button" class="close" data-dismiss="modal"><font color="white">&times;</font></button>
          <h4 class="modal-title"><font color="white"><b> Please enter Employee ID </b></font></h4>
        </div>
		<!-- Modal header-->
		
		<br>
		<form method="POST" action="<?php echo base_url(); ?>ev_form/Evs_form/createMBO" onSubmit="return validate()">
        <div class="modal-body">
		<div class="row">
			<div class="col-md-5" align="right">
				<label class="control-label"><strong><font size="3px"> Employee ID : </font></strong></label>
			</div>
			<!-- col-6 -->
			<div class="col-md-4">
				<input class="form-control" id="emp_id" name="emp_id" type="text" onchange="onChangeBG()">
			</div>
			<!-- col-6 -->
		</div>
		<!--  row -->
		
		<br>
		
		<div class="row">
			<div class="col-12" align="center">
				<p id="show_noti"><font color="#e60000"> *Please enter the Employee ID correctly</font></p>
			</div>
			<!-- col-12 -->
		</div>
		<!--  row -->
          
        </div>
		<!-- Modal body-->
        <div class="modal-footer">
			<div class="row">
				<div class="col-md-6" align="left">
					<button type="button" class="btn btn-inverse" data-dismiss="modal">CANCEL</button>
				</div>
				<!-- col-6 -->
				
				<div class="col-md-6" align="rigth">
					<input type="submit" class="btn btn-success" value="SAVE">
				</div>
				<!-- col-6 -->
			</form>
			<!-- form  -->
			</div>
		  <!-- row -->
        </div>
		<!-- Modal footer-->
      </div>
		<!-- Modal content-->
    </div>
	<!-- Modal dialog-->
  </div>
  <!-- Modal-->