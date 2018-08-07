<?php include 'header.tpl';?>
<?php $flashData = $arrSess->flashdata('setSuccessMsg');if (!empty($flashData)) {?>
	<div class="card">
					<div class="alert dark alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						<i class="icon wb-check" aria-hidden="true"></i>
	<?php echo $arrSess->flashdata('setSuccessMsg');?>
	</div>
				</div>
	<?php }?>
	<?php $flashEData = $arrSess->flashdata('setErrorMsg');if (!empty($flashEData)) {?>
	<div class="card">
						<div class="alert dark alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<i class="icon wb-close" aria-hidden="true"></i>
	<?php echo $arrSess->flashdata('setErrorMsg');?>
	</div>
					</div>
	<?php }?>
<div class="card">
			<div class="header">
				<h4 class="title">Add role to user</h4>
			</div>

			<div class="content">
				<form method="post"  action=""  enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>User Email</label>
								<input autocomplete="off" type="text" name="user_email" class="form-control" placeholder="Name" value="" required="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Access Roles</label>
								<select  class="form-control" name="access_role" >
<?php if (!empty($accessRoleNames)) {foreach ($accessRoleNames as $arrData) {?>
																<option value="<?php echo $arrData->role_id?>"><?php echo $arrData->role_name?></option>
		<?php }}?>
									</select>
								</div>
							</div>
						</div>
						<input type="hidden" name="website_id" value="<?php echo $id;?>">
						<button type="submit" class="btn  btn-info btn-fill pull-right">Add Role</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
<?php if (!empty($accessRoleMembers)) {?>
							<div class="card">
								<div class="header">
									<h4 class="title">User Role List for <?php echo $accessRoleMembers[0]->websitetitle;?></h4>

								</div>

								<div class="content">
									<div class="content table-responsive ">
										<table class="table  table-striped" id="websitelist">
											<thead>
												<tr>
													<th>S.No.</th>
													<th>User Email</th>
													<th >Acess Role</th>
													<th  class="text-right">Action</th>
												</tr></thead>
												<tbody>
	<?php $i = 0;
	foreach ($accessRoleMembers as $arrData) {$i++;?>
		<tr>
																		<td>
		<?php echo $i;?>
																		</td>
																		<td><?php echo $arrData->user_email;?></td>
																		<td><?php echo $arrData->role_name;?></td>
																		<td class="text-right">
																			<a class="editUserRole" href="" data-target="#editTheRole" data-toggle="modal" data-name="<?php echo $arrData->user_email;?>" data-role="<?php echo $arrData->role_id;?>" data-id="<?php echo $arrData->id;?>"><i class="fa fa-pencil text-success" aria-hidden="true"></i></a>
																			<a href="#" data-target="#deleteTheRole" data-toggle="modal" data-id="<?php echo $arrData->id;?>" class="deleteUserRole"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>

																		</td>
																	</tr>
		<?php }?>
	</tbody>
												</table>
											</div>
										</div>

									</div>
	<?php }?>
						<div class="modal fade in" id="editTheRole" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1" >
							<div class="modal-dialog modal-center">
								<div class="modal-content">
									<form action="<?php echo base_url("index.php/property/access-role-edit")?>" method="post" id="accressRoleEdit">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
											<h4 class="modal-title" id="exampleFormModalLabel">Edit Role</h4>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-lg-6 form-group">
													<input class="form-control" disabled="" id="user_email_edit" name="user_email_edit" placeholder="User Email" type="text" value="">
												</div>
												<div class="col-lg-6 form-group">
													<select  class="form-control" name="access_role_edit" id="access_role_edit">
<?php if (!empty($accessRoleNames)) {foreach ($accessRoleNames as $arrData) {?>
																					<option value="<?php echo $arrData->role_id?>"><?php echo $arrData->role_name?></option>
		<?php }}?>
														</select>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<input type="hidden" id="id_edit" name="id_edit" value="">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="button" id="buttonAccessRoleEdit" class="btn btn-info btn-fill">Save changes</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="modal fade in" id="deleteTheRole" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1" >
								<div class="modal-dialog modal-center">
									<div class="modal-content">
										<form method = "post" id="accressRoleDelete" action="<?php base_url("index.php/property/access-role-delete")?>">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
												<h4 class="modal-title" id="exampleFormModalLabel">Confirmation for deletion</h4>
											</div>
											<div class="modal-body">

												<p>Are you sure to delete this user role ?</p>

											</div>
											<div class="modal-footer">
												<input type="hidden" id="id_delete" name="id_delete" value="">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="button" id="buttonAccessRoleDelete" class="btn btn-info btn-fill">Delete</button>
											</div>
										</form>
									</div>
								</div>
							</div>

<?php include 'footer.tpl';?>
							<script type="text/javascript">
								$(document).ready(function(){

									$('body').on('click','.editUserRole',function(e){
										e.preventDefault();
										var roleID = $(this).attr('data-role');
										$('#user_email_edit').val($(this).attr('data-name'));
										$('#id_edit').val($(this).attr('data-id'));
										$('#access_role_edit  option[value="'+roleID+'"').prop("selected", true);
									});

									$('body').on('click','#buttonAccessRoleEdit',function(){
										$(this).attr('disabled','true');
										$.ajax({
											url: '<?php echo base_url("index.php/property/access-role-edit")?>',
											type: 'POST',
											data: $('#accressRoleEdit').serialize(),
										})
										.done(function() {
											window.location.href = "<?php echo base_url('index.php/property/access-role/'.$id);?>";
										})
										.fail(function() {
											$(this).removeAttr('disabled');
											console.log("error");
										})
										.always(function() {
											$(this).removeAttr('disabled');
											console.log("complete");
										});


									});

									$('body').on('click','.deleteUserRole',function(e){
										e.preventDefault();
										$('#id_delete').val($(this).attr('data-id'));
									});

									$('body').on('click','#buttonAccessRoleDelete',function(){
										$(this).attr('disabled','true');
										$.ajax({
											url: '<?php echo base_url("index.php/property/access-role-delete")?>',
											type: 'POST',
											data: $('#accressRoleDelete').serialize(),
										})
										.done(function() {
											window.location.href = "<?php echo base_url('index.php/property/access-role/'.$id);?>";
										})
										.fail(function() {
											$(this).removeAttr('disabled');
											console.log("error");
										})
										.always(function() {
											$(this).removeAttr('disabled');
											console.log("complete");
										});


									});
									//
								});

							</script>
