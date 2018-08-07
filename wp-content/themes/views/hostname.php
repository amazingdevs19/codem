<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transfer owner ship Website  </title>
<?php include 'header.tpl';?>
  <link href='<?=base_url()?>assets/css/jquery.lighter.css' rel='stylesheet' type='text/css'>
  <div class="be-content">
    <div class="page-head">


    </div>
    <div class="main-content container-fluid">
     <div class="card">
      <div class="header">
<?php $flashData = $arrSess->flashdata('setSuccessMsg');if (!empty($flashData)) {?>
	<div class="card">
	          <div class="alert dark alert-success alert-dismissible" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	              <span aria-hidden="true">×</span>
	            </button>
	            <i class="icon wb-check" aria-hidden="true"></i>
	<?php echo $arrSess->flashdata('setSuccessMsg');?>
	</div>
	        </div>
	<?php }?>

        <h4 class="title">Webstie List
          <a href="<?=base_url('index.php/category/new/'.md5(1))?>" class="btn btn-fill btn-success btn-sm pull-right">Create New </a></h4>
        </div>
        <div class="content ">
          <div class=" table-responsive">
            <table class="table table-bordered" id="websitelist">
              <thead>
                <tr class="active"><th>ID</th>

                  <th>WebSite Title</th>
                  <th>Domain</th>
                  <th >Logo</th>
                  <th>Action</th>
                  <th>Date</th>
                  <th>Expired</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr></thead>
                <tbody>
<?php
if (is_array($websitelist) && count($websitelist) > 0) {
	$i = 1;
	foreach ($websitelist as $row) {?>
		                     <tr>
		                       <td><?=$i?></td>
		                       <td><a href="<?=base_url('domain/'.$row->websitetitle)?>" target="_blank"><?=$row->websitetitle?></a></td>
		                       <td><?=$row->subdomain_name?></td>
		                       <td >
		                         <a class='sample' data-height='720' data-lighter='<?=base_url()?>/images/weblogo/<?=$row->websitelogo?>' data-width='1280' href='<?=base_url()?>/images/weblogo/<?=$row->websitelogo?>'><img src="<?=base_url()?>/images/weblogo/<?=$row->websitelogo?>" width="30" height="30" alt="bussness" ></a></td>
		                         <td><input type="checkbox" class="stbtn" data-id=<?=$row->websiteid?> <?=$row->status == '1'?'checked':'';
		?>  data-toggle="toggle"  data-size="mini">

		                        </td>

		                        <td><?=date("d-m-Y", strtotime($row->createdate))?></td>
		                        <td><?=date("d-m-Y", strtotime($row->expired))?></td>
		                        <td><span class="label label-<?=$row->status == '1'?"success":"danger";?>"><?=$row->status == '1'?'Active':'Inactive';
		?></span></td>
		                          <td>

		                            <ul class="nav navbar-nav">

		                              <li class="dropdown">
		                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Select Action <b class="caret"></b></a>
		                                <ul class="dropdown-menu">

		                                  <li><a href="<?=base_url('welcome/loginwebsite/'.$row->websitetitle)?>" rel="tooltip" data-placement="left" title="Website Edit" >Edit</a></li>
		                                  <li><a href="<?=base_url('index.php/welcome/member/'.$row->websiteid)?>"  rel="tooltip" data-placement="left" title="Transfer Website" >Transfer Ownership</a></li>
		                                  <li> <a href="<?=base_url('index.php/property/access-role/'.$row->websiteid);?>"  rel="tooltip" data-placement="left" title="Website Access Role" >Assign Roles</a> </li>


		                                  <li>

		<?php if (!empty($country) && $country != "-1") {
			if (empty($row->payment_id)) {if (empty($userreferral) || $userreferral == 0) {?>
					                                      <a  href="#" data-target="#applyReferalCodeAndPay" id="applyReferalCodeAndPayMain" data-toggle="modal" rel="tooltip" data-placement="left" title="Payment" wid="<?php echo $row->websiteid?>">Payayment</a>

					<?php } else {?>
					                                        <a  href="#" data-target="#payNowDirectly" id="payNowDirectlyMain" data-toggle="modal" rel="tooltip" data-placement="left" title="Payment" wid="<?php echo $row->websiteid?>">Payment</a>

					<?php }} else {?>

				                                          <a href="<?=base_url('index.php/property/dnscreate/'.$row->id);?>"  rel="tooltip" data-placement="left" title="Domain Name Server" >DNS</a>
				<?php }?>
			                                          <?php } else {?>
			<a href="#" data-target="#editTheCountry" data-toggle="modal" rel="tooltip" data-placement="left" title="Payment">Payment</a>
			<?php }?>

		                                         </li>

		                                         <li> <a href="<?=base_url('index.php/welcome/websitedelete/'.$row->websiteid);?>" rel="tooltip" data-placement="left" title="Delete"  onclick="return confirm('Are you sure to delete data?');" >Delete</a></li>
		                                       </ul>
		                                     </li>
		                                   </ul>




		                                 </td>
		                               </tr>
		<?php $i++;}} else {?>
	<tr><td colspan="7">Record Not Found</td></tr>
	<?php }?>
</tbody>
                             </table>
                           </div>
                         </div>
                       </div>
                     </div>



                   </div>


<?php if (empty($country) || $country == "-1") {?>
	<div class="modal fade in" id="editTheCountry" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
	                      <div class="modal-dialog modal-center">
	                        <div class="modal-content">
	                          <form action="#" method="post" id="editTheCountryForm">
	                            <div class="modal-header">
	                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                <span aria-hidden="true">×</span>
	                              </button>
	                              <h4 class="modal-title" id="exampleFormModalLabel">Save Your Country</h4>
	                            </div>
	                            <div class="modal-body">
	                              <div class="row" id="countryUpdate">
	                                <div class="col-lg-12 form-group">
	                                  <input class="form-control" id="country" name="country" placeholder="Country" type="text" value="">
	                                </div>
	                              </div>

	                              <div class="modal-footer">
	                                <input type="hidden" id="id_edit" name="id_edit" value="">
	                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                                <button type="button" id="buttoneditTheCountry" class="btn btn-info btn-fill">Save changes</button>

	                              </div>
	                              <input type="hidden" name="website_id" id="website_id" value="">
	                            </form>
	                          </div>
	                        </div>
	                      </div>
	<?php } else if (empty($userreferral) || $userreferral == 0) {?>
	                        <div class="modal fade in" id="applyReferalCodeAndPay" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog">
	                          <div class="modal-dialog modal-center">
	                            <div class="modal-content">
	                              <form action="#" method="post" id="applyReferalCodeAndPayForm">
	                                <div class="modal-header">
	                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                    <span aria-hidden="true">×</span>
	                                  </button>
	                                  <h4 class="modal-title" id="exampleFormModalLabela">Apply Referal Code</h4>
	                                </div>
	                                <div class="modal-body">
	                                 <div class="row">
	                                   <div class="col-lg-12 form-group">
	                                     <h5>Please enter your refral code and apply to get the related discount</h5>
	                                   </div>
	                                 </div>
	                                 <div class="row">
	                                  <div class="col-lg-6 form-group">
	                                    <input class="form-control" id="refereal_code" name="refereal_code" placeholder="Enter Your Referal Code" type="text" value="">
	                                  </div>
	                                  <div class="col-lg-6 form-group">
	                                    <button type="button" id="applyReferalCode" class="btn btn-info btn-fill">Apply referal Code</button>
	                                  </div>
	                                </div>
	                                <div class="row">
	                                 <div class="col-lg-12" id="pointsMessages">

	                                 </div>
	                               </div>
	                               <div class="modal-footer">
	                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

	                                <button type="button" id="buttonPayNow" class="btn btn-info btn-fill">Pay NOw</button>
	                              </div>
	                              <input type="hidden" name="website_id" id="website_id" value="">
	                              <input type="hidden" name="original_amount" id="original_amount" value="">
	                              <input type="hidden" name="total_credit_balance" id="total_credit_balance" value="">
	                              <input type="hidden" name="referal_discount" id="referal_discount" value="">
	                              <input type="hidden" name="final_amount" id="final_amount" value="">
	                              <input type="hidden" name="country" id="country" value="<?php echo strtolower($country);?>">
	                            </form>
	                          </div>
	                        </div>
	                      </div>

	<?php } else {?>
	                       <div class="modal fade in" id="payNowDirectly" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog">
	                         <div class="modal-dialog modal-center">
	                           <div class="modal-content">
	                             <form action="#" method="post" id="applyReferalCodeAndPayForm">
	                               <div class="modal-header">
	                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                   <span aria-hidden="true">×</span>
	                                 </button>
	                                 <h4 class="modal-title" id="exampleFormModalLabela">Apply Referal Code</h4>
	                               </div>
	                               <div class="modal-body">
	                                 <div class="row">
	                                  <div class="col-lg-12" id="pointsMessages">
	                                   Loading......
	                                 </div>
	                               </div>
	                               <div class="modal-footer">
	                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

	                                 <button type="button" id="buttonPayNow" class="btn btn-info btn-fill">Pay NOw</button>
	                               </div>
	                               <input type="hidden" name="website_id" id="website_id" value="">
	                               <input type="hidden" name="original_amount" id="original_amount" value="">
	                               <input type="hidden" name="total_credit_balance" id="total_credit_balance" value="">
	                               <input type="hidden" name="referal_discount" id="referal_discount" value="">
	                               <input type="hidden" name="final_amount" id="final_amount" value="">
	                               <input type="hidden" name="country" id="country" value="<?php echo strtolower($country);?>">
	                             </form>
	                           </div>
	                         </div>
	                       </div>

	<?php }?>
                       <?php include 'footer.tpl';?>
                       <script src='<?=base_url()?>assets/js/jquery.lighter.js' type='text/javascript'></script>
                       <link href="<?=base_url()?>assets/css/bootstrap-toggle.min.css" rel="stylesheet">
                       <script src="<?=base_url()?>assets/js/bootstrap-toggle.min.js"></script>
                       <script type="text/javascript">
                     // to set the data accordingly
                     function toSetData(objData){
                       $('#original_amount').val(objData.varTotalAmount);
                       $('#total_credit_balance').val(objData.varTotalCredits);
                       $('#referal_discount').val(objData.varRef);
                       $('#final_amount').val(objData.varFinalAMount);
                       $('#country').val(objData.varCountry);
                       $('#pointsMessages').html(objData.varPointsMessage);
                     }

                     function toResetData(){
                      $('#refereal_code').val("");
                      $('#original_amount').val("");
                      $('#total_credit_balance').val("");
                      $('#referal_discount').val("");
                      $('#final_amount').val("");
                      $('#pointsMessages').html("");
                      $("#applyReferalCode").removeAttr("disabled");
                      $("#buttonPayNow").removeAttr("disabled");
                      $("#buttonPayNow").html("Pay Now");
                    }

                    $(function(){

                      $('body').on('click','#payNowDirectlyMain',function(){
                        //alert('hiiii');
                        toResetData();
                        $('#website_id').val($(this).attr('wid'));
                        //alert('hiiii');
                        $.ajax({
                          method: 'POST',
                          url: '<?php echo base_url()?>index.php/Checkout/validateReferalCode',
                          data:{referal_code:"0"} ,
                          beforeSend: function(){
                            $("#buttonPayNow").attr("disabled","true");
                          },
                          success: function(data) {
                            var data = jQuery.parseJSON(data);
                            toSetData(data);
                            $("#buttonPayNow").removeAttr("disabled");
                          }
                        });
                      });

                      $('body').on('click','#applyReferalCodeAndPayMain',function(){
                        toResetData();
                        $('#website_id').val($(this).attr('wid'));
                      });

                        // when click on pay now button

                        $('body').on('click','#buttonPayNow',function(){
                          $.ajax({
                            method: 'POST',
                            dataType:'json',
                            url: '<?php echo base_url()?>index.php/Checkout/payNow',
                            data: $('#applyReferalCodeAndPayForm').serialize(),
                            beforeSend: function(){
                              $("#applyReferalCode").attr("disabled","true");
                              $("#buttonPayNow").attr("disabled","true");
                              $("#buttonPayNow").html("Wait...");
                            },
                            success: function(data) {
                              var objData = data;
                              if(objData.status=='200'){
                                $('#pointsMessages').html(objData.varPointsMessage);
                                setTimeout(function(){ window.location.href = objData.urlToRedirect; }, 1000);

                              }else{
                                $('#pointsMessages').html(objData.varPointsMessage);
                              }
                            }
                          });
                        });
                        // when click on apply Referal code
                        $('body').on('click','#applyReferalCode',function(){
                          if($('#refereal_code').val()!=""){
                            $.ajax({
                              method: 'POST',
                              url: '<?php echo base_url()?>index.php/Checkout/validateReferalCode',
                              data:{referal_code:$('#refereal_code').val()} ,
                              beforeSend: function(){
                                $("#applyReferalCode").attr("disabled","true");
                                $("#buttonPayNow").attr("disabled","true");
                              },
                              success: function(data) {
                                var data = jQuery.parseJSON(data);
                                toSetData(data);
                                $("#applyReferalCode").removeAttr("disabled");
                                $("#buttonPayNow").removeAttr("disabled");
                              }
                            });
                          }

                        });

                        $('body').on('click','#buttoneditTheCountry',function(){
                          if($('#country').val()!=""){
                            $.ajax({
                              method: 'POST',
                              dataType:'json',
                              url: '<?php echo base_url()?>index.php/property/editcountry',
                              data: $('#editTheCountryForm').serialize(),
                              beforeSend: function(){$("#buttoneditTheCountry").val("wait...");$("#buttoneditTheCountry").attr("disabled");},
                              success: function(data) {
                                window.location.reload();
                              }
                            });
                          }

                        });


                        $("#websitelist").on("change",'.stbtn',function() {
    // alert($(this).attr("data-id"));


    $.ajax({
      method: 'POST',
      url: '<?=base_url()?>/property/websitestatus',
      data: {status: $(this).prop('checked'),wid:$(this).attr("data-id")},
      success: function(data) {
                    console.log(data); //"The directory has been created."
                 //location.reload();
               }
             });
  });

                        $('a.payment').on('click', function(){
                          var w = 880, h = 600,
                          left = Number((screen.width/2)-(w/2)), tops = Number((screen.height/2)-(h/2)),
                          popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=1, copyhistory=no, width='+w+', height='+h+', top='+tops+', left='+left);
                          popupWindow.focus();
                          return false;
                        });

                      });
                    </script>
