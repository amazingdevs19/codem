
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Send Email  </title>
<?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">

<div class="col-sm-12">
              
  
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Send Email 
                  <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                </div>
                <div class="panel-body">

<?php echo validation_errors(); ?>

                                   
               <!--******************** START SESSION SETFLASH MESSAGES *****************************-->
     <?php if(isset($message)){?>
          <div class="alert alert-success ">      
              <button type='button' class='close' data-dismiss='alert'>×</button>
            <?php echo $message;?>
          </div>
        <?php } ?>
                <form action="" method="post">
              <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
               <select name="sendtype" class="form-control">
               <option value="customer">Customer</option>
               <option value="administrator">Administrator</option>
               <option value="employee">Employee</option>
               	
               </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
            </div>
          
       
        <div class="form-group col-sm-12">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" name="message" placeholder="Enter your message" required></textarea>
        </div>
        <div class="form-group col-sm-12">
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
</div></div></div></form>
              </div>
            </div>
                </div>
              </div>
            </div>


    <?php include 'footer.tpl';?>

