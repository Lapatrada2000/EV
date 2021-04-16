<?php
/*
* v_main_permission.php
* Display v_main_permission
* @input    
* @output
* @author   Kunanya Singmee
* @Create Date 2563-10-1
*/  
?>

<script>
	function show_list(){
		
		var row_data;
		var date = document.getElementById("datestart").value;
		console.log(date);
		
		$.ajax({
            type:"post",
            dataType:"json",
            url: "<?php echo base_url(); ?>ev_permission/Evs_permission/select_date",
            data: {
				"list_date" : date
				},
            success: function(data,status) {
				console.log(status);
				console.log(data);
			
					data.forEach((row, index) => {
						row_data += '<tr>'
						row_data += '<td>'
						row_data += '<center>'
						row_data += row.Emp_ID
						row_data += '</center>'
						row_data += '</td>'
						
						row_data += '<td>'
						row_data += '<center>'
						row_data += row.Empname_eng + "  " + row.Empsurname_eng
						row_data += '</center>'
						row_data += '</td>'
						
						row_data += '<td>'
						row_data += '<center>'
						row_data += row.Emp_startingdate
						row_data += '</center>'
						row_data += '</td>'
						
						row_data += '<td>'
						row_data += '<center>'
						row_data += row.Emptype_ID
						row_data += '</center>'
						row_data += '</td>'
						
						row_data += '<td>'
						row_data += '<center>'
						row_data += row.Statuswork_ID
						row_data += '</center>'
						row_data += '</td>'
						
						row_data += '</tr>'
						
					});
					// foreach

				$("#show_emp").html(row_data);
            }
			// success
        });
		//ajax
		
		
		
	}
	// function show_list
</script>
<div class="col-md-12" align="left" >
	<div class="panel panel-indigo" data-widget='{"draggable": "false"}'>
			
			<div class="panel-heading">
				<div align="right" >
				<h2>Manage Permission for Create MBO</h2>
				</div>
			</div>
			<!-- heading -->
			
			<div class="panel-editbox" data-widget-controls=""></div>
			<div class="panel-body">
				<h3>Please select Position & Probation due date</h3>
				<div class="form-group">
					<div class="col-md-3" align="center">
						<label for="checkbox" class="control-label"  >1) Start date before ..</label>
					</div>
					<!-- col-3 -->
							
					<div class="col-sm-8">
						<div class="input-group date" id="datepicker-pastdisabled">
							<span class="input-group-addon"><i class="ti ti-calendar"></i></span>
							<input class="form-control" id="datestart" type="date" onchange="show_list()">
						</div>
					</div>
					<!-- col-8 -->
				</div>
				<!-- form group-->
					<br>
					<br>
					
					<div data-widget-group="group1">
					<div class="col-md-12">
					<div class="row">
					
						
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2>Data Tables</h2>
									<div class="panel-ctrls"></div>
								</div>
								<div class="panel-body no-padding">
									<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th> <center>Emp. ID </center></th>
												<th> <center> Name – Surname </center> </th>
												<th> <center> Emp_startingdate </center> </th>
												<th> <center> Emptype_ID </center> </th>
												<th> <center> Statuswork_ID </center> </th>
												
											</tr>
										</thead>
										<!-- thead -->
										<tbody id="show_emp">
										
										</tbody>
										<!-- tbody -->
									</table>
									<!-- table -->
								</div>
								<div class="panel-footer"></div>
								<div class="row">
								<div class="col-sm-6">
									<div class="dataTables_info" id="example_info" role="status" aria-live="polite"></div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Date Tables-->
					
					<div class="row">
						<div class="col-sm-8" align= "left">
							<button class="btn btn-inverse">CANCEL</button>
							<button class="btn btn-default btn">CLEAR</button>
							
						</div>
						<div class="col-sm-4" align= "right">
							<button class="btn btn-success btn" data-toggle="modal" data-target="#myModal" >Submit</button>
								
						</div>
							<!-- col-sm-4 -->
					</div>
					<!-- row -->
		</div>
		<!-- body -->
	</div>
	<!-- indigo-->
</div>
<!-- col-md-12 -->
		
		
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p>Do you want to Save Data YES or NO ? </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger"   data-dismiss="modal">NO</button>
		   <a href ="<?php echo base_url(); ?>/ev_permission/Evs_permission/table">
			<button type="button" class="btn btn-success">YES</button>
		   </a>
        </div>
      </div>
      
    </div>
  </div>
		
		
		

