
<?php include('header.tpl'); ?>

<style>

.ifreame {
    background: #fff;
    
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
   
  
}


</style>


<div class="row ifreame">
 <div class="col-md-12">
  <iframe id="main_frame" src="<?=base_url('welcome/wplogin?webname='.$webname)?>" width="100%" height="100%" style="height:100vh" frameborder="0"></iframe>
 </div>
 </div>


<?php include('footer.tpl'); ?>
<script type="text/javascript">
	$(function(){
		$("body").attr('class','sidebar-mini');
	});
</script>

</html>
