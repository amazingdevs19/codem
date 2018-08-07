<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transfer owner ship Website  </title>
<?php include 'header.tpl';?>
<style type="text/css">
  .card {
  display: inline-block;
  position: relative;
  width: 100%;
  margin: 25px 0;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
  border-radius: 6px;
  color: rgba(0,0,0, 0.87);
  background: #fff;
}
.card .card-height-indicator {
  margin-top: 100%;
}
.card.row-space .header {
  padding: 15px 20px 0;
}
.card .map {
  height: 280px;
  border-radius: 6px;
  margin-top: 15px;
}
.card .map.map-big {
  height: 420px;
}
.card .card-title {
  margin-top: 0;
  margin-bottom: 3px;
}
.card .card-title:not(.card-calendar .card-title) {
  margin-top: 0;
  margin-bottom: 5px;
}
.card .card-image {
  height: 60%;
  position: relative;
  overflow: hidden;
  margin-left: 15px;
  margin-right: 15px;
  margin-top: -30px;
  border-radius: 6px;
  z-index: 3;
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.card .card-image img {
  width: 100%;
  height: 100%;
  border-radius: 6px;
  pointer-events: none;
}
.card .card-image .card-title {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: #fff;
  font-size: 1.3em;
  text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
}
.card .category:not([class*="text-"]) {
  color: #999999;
  font-size: 14px;
}
.card .card-content {
  padding: 15px 20px;
  position: relative;
}
.card .card-content .category {
  margin-bottom: 0;
}
.card .card-actions {
  position: absolute;
  z-index: 1;
  top: -50px;
  width: calc(100% - 30px);
  left: 17px;
  right: 17px;
  text-align: center;
}
.card .card-actions .btn {
  padding-left: 12px;
  padding-right: 12px;
}
.card .card-actions .fix-broken-card {
  position: absolute;
  top: -65px;
}
.card .card-header {
  padding: 15px 20px 0;
  z-index: 3;
}
.card .card-header .category {
  margin-bottom: 0;
}
.card .card-header.card-header-text {
  display: inline-block;
}
.card .card-header.card-header-text:after {
  content: "";
  display: table;
}
.card .card-header.card-header-icon {
  float: left;
}
.card .card-header.card-header-icon i {
  width: 33px;
  height: 33px;
  text-align: center;
  line-height: 33px;
}
.card .card-header.card-header-tabs .nav-tabs {
  background: transparent;
  padding: 0;
}
.card .card-header.card-header-tabs .nav-tabs-title {
  float: left;
  padding: 10px 10px 10px 0;
  line-height: 24px;
}
.card .card-header.card-header-icon + .card-content .card-title {
  padding-bottom: 15px;
}
.card .social-line {
  margin-top: 15px;
  text-align: center;
  padding: 0;
}
.card .social-line .btn {
  color: #FFFFFF;
  margin-left: 5px;
  margin-right: 5px;
}
.card [data-background-color] {
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
  margin: -20px 15px 0;
  border-radius: 3px;
  padding: 15px;
  background-color: #999999;
  position: relative;
}
.card [data-background-color] .card-title {
  color: #FFFFFF;
}
.card [data-background-color] .category {
  margin-bottom: 0;
  color: rgba(255, 255, 255, 0.62);
}
.card [data-background-color] .ct-label {
  color: rgba(255, 255, 255, 0.7);
}
.card [data-background-color] .ct-grid {
  stroke: rgba(255, 255, 255, 0.2);
}
.card [data-background-color] .ct-series-a .ct-point,
.card [data-background-color] .ct-series-a .ct-line,
.card [data-background-color] .ct-series-a .ct-bar,
.card [data-background-color] .ct-series-a .ct-slice-donut {
  stroke: rgba(255, 255, 255, 0.8);
}
.card [data-background-color] .ct-series-a .ct-slice-pie,
.card [data-background-color] .ct-series-a .ct-area {
  fill: rgba(255, 255, 255, 0.4);
}
.card .chart-title {
  position: absolute;
  top: 25px;
  width: 100%;
  text-align: center;
}
.card .chart-title h3 {
  margin: 0;
  color: #FFFFFF;
}
.card .chart-title h6 {
  margin: 0;
  color: rgba(255, 255, 255, 0.4);
}
.card .ct-chart ~ .card-footer i:nth-child(1n+2) {
  width: 18px;
  text-align: center;
}
.card .card-footer {
  margin: 0 20px 10px;
  padding-top: 10px;
  border-top: 1px solid #eeeeee;
}
.card .card-footer .form-group {
  margin: 5px 0 0;
}
.card .card-footer .content {
  display: block;
}
.card .card-footer div {
  display: inline-block;
}
.card .card-footer .author {
  color: #999999;
}
.card .card-footer .stats {
  line-height: 22px;
  color: #999999;
  font-size: 12px;
}
 .stats  .text{ font-size: 16px;  }
.card .card-footer .stats .material-icons {
  position: relative;
  top: 4px;
  font-size: 16px;
}
.card .card-footer .stats .category {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.card .card-footer h4 {
  margin: 5px 0;
}
.card .card-footer .btn {
  margin-top: 5px;
  margin-bottom: 5px;
}
.card .card-footer h6 {
  color: #999999;
}
.card form .card-footer {
  border: none;
}
.card img {
  width: 100%;
  height: auto;
}
.card .category .material-icons {
  position: relative;
  top: 6px;
  line-height: 0;
}
.card .category-social .fa {
  font-size: 24px;
  position: relative;
  margin-top: -4px;
  top: 2px;
  margin-right: 5px;
}
.card .author .avatar {
  width: 30px;
  height: 30px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 5px;
}
.card .author a {
  color: #3C4858;
  text-decoration: none;
}
.card .author a .ripple-container {
  display: none;
}
.card .table {
  margin-bottom: 0;
}
.card .table tr:first-child td {
  border-top: none;
}
.card .nav-pills,
.card .tab-content {
  margin-top: 20px;
}
.card [data-background-color="purple"] {
  background: linear-gradient(60deg, #ab47bc, #8e24aa);
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
}
.card [data-icon-bg-color="purple"] i {
  color: #9c27b0;
}
.card [data-background-color="blue"] {
  background: linear-gradient(60deg, #26c6da, #00acc1);
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4);
}
.card [data-icon-bg-color="blue"] i {
  color: #00bcd4;
}
.card [data-background-color="green"] {
  background: linear-gradient(60deg, #66bb6a, #43a047);
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
}
.card [data-icon-bg-color="green"] i {
  color: #4caf50;
}
.card [data-background-color="orange"] {
  background: linear-gradient(60deg, #ffa726, #fb8c00);
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);
}
.card [data-icon-bg-color="orange"] i {
  color: #ff9800;
}
.card [data-background-color="red"] {
  background: linear-gradient(60deg, #ef5350, #e53935);
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4);
}
.card [data-icon-bg-color="red"] i {
  color: #f44336;
}
.card [data-background-color="rose"] {
  background: linear-gradient(60deg, #ec407a, #d81b60);
  box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4);
}
.card [data-icon-bg-color="rose"] i {
  color: #e91e63;
}
.card [data-header-animation="true"] {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -moz-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -o-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
  -ms-transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
  transition: all 300ms cubic-bezier(0.34, 1.61, 0.7, 1);
}
.card:hover [data-header-animation="true"] {
  -webkit-transform: translate3d(0, -50px, 0);
  -moz-transform: translate3d(0, -50px, 0);
  -o-transform: translate3d(0, -50px, 0);
  -ms-transform: translate3d(0, -50px, 0);
  transform: translate3d(0, -50px, 0);
}
.card [data-background-color] {
  color: #FFFFFF;
}
.card [data-background-color] a {
  color: #FFFFFF;
}

.card-chart .card-header {
  padding: 0;
  min-height: 160px;
}
.card-chart .card-header + .content h4 {
  margin-top: 0;
}

.card-calendar .card-content {
  padding: 0;
}

.card-stats .card-title {
  margin: 0;
}
.card-stats .card-header {
  float: left;
  text-align: center;
}
.card-stats .card-header i {
  font-size: 36px;
  line-height: 56px;
  width: 56px;
  height: 56px;
}
.card-stats .card-content {
  text-align: right;
  padding-top: 10px;
}

.card-plain {
  background: transparent;
  box-shadow: none;
}
.card-plain .card-header {
  margin-left: 0;
  margin-right: 0;
}
.card-plain .card-header-icon {
  margin-right: 15px;
}
.card-plain .content {
  padding-left: 5px;
  padding-right: 5px;
}
.card-plain .card-image {
  margin: 0;
  border-radius: 3px;
}
.card-plain .card-image img {
  border-radius: 3px;
}

.card-raised {
  box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

</style>
  <link href='<?=base_url()?>assets/css/jquery.lighter.css' rel='stylesheet' type='text/css'>
  <div class="be-content">
    <div class="page-head">


    </div>
    <div class="main-content container-fluid">
   <div class="row">
<div class="col-md-12">
       
    
        <div class="card">
          <div class="header">
            <h4 class="title">
             </h4>
            </div>
            <div class="content">

            <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                
                                <div class="card-content" style="text-align:center;">
                                    <p class="category">Total</p>
                                    <h1 class="card-title" style="font-weight:800;font-size:50px;"><?php
                                   $sum=0;
                                  foreach ($point as $row)
                                  {
                                  if($row->credit!=0){
                                    $sum+= $row->credit;
                                    }
                          
                                  }
                          echo '$'.$sum;


                                  ?></h1>
                                </div>
                                <div class="card-footer">
                                    <div class="stats ">
                                        <a href="<?=base_url('referral')?>" class="text" >Total Credits till date</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                
                                <div class="card-content" style="text-align:center;">
                                    <p class="category">Total Credits Used</p>
                                    <h1 class="card-title" style="font-weight:800;font-size:50px;"><?php
                                $de=0;
                                  foreach ($point as $row)
                          {
                          if($row->debit!=0){
                          $de+= $row->debit;
                          }
                          
                          }
                          echo '$'.$de;


                                  ?></h1>
                                </div>
                                <div class="card-footer">
                                    <div class="stats ">
                                        <a href="<?=base_url('referral')?>" class="text" >Total Credits used</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                         <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                
                                <div class="card-content" style="text-align:center;">
                                    <p class="category">Total Credits Left</p>
                                    <h1 class="card-title" style="font-weight:800;font-size:50px;"><?php
                                $le=0;
                                  foreach ($point as $row)
                          {
                          if($row->debit!=0){
                          $le+= $row->debit;
                          }
                          
                          }
                          echo '$'.($sum-$le);


                                  ?></h1>
                                </div>
                                <div class="card-footer">
                                    <div class="stats ">
                                        <a href="<?=base_url('referral')?>" class="text" >Total Credits left</a>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
</div>
</div>


       <div class="col-md-12">
       
    
        <div class="card">
          <div class="header">
            <h4 class="title">
             </h4>
            </div>
            <div class="content">

           

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">WebSite</p>
                                    <h3 class="card-title"><?=$website?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger"></i>
                                        <a href="<?=base_url('index.php/category/new/'.md5(1))?>">Create A Website.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="fa fa-paypal"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pay</p>
                                    <h3 class="card-title">$<?=$balance?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                          <a href="<?=base_url('payment')?>">List of Payment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-support"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Support</p>
                                    <h3 class="card-title"><?=$support?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="<?=base_url('support-ticket')?>">Create A ticket </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             
                        </div>

                         <div class="card">
          <div class="header">
            <h6 class="title">Point List <a href="javascript:;" onclick="window.open('<?=base_url('referral')?>',null,
'height=600,width=600,status=yes,toolbar=no,menubar=no,location=no');" class="btn btn-fill btn-success btn-sm pull-right">invite friends </a>
             </h6>
            </div>
            <div class="content">

<table class="table" id="websitelist">
                                    <thead>
                                      <tr><th>ID</th>
                                      <th>Full Name</th>
                                      <th>Email ID</th>
                                      <th  class="text-right">Credit</th>
                                      <th  class="text-right">Date</th>
                                      <th class="text-right">Status</th>
                                    </tr></thead>
                                    <tbody>
                                     <?php
                                      if (is_array($history) && count($history) > 0) 
                                      {
                                          $i=1;
                                        foreach($history as $row)
                                        {?>
                                        <tr>
                                          <td><?= $i ?></td>
                                          <td><?= $row->firstname.' '.$row->lastname ?></td>
                                          <td><?php $email1 = explode('|', $row->email); echo $email1[1]; ?></td>
                                          <td  class="text-right"><?php if($row->credit!=0){echo '+ '.$row->credit;} ?></td>
                                         

                                           <td class="text-right"><?=  date("d-m-Y", strtotime($row->currentdate)) ?></td>
                                          <td class="text-right"><span class="label label-<?php if($row->status=='1'){echo"success";}else{echo"danger";} ?>"><?= $row->status?'Active':'Deactive'; ?></span>   </td>
                                         </tr>
                                         <?php $i++;}
?>
                                          <tr><td colspan="3"></td><td colspan="1" class="text-right">Total: $<?= $sum ?> /-</td><td colspan="3"></td></tr>

<?php
                                          }
                                          else { ?>
                                          <tr><td colspan="7">Record Not Found</td></tr>
                                          <?php } ?>
                                              </tbody>
                                </table>
                                </div>

                              
            </div>

                        
                      </div>
                    </div>



                  </div>
                </div>
            




<?php include 'footer.tpl';?>
              <script src='<?=base_url()?>assets/js/jquery.lighter.js' type='text/javascript'></script>

           
