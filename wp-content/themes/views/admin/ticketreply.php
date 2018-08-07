
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Support Admin  List</title>
    <style>
        /*font Awesome http://fontawesome.io*/
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
/*Comment List styles*/
.comment-list .row {
  margin-bottom: 0px;
}
.comment-list .panel .panel-heading {
  padding: 4px 15px;
  position: absolute;
  border:none;
  /*Panel-heading border radius*/
  border-top-right-radius:0px;
  top: 1px;
}
.comment-list .panel .panel-heading.right {
  border-right-width: 0px;
  /*Panel-heading border radius*/
  border-top-left-radius:0px;
  right: 16px;
}
.comment-list .panel .panel-heading .panel-body {
  padding-top: 6px;
}
.comment-list figcaption {
  /*For wrapping text in thumbnail*/
  word-wrap: break-word;
}
/* Portrait tablets and medium desktops */
@media (min-width: 768px) {
  .comment-list .arrow:after, .comment-list .arrow:before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-color: transparent;
  }
  .comment-list .panel.arrow.left:after, .comment-list .panel.arrow.left:before {
    border-left: 0;
  }
  /*****Left Arrow*****/
  /*Outline effect style*/
  .comment-list .panel.arrow.left:before {
    left: 0px;
    top: 30px;
    /*Use boarder color of panel*/
    border-right-color: inherit;
    border-width: 16px;
  }
  /*Background color effect*/
  .comment-list .panel.arrow.left:after {
    left: 1px;
    top: 31px;
    /*Change for different outline color*/
    border-right-color: #FFFFFF;
    border-width: 15px;
  }
  /*****Right Arrow*****/
  /*Outline effect style*/
  .comment-list .panel.arrow.right:before {
    right: -16px;
    top: 30px;
    /*Use boarder color of panel*/
    border-left-color: inherit;
    border-width: 16px;
  }
  /*Background color effect*/
  .comment-list .panel.arrow.right:after {
    right: -14px;
    top: 31px;
    /*Change for different outline color*/
    border-left-color: #FFFFFF;
    border-width: 15px;
  }
}
.comment-list .comment-post {
  margin-top: 6px;
}

    </style>
<?php include 'header.tpl';?>
 <div class="be-content">
       
        <div class="main-content container-fluid">
         
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="panel panel-default ">
                <div class="panel-heading">Support  List
               
              
                </div>
                <div class="panel-body ">
                
                <?php if($this->session->flashdata('message')){?>
  <div class="alert alert-success">      
    <?php echo $this->session->flashdata('message')?>
  </div>
<?php } ?>

 <form action="<?= $ticket;?>" method="post">
            
            <div class="form-group">
              <label for="recipient-name" class="form-control-label">Status:</label>
              <input type="hidden" name="ticketid" value="<?= $ticket;?>">
              <input type="hidden" name="userid" value="<?= $userid;?>">
              <select class="form-control" name="status" id="status">
              <option value="open">Open</option>
              <option value="reply">Reply</option>
              <option value="close">Close</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message-text" class="form-control-label">Message:</label>
              <textarea class="form-control" id="message-text" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary btn-fill pull-right" value="Submit">
            </div>
          </form>

   
 
        <section class="comment-list">
          <h2 class="page-header">Reply</h2>
                                       <?php
                                                $i=1;
        if (is_array($userlist) && count($userlist) > 0) {
            foreach($userlist as $row)
            {?>
          <!-- <?= $i; ?> Comment -->
          <article class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center"><?= $row->firstname; ?></figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> <?= $row->subject; ?></div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?= $row->currentdate?></time>
                  </header>
                  <div class="comment-post">
                    <p>
                     <?= $row->message; ?>
                    </p>
                  </div>
                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                </div>
              </div>
            </div>
          </article>
          <?php $i++;} }
 else { ?>
Record Not Found
<?php } ?>
            


            <!--Admin Reply-->
             <?php
                                                $i=1;
        if (is_array($adminlist) && count($adminlist) > 0) {
            foreach($adminlist as $row)
            {?>
         
          <!-- Third Comment -->
          <article class="row">
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow right">
                <div class="panel-body">
                  <header class="text-right">
                    <div class="comment-user"><i class="fa fa-user"></i> <?=$row->status?></div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?= $row->currentdate?></time>
                  </header>
                  <div class="comment-post">
                    <p>
                     <?= $row->message; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
                <figcaption class="text-center"><?= $row->firstname; ?></figcaption>
              </figure>
            </div>
          </article>

             <?php $i++;} }
 else { ?>
Record Not Found
<?php } ?>
            
         </section>
   

      <!--End-->
 
       

<!---->
 
    </div>
    </div>
	</div>
</div>
            </div>
          </div>
        </div>
      </div>


   
    <?php include('footer.tpl');  ?>
    <script src="<?= base_url()?>assets/js/image-tooltip.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script type="text/javascript">
    var editor = CKEDITOR.replace('message-text');
    $(function(){
        $('.zoom').imageTooltip();
        
            
    });
    </script>



  </body>
</html>
