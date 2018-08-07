
    	<div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src=" <?php echo $image;?>" />
                </div>
                <div class="info">
                    <a  href="<?= base_url('profile') ?>" >
                        <?php echo $firstname." ".$lastname;?>
                       
                    </a>
                   <!-- <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="<?= base_url('profile') ?>">My Profile</a></li>
                        
                            <li><a href="<?= base_url('logout') ?>">Logout</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>

            <ul class="nav">
                <li >
                    <a href="<?= base_url('dashboard') ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                   <!--<li>
                    <a data-toggle="collapse" href="#share">
                        <i class="pe-7s-piggy"></i>
                        <p>Referral 
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="share">
                        <ul class="nav">
                            <li><a href="<?= base_url('referral') ?>">Referral </a></li>
                            <li><a href="<?= base_url('history') ?>">Point Histroy </a></li>
                         </ul>
                    </div>
                </li>-->
                <li>
                    <a  href="<?= base_url('website-list') ?>">
                        <i class="pe-7s-browser"></i>
                        <p>Web Site

                          
                        </p>
                    </a>
                    
                </li>
              
                 <li>
                    <a  href="<?= base_url('create-email') ?>">
                        <i class="pe-7s-mail"></i>
                        <p>Email 
                         <!--  <b class="caret"></b>-->
                        </p>
                    </a>
                    <!---<div class="collapse" id="email">
                        <ul class="nav">
                            <li><a href="<?= base_url('index.php/property/createemail') ?>">Email </a></li>
                         </ul>
                    </div>-->
                </li>                

               <!--  <li>
                    <a  href="<?= base_url('calendar') ?>">
                        <i class="pe-7s-date"></i>
                        <p>Calendar
                              
                        </p>
                    </a>
                 <div class="collapse" id="other">
                        <ul class="nav">
                            <li><a href="<?= base_url('index.php/transferuser/1') ?>">Other User </a></li>
                         </ul>
                    </div>
                </li>-->
                    <li>
                    <a href="<?= base_url('payment') ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Invoice</p>
                    </a>
                </li>
           
                <!--<li>
                    <a data-toggle="collapse" href="#profile">
                        <i class="pe-7s-user"></i>
                        <p>Profile
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="profile">
                        <ul class="nav">
                            <li><a href="<?= base_url('index.php/profile') ?>">Change Profile</a></li>
                            <li><a href="<?= base_url('index.php/changepassword') ?>">Change Password</a></li>
                        </ul>
                    </div>
                </li>-->
               
              <!--  <li>
                     <a data-toggle="collapse" href="#support">
                        <i class="pe-7s-headphones"></i>
                        <p>Support
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="support">
                        <ul class="nav">
                            <li><a href="<?= base_url('support-ticket') ?>">Create Ticket</a></li>
                            <li><a href="<?= base_url('support-list') ?>">Ticket list</a></li>
                        </ul>
                    </div>
                </li>
           -->

          <!-- <li>
                                    <a href="<?= base_url('support/create') ?>">
                                        <i class="pe-7s-help1"></i> 
                                        <p>Help Center</p>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?= base_url('auth/logout') ?>" >
                                        <i class="pe-7s-close-circle"></i>
                                       <p> Log out</p>
                                    </a>
                                </li>
                                -->
                                <li>
                                  
                  <a href="javascript:;" id="minimizeSidebar" class="navbar-minimize">
                        <i class="fa fa-angle-left visible-on-sidebar-regular" ></i>
                        <p class="visible-on-sidebar-regular">Collapse</p>
                       
                        <i class="fa fa-angle-right  visible-on-sidebar-mini"  ></i>
                </a>
                                </li>
                 </ul>
   


    	</div>