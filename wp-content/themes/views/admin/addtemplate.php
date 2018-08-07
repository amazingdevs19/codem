
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Template List</title>
<?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title">Template List</h2>
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default ">
                <div class="panel-heading">Template
                  
                </div>
                <div class="panel-body ">
               <?php echo validation_errors(); ?>

                                   
               <!--******************** START SESSION SETFLASH MESSAGES *****************************-->
     <?php if(isset($message)){?>
          <div class="alert alert-success ">      
              <button type='button' class='close' data-dismiss='alert'>×</button>
            <?php echo $message;?>
          </div>
        <?php } ?>
				<form id="Validation" action=""  method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-lg-4">	
                <div class="form-group">
                <label> Category</label>
                <select name="parent_id" class="form-control select2">
                                                                    
<?php

            foreach($categorylist as $row)
            {
            	if($row->parentid==0){
              echo '<option value="'.$row->categoryid.'" style="color:#6164c1;font-weight: 700;">'.$row->categoryname.'</option>';
}else{
echo '<option value='.$row->categoryid.' >&nbsp;  &nbsp; &nbsp;'.$row->categoryname.'</option>';

}
            }
            ?>
                                                </select>
                                                                </div>
                                                             </div>
                                                            <div class="col-lg-4">	   
                                                                <div class="form-group">
                                                                    <label>Template Title</label>
                                                                    <input type="text" name="template_name" class="validate[required] form-control">
                                                                </div>
                                                            </div>
<div class="col-lg-4">
                                                                 <div class="form-group">
                                                                     <label>Price </label>
                                                  <input type="text" name="template_price" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate[required] form-control ">
                                                                 </div>
                                                             </div>


                                                         </div>  
                                                         
                                                         
                                                         <div class="row">
                                                        	<div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <label>Url  </label>
                                                                   
     <input type="text" name="template_icon" class=" form-control">
        
</div>
</div>
                                                           
                                                            <div class="col-lg-3">
                                                                 <div class="form-group">
                                                                     <label>Template Image</label>
                                                  <input type="file" name="template_image" id class="validate[required] form-control ">
                                                                 </div>
                                                             </div>

                                                            <div class="col-lg-3">
                                                                 <div class="form-group">
                                                                     <label>Template Zip</label>
                                                  <input type="file" name="template_zip" id class="form-control ">
                                                                 </div>
                                                             </div>
  
                                                            <div class="col-lg-3">
                                                                 <div class="form-group">
                                                                     <label>Priority </label>
                                                  <input type="text" name="priority" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate[required] form-control ">
                                                                 </div>
                                                             </div>
                                                         </div>      
              
                                                         <div class="row">
                                                        	<div class="col-lg-12">	
                                                                <div class="form-group">
                                                                    <label>Template Description</label>
                                                                    <textarea id="CKeditor"  name="template_description" rows="5" class="validate[required] form-control"></textarea>
                                                                </div>
                                                             </div>
                                                          </div>  
                                                         
                                                         <h4><i class="fa fa-arrow-right"></i> SEO Details</h4>
                                                         
                                                         <div class="row">
                                                        	<div class="col-lg-6">	
                                                                <div class="form-group">
                                                                    <label>SEO Title</label>
                                                                    <input type="text" name="seo_title" class="validate[required] form-control">
                                                                </div>
                                                             </div>
                                                            <div class="col-lg-6">	   
                                                                <div class="form-group">
                                                                    <label>SEO Keywords</label>
                                                                    <input type="text" name="seo_keyword" class="validate[required] form-control">
                                                                </div>
                                                            </div>
                                                         </div> 
                                                         
                                                         <div class="row">
                                                        	<div class="col-lg-12">	
                                                                <div class="form-group">
                                                                    <label>SEO Description</label>
                                                                    <textarea name="seo_description" rows="3" class="validate[required] form-control"></textarea>
                                                                </div>
                                                             </div>
                                                          </div> 
														<div class="form-actions">
															<button name="save" type="submit" class="btn btn-primary">Submit</button>
														</div>
													</form>
                          
												</div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php include 'footer.tpl';?>


    <script src="<?php echo base_url(); ?>assets/lib/bootstrap-iconpicker/js/iconset/iconset-fontawesome-4.1.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/lib/bootstrap-iconpicker/css/bootstrap-iconpicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/lib/bootstrap-iconpicker/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>assets/lib/custom-select/custom-select.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/lib/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('CKeditor');
        $(function () {
         $(".select2").select2();
            // Custom options
        });

    </script>