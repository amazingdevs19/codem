
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Employee  </title>
<?php include 'header.tpl';?>             
     <div class="be-content">
        <div class="page-head">
        
         
        </div>
        <div class="main-content container-fluid">
         
          <div class="row">

<div class="col-sm-12">
              
  
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Employee List
                  <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                </div>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th >Name</th>
                        <th>Email ID</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Account</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
if (is_array($emplist) && count($emplist) > 0) {
            foreach($emplist as $row)
            {?>
                      <tr>
                        <td><?= ucwords($row->firstname) ?> <?= ucwords($row->lastname) ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->mobileno ?></td>
                        <td><?= $row->gender ?></td>
                        <td><?= ucwords($row->accounttype) ?></td>
                        <td><a href="delete/<?= $row->id ?>" class="icon"><i class="mdi mdi-delete"></i></a></td>
                      </tr>

                      <?php } }
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





