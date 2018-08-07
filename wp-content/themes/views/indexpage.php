<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
     <link href="<?php echo base_url(); ?>assets/lib/progresstracker/jquery.progresstracker.css" rel="stylesheet" />
    <style type="text/css">
    body{overflow: none;}
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

.pt-section {
  margin-top: 60px;
 width:100%;
 
 min-height: 100%
}

#ptsection-one,
#ptsection-three {
 /* background-color: #5f6f81;*/
}

#ptsection-two,
#ptsection-four {
  /*background-color: #28292e;*/
} section {
    height:100%;
}

.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}
section{    position: relative;
    overflow: hidden;}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
  
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
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
      border: 2px #fff solid;
    padding: 2px;
}


.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}
.hovereffect img {height: 100vh; max-height: 450px;width: 100%;}
#loadingMessage {
    width: 100%;
    height: 100%;
    z-index: 1000;
    background: #f1f1f1;
    top: 0px;
    left; 0px;
    position: absolute;
     background: url('<?=base_url('assets/img/loading.gif')?>') no-repeat center;
    
}

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

</head>
<body>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url()?>">WAM360</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           
           
            
            <li><a href="#contact">Upgrade</a></li>
           
          </ul> 
         
          <ul class="nav navbar-nav navbar-right">

            <li><a href="<?=base_url('auth/login')?>" >Login</a></li>
             <li><a href="#about">Help</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!--Start Page-->
<section style="background:url('http://demo.fifothemes.com/prolan/img/default-bg.jpg')no-repeat center center;
    background-size: cover;">
 <div class="pt-section" id="ptsection-one">
  <div class="text-center" style="padding-top: 10%">
  <h1>DISCOVER TOMORROW</h1>
  <h2>Use this template to promote and describe the benefits of your product.</h2>
  <a href="#2" class="btn btn-fill btn-lg btn-success">Get Started for Free!</a>
   </div>
  </div>
</section>
<!--end Page-->

<!--two Page-->

  <section >
  <div class="pt-section"  id="2" >  

  <div class="container">
    <div class="row">
   <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container" style="margin-top: 5px;"> 
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



            
    <div id="products" class="row ">
    <br>
     <div id="result">
    <?php
        foreach($categorylist as $row)
            {?>


         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 categorytext">
   <a href="javascript:;"  data-id="<?=$row->categoryid?>" class="catview">
        <?php echo $row->categoryname; ?>
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






</div>


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
</section>









</div>




<!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
     <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- bootstrap type a head script -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap3-typeahead.js" type="text/javascript"></script>
     <script src="<?php echo base_url(); ?>assets/lib/progresstracker/jquery.progresstracker.js" type="text/javascript"></script>

     <script src="<?php echo base_url(); ?>assets/js/jquery.scrollify.js" type="text/javascript"></script>
     <script src="http://www.mislider.com/js/mislider.js" type="text/javascript"></script>
     <link href="<?php echo base_url(); ?>assets/css/mislider.css" rel="stylesheet">
     <link href="<?php echo base_url(); ?>assets/css/mislider-skin-cameo.css" rel="stylesheet">
     <!-- bootstrap type a head script -->
    
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fullscreen-popup.js"></script>
<script>
            $(function() {
sessionStorage.clear();
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



                $('#loadingMessage').hide();
               /* $(".open-popup").fullScreenPopup({
                    bgColor: '#f1f1f1'
                });*/
            $("#products").on("click",".preview",function(){
                var url=$(this).attr('data-href');
                var name=$(this).attr('data-name');
                 var tt=$(this).attr('data-url');
               
            $("#preview-container").show();
                $(".select").attr('href',tt);
                $("#viewtitle").html(name);
                 $('#loadingMessage').show();
                $(".viewdesktop").attr('src',url);
                $('.viewdesktop').load(function () {
                 $('#loadingMessage').hide();

                });
             //
                });


            $('#hide-preview').click(function(){
              $("#preview-container").hide();
            });
            $(".hovereffect").on("click",".catview",function(){
              var id=$(this).attr('data-id');
              getdata(id);
            });

            $.scrollify({
    section:"section",
    //sectionName:false,
    scrollSpeed:1100,
    after:function(i) {


/*
      if(i===2) {
        $.scrollify.setOptions({
          easing:"easeOutExpo"
        });
      }*/

    }
  });

            /// 
            $('body').progressTracker({
            linking : true,
            
            negativeTolerance : 1,
            positiveTolerance : 0,
            displayWhenActive : true,
            disableBelow : 300
        });
            });

            function getdata(id)
            { var site_url = "<?php echo site_url(); ?>";
               $.get(site_url+'/home/finalresult', {id:id},function(data){
                                $('#result').html(data);
            });
            }



           

  

        </script>
       <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/585d4fb27418a41587c243f9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
   
</body>
</html>