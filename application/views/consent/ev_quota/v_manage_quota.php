<?php
/*
* v_mange_quota.php
* Display v_main_permission
* @input    
* @output
* @author   Kunanya Singmee
* @Create Date 2563-10-1
*/  
?>
<style>
h2 {
	color : white;
}
#numdatashow{
	margin-right:290px;	
}
th{
	color:black;
	text-align: center;
}
td{
	text-align: center;
}
h4 {
	color : black;
}
</style>

<div class="col-md-12">		
			<div class="panel panel-indigo" >
				<div class="panel-heading">
					<h2><font size = "5px">Manage Quota</font></h2>	
				</div>
			
									
				
				<div class="panel-body">
				
					<h4><b> Quota	:</b></h4>
					
					<h4><b> Position of Quota	:</b></h4>
					<legend></legend>
				
				<div>	
					<label class ="col-md-4">
						<select name="example_length" class="form-control">												
							<option value="Company">Company</option>												
							<option value="25">25</option>												
							<option value="50">50</option>												
							<option value="100">100</option>											
						</select>
					</label>
					<label class ="col-md-4">
						<select name="example_length" class="form-control">												
							<option value="Human Resource">Human Resource</option>												
							<option value="25">25</option>												
							<option value="50">50</option>												
							<option value="100">100</option>											
						</select>
					</label>
					<label class ="col-md-4">
						<select name="example_length" class="form-control">												
							<option value="Position">Position</option>												
							<option value="25">25</option>												
							<option value="50">50</option>												
							<option value="100">100</option>											
						</select>
					</label>
				</div>	
				
					<div class="col-md-12 " >
						<div class="panel panel-indigo" >
						<div class = "row">
							<div class="panel-heading">
								<div class="panel-ctrls">
								
								
								</div>
								</div>
													
							<div class="panel-body no-padding">
								<div class="dataTables_wrapper form-inline no-footer" id="example_wrapper">
								<div class="row">
									<div class="col-sm-6"></div>
									<div class="col-sm-6"></div>
								</div>
								<table width="100%" class="table table-striped table-bordered dataTable no-footer" id="example" role="grid" aria-describedby="example_info" style="width: 100%;" cellspacing="0">
									<thead>
										<tr role="row">
											<th>Company</th>
											<th>Departmantrtmant</th>
											<th>position</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<tr class="gradeA odd" role="row">
								<td class="sorting_1">SDM</td>
								<td>Human Resource</td>
								<td>Assistant General Manager</td>
								<td class="center">
								<a href= "<?php echo base_url();?>/ev_quota/Evs_quota/detail_quota">
									<button type="submit" class="btn btn-info"><i class="ti ti-info-alt"></i></button></a>
									
									
								</td>
								</tr>
								
							
								
									</tbody>
								</table>
								</div>
							</div>
						
							<div class="panel-footer">
					
							</div>
						</div>
					</div>
					<div class="DTTT btn-group pull-left mt-sm">
						<!--<a href ="<?php echo base_url(); ?>/ev_group/Evs_group/main_group">	</a>-->				
							<button type="button" class="btn btn-inverse" data-dismiss="modal">CANCEL</button>
						
					</div>
				</div><!--panel-body-->
				
				
			</div>
</div>
</div>