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
		
		var group = document.getElementById("list_group").value;
		
		$.ajax({
            type:"post",
            dataType:"json",
            url: <?php echo base_url(); ?>ev_permission/Evs_permission/select_Department_PD,
            data: {
				"list_grp":group
				},
            success: function(data,status) {
				console.log(status);
				console.log(data);
            },
        });
	}
	// function show_list
</script>


			<div class="col-md-12" align="left" >
			
			<div class="panel panel-indigo" data-widget='{"draggable": "false"}'>
			<div class="panel-heading">
			<div align="right" >
				 <div  class="btn btn-lg btn-inverse btn-label" href="#"><i  class="ti ti-printer"></i></div> 
				<div class="panel pull-right" id="addtable_filter">
							<select name="example_length" class="form-control" aria-controls="example" onchange="show_list()" id="list_group">
								<option value="0">Select Department</option>
								<option value="1" selected>PD</option>
								<option value="2">LU</option>
								<option value="3">PUR</option>
								<option value="4">CORPS</option>
								<option value="5">HR</option>
								<option value="6">GA</option>
								<option value="7">PE</option>
								<option value="8">QA</option>
								<option value="9">PC</option>
								<option value="10">TIE</option>
								<option value="11">SE</option>
								<option value="12">MC</option>
								<option value="13">MS</option>
								<option value="14">CPC</option>
								<option value="15">GM</option>
								<option value="16">PD</option>
								<option value="17">PUR</option>
								<option value="18">PE</option>
								
							</select>
					</div>
					<!-- select company -->
				
				
				
				<!--  <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            Select Department <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">TIE</a></li>
                                            <li><a href="#">SE</a></li>
                                            <li><a href="#">QA</a></li>
											<li><a href="#">PUR</a></li>
											
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    
									</div>-->
				<h2>Manage Permission for Create MBO</h2>
				</div>
			</div>
			<div class="panel-editbox" data-widget-controls=""></div>
			<div class="panel-body">
				<h3>Please select Position & Probation due date</h3>
				
				
				
				
				<div class="form-group">
								<div class="col-md-3" align="center">
										<label for="checkbox" class="control-label" >1) Start date before ..</label>
									</div>
							
								<div class="col-sm-8">
								<div class="input-group date" id="datepicker-pastdisabled">
									<span class="input-group-addon"><i class="ti ti-calendar"></i></span>
									<input class="form-control" type="date">
									
								</div>
							</div>
						</div>
					<br>
					<br>
					
	<div class="row">
        <div class="col-md-12">
           
                <div class="panel-heading">
                  
                
					
					<div class=" pull-left "  id="editable_length" 
					
					
					<label class="panel-ctrls-center">
					<select name="editable_length" aria-controls="editable" class="form-control">
					      
						
			
							<option value="10">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
							<option value="100">100</option>
				</select>
			</label>
			 </div>
					
					
				<div class="dataTables_filter pull-right" id="editable_filter">
					<label class="panel-ctrls-center">
							
							<input type="search" class="form-control" placeholder="Search..." aria-controls="editable">
							
						</label>
				</div>	
					
					
					
					
					
					
                    <div class="panel-ctrls"></div>
					
					
                
                </div>
                <div class="panel-body no-padding">
                
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="crudtable">
                        <thead>
                            <tr > 
                                <th width="=20%" > <center>Emp. ID </center> </th>
                                <th width="30%"> <center> Name – Surname </center> </th>
                                <th width="18%"> <center> Section Code </center> </th>
                                <th width="20%"> <center> Department </center></th>
                                <th width="20%"> <center> Position </center> </th>
								
                            </tr>
                        </thead>
						
						<tbody>
                            <tr class="Permission">
                                <td> <center> 00144 </center> </td>
                                <td> <center> SUKANYA TEDSAWONG </center> </td>
                                <td> <center> 6190 </center> </td>
								<td> <center> HR </center> </td>
								<td> <center> Senior Specialis </center> </td>
                            </tr>
							
							<tr class="Permission">
                                <td> <center> 01083 </center> </td>
                                <td> <center> CHULARAT LIMSUTTHIPONG </center> </td>
                                <td> <center> 6180 </center> </td>
                                <td> <center> HR</center> </td>
                                <td> <center> Manager </center> </td>
							</tr>
							
							<tr class="Permission">
                                <td> <center> 02701 </center> </td>
                                <td> <center> WIPA MEKLEOM </center> </td>
                                <td> <center> 6190 </center> </td>
                                <td> <center> HR</center> </td>
                                <td> <center> Staff </center> </td>
							</tr>
						        
                    </table>
					</tbody>
                    <!--end table-->
                    
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
                    
 










			</div>
			
		</div>
		</div>
  
