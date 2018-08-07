

<!--My data-->

                    
      


                </div>



            </div>
        </div>
<div id="sideNavi">
      <div class="side-navi-item item1"><div>Schedule Designer</div></div>
        <!--<div class="side-navi-item item2"><div>Item 2</div></div>-->
        <div class="side-navi-data">
            <div class="side-navi-tab">
                <div> <iframe src="https://app.acuityscheduling.com/schedule.php?owner=13052143" width="600" height="800" frameBorder="0"></iframe>
<script src="https://d3gxy7nm8y4yjr.cloudfront.net/js/embed.js" type="text/javascript"></script></div>
            </div>
          <!--  <div class="side-navi-tab">
                <div>Data Item 2</div>
            </div>-->
        </div>
    </div>
<div class="fixed-action-btn" style="bottom: 45px; 
  ">
          <a class="btn-floating btn-large red" href="<?=base_url('support-list')?>">
            <i class="pe-7s-headphones"></i>
          </a>
          
        </div>
        <footer class="footer">
            <div class="container-fluid">
            <style type="text/css">
            .btn-floating i {
    width: inherit;
    display: inline-block;
    text-align: center;
    color: #fff;
    font-size: 1.6rem;
    line-height: 55px;
}
            .btn-large i {
    font-size: 1.6em;
}.red {
    background-color:#ce0000 !important;
}.z-depth-1-half, .btn:hover, .btn-large:hover, .btn-floating:hover {
    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.14), 0 1px 7px 0 rgba(0,0,0,0.12), 0 3px 1px -1px rgba(0,0,0,0.2);
}
                .support a{
                    background-color: #ce0000;
                    color: #fff !important;
                    padding-right: 10px;
                    padding-left:10px; 


                }.fixed-action-btn {
    position: fixed;
   margin-right: 30%;
    bottom: 23px;
    padding-top: 15px;
    margin-bottom: 0;
    z-index: 998;
    display: none;
}
.btn-floating.btn-large {
    width: 56px;
    height: 56px;
}
.btn-floating {
    display: inline-block;
    color: #fff;
    position: relative;
    overflow: hidden;
    z-index: 1;
    width: 40px;
    height: 40px;
    line-height: 40px;
    padding: 0;
    background-color: #26a69a;
    border-radius: 50%;
    transition: .3s;
    cursor: pointer;
    vertical-align: middle;
}#sideNavi {
  position: fixed;
  right: 50px;
  top: 5%;
}

.side-navi-item {
  position: absolute;
  display: inline-block;
  width: 150px;
  height: 40px;
  transform: rotate(-90deg);
  transform-origin: left top 0;
  color: #fff;
  background-color: #384047;
  cursor: pointer;
  border-radius: 5px 5px 0 0;
}

.side-navi-item.item1 {
  top: 180px;
  left: 0;
}

.side-navi-item.item2 {
  top: 355px;
  left: 0;
}

.side-navi-item.active {
  background-color: #e5e5e5;
  color: #000;
}

.side-navi-item > div {
  padding-top: 10px;
  text-align: center;
}

.side-navi-data {
  position: absolute;
  top: 0;
  left: 40px;
  width: 650px;
  height: 450px;
  background-color: #e5e5e5;
}

.side-navi-tab { display: none; }

.side-navi-tab.active {
  display: inline-block;
  color: #000;
}

.side-navi-tab > div { padding: 30px; width: 100% !important; }
.content-scheduling-steps { width: 600px !important; }
            </style>

        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
     <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio-switch.js"></script>
	<!--  Charts Plugin -->
	<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
    <!--   Sharrre Library    -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.sharrre.js"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url(); ?>assets/js/light-bootstrap-dashboard.js"></script>
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/SideNavi.js"></script>
   <script type="text/javascript">
    $(function(){

    var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.sidebar-wrapper .nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).parent().removeClass('active').addClass('active');
            }
        });

            SideNavi.init({
                container : '#sideNavi',
                item : '.side-navi-item',
                data : '.side-navi-data',
                tab : '.side-navi-tab',
                active : '.active'
            });

});
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
<!--End of Tawk.to Script-->
</html>
