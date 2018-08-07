<?php include('header.tpl'); ?>
<style type="text/css">
     .stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
    border-right:0; 
    box-shadow:0 0 0; 
    border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
.typeahead{
    width: 100% !important;
}
</style>


<style>

/*Template Preview---------------------------------------------*/
.preview-toggle {
  margin-left: 12px;
  display: none; }

.desktop-toggle, .mobile-toggle {
  text-indent: -9999px;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: 22px 18px;
  width: 56px; }


#preview-container {
  position: fixed;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  background-color: #f1f1f2;
  z-index:   1080;;
  padding: 20px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: opacity 0.2s, visibility 0s 0.2s;
  transition: opacity 0.2s, visibility 0s 0.2s; 
  min-height: 100%;
  min-width: 1024px;
  /* Set up proportionate scaling */
  width: 100%;
  height: auto;
}
  #preview-container.overlay-visible {
    visibility: visible;
    opacity: 1;
    -webkit-transition: opacity 0.2s;
    transition: opacity 0.2s; }
  #preview-container #preview-version {
    width: 145px;
    height: 28px;
    background-position: right -143px; }
  #preview-container .media-container {
    opacity: 1; }
  #preview-container .preview-frame {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.2s;
    transition: opacity 0.2s;
    background-color: #fff;
    -webkit-transform-style: preserve-3d; }
    #preview-container .preview-frame.active-frame {
      opacity: 1;
      z-index: 2000; }

.preview-frame {
  display: none; }

/* This rule and the next fix overlay issue in iOS that prevents any buttons or links from being clickable */
.overlay-visible .preview-frame {
  display: block; }

#desktop-preview {
  position: relative;
  height: 700px; }
  #desktop-preview .preview-frame {
    border: 1px solid #ccc;
    border-radius: 4px; }

#mobile-preview {
  border: 1px solid #aaa;
  border-radius: 30px;
  width: 340px;
  margin: 0 auto;
  position: relative;
  height: 610px;
  background-color: rgba(226, 223, 223, 0.48); }
  #mobile-preview .preview-frame {
    overflow: hidden;
    margin: 60px 10px;
    border: 1px solid #aaa; }

#mobile-preview:before {
  display: block;
  height: 40px;
  width: 40px;
  border-radius: 100px;
  border: 1px solid #aaa;
  content: ' ';
  position: absolute;
  bottom: 14px;
  left: 145px; }

#mobile-preview:after {
  display: block;
  height: 10px;
  width: 40px;
  border-radius: 100px;
  border: 1px solid #aaa;
  content: ' ';
  position: absolute;
  top: 25px;
  left: 145px; }

@media screen and (max-width: 1100px) {
  #mobile-preview {
    margin-top: 50px; }

  .preview-toggle {
    display: inline-block; }

  .preview-content .col-2-3, .preview-content .col-1-3 {
    width: 100%; }

  #preview-container .media-container {
    opacity: 0;
    -webkit-transition: opacity 200ms;
    transition: opacity 200ms; }
    #preview-container .media-container.active-media {
      opacity: 1;
      z-index: 1050; }

  #desktop-preview {
    position: absolute;
    width: 100%; }
 }
 .border-bottom {
    display: block;
    padding-bottom: 8px;
    border-bottom: 1px solid #cdcdce;
}
 .button{
    display: inline-block;
    padding: 4px 15px 4px 15px;
    font-size: 13px;
    line-height: 18px;
    color: #333;
    text-align: center;
    background-color: #ddd;
    border: 1px solid #ccc;
    border-radius: 2px;
    cursor: pointer;
}.below30 {
    margin-bottom: 30px !important;
}
.preview-header h2 {
    margin: 0 0 10px 0;
        font-size: 24px;
}
.categorytext{font-size: 24px;}
</style>
    <div class="be-content">
              <div class="panel panel-default ">
               
                <div class="panel-body">
                <div class="row">
<div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container" style="margin-top: 10px;margin-bottom: 10px;"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control" name="test_search" placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="fa fa-search"></span>
                        </button>  
                    </span>
                </div>
                <input type="hidden" name="category_id"> 
            </div> 
            </div>
            </div>
    <div id="products" class="row">
    <br>
       <div id="result" >
    <?php
foreach($categorylist as $row)
            {?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 categorytext">
     <a href="javascript:;"  data-id="<?=$row->categoryid?>" class="catview">
    
    <span> <?php echo $row->categoryname; ?></span>
                </a>
  
</div>
<?php  }
            ?>
        </div>
        <?php
          /* foreach($templatelist as $row)
        {?>

        <div class="item  col-xs-3 col-lg-3">
            <div class="thumbnail">
                <img class="group list-group-image" src="<?php echo base_url(); ?>images/template/<?php echo $row->templateimage; ?>" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo $row->templatename; ?></h4>
                    <p class="group inner list-group-item-text">
                       <?= substr(strip_tags($row->templatedescription),1,31) ; ?>..</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $<?php echo $row->templateprice; ?></p>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <a class="btn btn-info btn-sm btn-fill pull-left preview pre" href="javascript:;" data-href="<?=$row->templateicon?>" data-name="<?=$row->templatename;?>"><i class="fa fa-eye fa-lg"></i> Preview</a>
                            <a class="btn btn-sm btn-fill btn-success pull-right" href="<?php echo site_url('template/'. url_title($row->templatename).'/'. $row->templateid); ?>"><i class="fa fa-check fa-lg"></i> Select</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php }*/
            ?>




<div id="preview-container" class="overlay-visible" style="display:none;">
        <div class="preview-header row border-bottom below30">
            <div class="col-lg-9">
                <h2 id="viewtitle">welcome</h2>
                
            </div>
            <div class="col-lg-3 alignr ">
                <div class="header-buttons pull-right">
                    
                    <a href=""  class="button select"><i class="fa fa-check"></i> Select</a>
           
                    <button class="button" id="hide-preview"><i class="fa fa-close"></i> Exit preview</button>
                </div>
            </div>
        </div>
        <div class="preview-content">
            <div>
                
                <ul class="preview-toggle linear-list button-nav above0 inline">
                    <li><button id="show-desktop-preview" value="desktop" class="media-toggle desktop-toggle btn-selected">Desktop</button></li>
                    <li><button id="show-mobile-preview" value="mobile" class="media-toggle mobile-toggle">Mobile</button></li> 
                </ul>
            </div>
            <div style="position: relative;" class="grid">
                <div class="col-lg-7">
                    <div id="desktop-preview" class="media-container active-media" style="height: 80vh;" >
                        <iframe class="preview-frame draft html active-frame viewdesktop"   data-state="draft" data-type="html" height="700px" width="100%" sandbox="allow-same-origin" style="height: 80vh;"  ></iframe>
                         <div id="loadingMessage"></div>
                       
                    <div>
                </div></div></div>
                <div class="col-lg-5">
                    <div id="mobile-preview" class="media-container">
                        <iframe class="preview-frame draft html active-frame viewdesktop"   data-state="draft" data-type="html" height="430px" width="320px" sandbox="allow-same-origin"></iframe>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--end-->




</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>   <?php include('footer.tpl'); ?>
  <!-- bootstrap type a head script -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap3-typeahead.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fullscreen-popup.js"></script>
<script>
            $(function() {

                 var site_url = "<?php echo site_url(); ?>";
        var input = $("input[name=test_search]");

            $.get(site_url+'/home/search', function(data){
                        input.typeahead({
                            source: data,
                            minLength: 1,
                        });
            }, 'json');

            input.change(function(){
                var current = input.typeahead("getActive");
               getdata(current.id);

      


            });



             
            $("#products").on("click",".preview",function(){
                var url=$(this).attr('data-href');
                var name=$(this).attr('data-name');
                var tt=$(this).attr('data-url');
                 $("#preview-container").show();
                $(".select").attr('href',tt);
                $("#viewtitle").html(name);
                
                $(".viewdesktop").attr('src',url);
                $('.viewdesktop').load(function () {
                

                });
                //$('.open-popup').trigger('click')
                });
 $('#hide-preview').click(function(){
              $("#preview-container").hide();
            });
            $("#products").on("click",".catview",function(){
              var id=$(this).attr('data-id');
              getdata(id);
            });
            });

             function getdata(id)
            { var site_url = "<?php echo site_url(); ?>";
               $.get(site_url+'/welcome/categorylistbytypehead', {id:id},function(data){
                                $('#result').html(data);
            });
            }
        </script>