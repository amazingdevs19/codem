
  <?php include('header.tpl'); ?>
  <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Change Password </h4>

                            </div>
                            <div class="content">

                            <?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success"> 
  <button type="button" aria-hidden="true" class="close">×</button>     
    <?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>

<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
	'class'=>'form-control',
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class'=>'form-control',
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
	'class'=>'form-control',
);
?>
				<?php echo form_open($this->uri->uri_string()); ?>
						<div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php echo form_label('Old Password', $old_password['id']); ?>
                                                <?php echo form_password($old_password); ?>
                                                <?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php echo form_label('New Password', $new_password['id']); ?>
                                                <?php echo form_password($new_password); ?>
                                                <?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php echo form_label('Confirm New Password', $confirm_new_password['id']); ?>
                                               <?php echo form_password($confirm_new_password); ?>
                                               <?php echo form_error($confirm_new_password['name']); ?>
                                               <?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
                                            </div>
                                        </div>
                                    </div>
		
		
					<?php echo form_submit('change', 'Change Password',array('class' =>'btn btn-info btn-fill' , )); ?>
					<?php echo form_close(); ?>
   
                        </div>
                    </div>
                    </div>
                      <?php include('footer.tpl'); ?>