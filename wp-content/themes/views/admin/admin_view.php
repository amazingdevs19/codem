
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Admin </title>
<?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">

<div class="col-sm-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Create Admin</div>
                <div class="panel-body">
      <?php echo validation_errors(); ?>

                                   
               <!--******************** START SESSION SETFLASH MESSAGES *****************************-->
     <?php if(isset($message)){?>
          <div class="alert alert-success ">      
              <button type='button' class='close' data-dismiss='alert'>×</button>
            <?php echo $message;?>
          </div>
        <?php } ?>
                  <form action="create" method="post" data-parsley-validate="" novalidate="">
                   <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                      <label>User Name</label>
                      <input type="text" name="username" parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                    </div>
                    </div>
                     <div class="col-md-4">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="firstname"  required="" placeholder="First Name"  class="form-control">
                    </div>
                    </div>
                     <div class="col-md-4">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input id="lastname" name="lastname" type="text"  placeholder="Last Name" required="" class="form-control">
                    </div>
                    </div>
                    </div>
                    <div class="row">
                     <div class="col-md-4">
                    <div class="form-group">
                      <label>Email ID</label>
                      <input  type="email" name="email" required="" placeholder="Enter Email ID" class="form-control">
                    </div>
                    </div>
                     
                     <div class="col-md-4">
                    <div class="form-group">
                      <label>Mobile No</label>
                      <input type="number" required="" placeholder="Mobile No" name="mobile" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <label>Gender</label>
                      <br>
                      <div class="be-radio inline">
                        
                          <input type="radio" checked="" name="gender" value="Male" id="male">
                          <label for="male">Male</label>
                        </div> 
                        <div class="be-radio inline">
                          <input type="radio"  name="gender" value="Female" id="female">
                          <label for="female">Female</label>
                        </div>

                     
                    </div>
                    </div>
                    
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                      <label> Password</label>
                      <input  id="password" name="password" type="password" required="" placeholder="Password" class="form-control">
                    </div>
                    </div>
                     <div class="col-md-4">
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input data-parsley-equalto="#password"  type="password" required="" placeholder="Repeat Password" class="form-control">
                    </div>
                    </div>
                    
                     <div class="col-md-4">
                    <div class="form-group">
                      <label>Account Type</label>
                      <select name="accounttype" class="form-control">
                        <option >--Select--</option>
                        <option value="administrator">Administrator</option>
                        <option value="support">Support</option>
                        <option value="design_support">Design Support</option>
                        <option value="publisher">Publisher</option>
                        <option value="property_owner">Property  Owner</option>
                        <option value="property_admin">Property Admin</option>
                      </select>
                    </div>
                    </div>
                    
      
                    <p class="text-right">
                      <button type="submit" class="btn btn-space btn-primary">Submit</button>
                      <button class="btn btn-space btn-default">Cancel</button>
                    </p>
                  </form>
                </div>
              </div>
            </div>


    <?php include 'footer.tpl';?>





