
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Send SMS  </title>
<?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">

<div class="col-sm-6">
              
  
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Send SMS
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
              <div class="form-group col-sm-12">
                <label for="email" class="h4">Email</label>
               <select name="sendtype" class="form-control">
               <option value="customer">Customer</option>
               <option value="administrator">Administrator</option>
               <option value="employee">Employee</option>
               	
               </select>
            </div>
           
          
       
        <div class="form-group col-sm-12">
            <label for="message" class="h4 ">Message</label>
            <textarea id="message" class="form-control" rows="5" onkeyup="countChar(this)" name="message" placeholder="Enter your message" required></textarea>
            <div id="charNum"><b>Word Count:160</b></div>
        </div><div class="form-group col-sm-12">
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
</div>
</div></div>
              </div>
            </div>
                </div>
              </div>
            </div>


    <?php include 'footer.tpl';?>
    <script type="text/javascript">
    function countChar(val) {
        var len = val.value.length;
        if (len >= 160) {
          val.value = val.value.substring(0, 160);
        } else {
          $('#charNum').html("<b>Word Count:"+(160 - len)+"</b>");
        }
      };

    </script>

