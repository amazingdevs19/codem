<?php include('header.tpl'); ?>
   <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Support</h4>
                            </div>
                            <div class="content">
<?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success">      
    <?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>
<form class="form-horizontal" method="post" action="submit"  enctype="multipart/form-data">
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="title">Title</label>  
  <div class="col-md-7">
  <input type="hidden" name="id" value="<?php echo $number;?>">
  <input id="title" name="title" type="text" placeholder="Title" class="form-control input-md" required="">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="support">Subject</label>
  <div class="col-md-7">
    <select id="subject" name="subject" class="form-control">
      <option value="Design">Design Support</option>
      <option value="Technical">Technical Support</option>
      <option value="Other">Other Support</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-3 control-label" for="message">Message</label>
  <div class="col-md-7">                     
    <textarea class="form-control" rows="10" id="message" name="message"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-3 control-label" for="filebutton">Image</label>
  <div class="col-md-7"> <div class="upload">
    <input id="simage" name="simage" class="input-file"  accept=".jpg, .png, .jpeg, .gif, .jpg|images/*" type="file">
  </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="submit"></label>
  <div class="col-md-7">
   <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                    <div class="clearfix"></div>
    
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>

<?php include('footer.tpl'); ?>