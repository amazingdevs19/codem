
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">General Tables</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li><a href="<?=base_url('admin/dashboard')?>"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  
                  <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Categories </span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('admin/category/create')?>">Categories Listing </a>
                      </li>
                      <li><a href="<?=base_url('admin/category')?>">All Categories</a>
                      </li>
                     </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-border-all"></i><span>Template</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('admin/template/create')?>">Template Listing</a>
                      </li>
                      <li><a href="<?=base_url('admin/template')?>">All Template</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>User</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('admin/user')?>">User List</a>
                      </li>
                     
                      </ul>
                  </li>
                  <li class="divider">Support</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-chart-donut"></i><span>Support</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('admin/supportadmin/')?>">All List</a>
                      </li>
                     
                    </ul>
                  </li>
                   <li class="divider">Payment & Invoice</li>
                  <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Payment</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('admin/payment/allpayment')?>">All Payment</a>
                      </li>
                     <!-- <li><a href="<?=base_url('admin/payment/allpadding')?>">Padding Payment</a>
                      </li>
                      <li><a href="<?=base_url('admin/payment/allrefund')?>">Refund Paymant</a>
                      </li>
                      <li><a href="<?=base_url('admin/payment/allfaill')?>">Fail Transaction</a>
                      </li>-->
                    </ul>
                  </li>
                  <li class="divider">Domain & SubDomain</li>
                  

                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Domain</span></a>

                     <ul class="sub-menu">
                      <li><a href="<?=base_url('admin/domain')?>">Host Name List</a>
                      </li>
                      <li><a href="<?=base_url('admin/domain/subdomain')?>">SubDomain List</a>
                      </li>
                      <li><a href="<?=base_url('admin/domain/transfer')?>">Transfer Owner List </a>
                      </li>
                      </ul>
                
                   </li>
                  
                  <li class="divider">Email & SMS</li>
                  
                  <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>
                  Email & SMS</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('admin/send')?>">Send Email</a>
                      </li>
                      <li><a href="<?=base_url('admin/send/sms')?>">Send SMS</a>
                      </li>
                     </ul>
                  </li>
                  <li class="divider">Administrator</li>
                  
                  <li class="parent"><a href="#"><i class="icon mdi mdi-account-box-o"></i><span>Administrator</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url('admin/admin/create')?>"> Administrator</a>
                      </li>
                      <li><a href="<?=base_url('admin/admin/adminlist')?>">All Administrator</a>
                      </li>
                      <li><a href="<?=base_url('admin/admin/employee')?>">All Employee</a>
                      </li>
                     </ul>
                  </li>
                 <li class="divider">Setting</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-settings"></i><span>Setting</span></a>
                    <ul class="sub-menu">
                      <li>
                      <a href="<?=base_url('admin/setting/general')?>">General</a>
                      </li>
                      <li><a href="<?=base_url('admin/setting/seo')?>">SEO</a>
                      </li>
                      
                    </ul>
                  </li> <!--
                  <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Layouts</span></a>
                    <ul class="sub-menu">
                      <li><a href="layouts-primary-header.html">Primary Header</a>
                      </li>
                      <li><a href="layouts-success-header.html">Success Header</a>
                      </li>
                      <li><a href="layouts-warning-header.html">Warning Header</a>
                      </li>
                      <li><a href="layouts-danger-header.html">Danger Header</a>
                      </li>
                      <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                      </li>
                      <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                      </li>
                      <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                      </li>
                      <li><a href="pages-blank-aside.html">Page Aside</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Maps</span></a>
                    <ul class="sub-menu">
                      <li><a href="maps-google.html">Google Maps</a>
                      </li>
                      <li><a href="maps-vector.html">Vector Maps</a>
                      </li>
                    </ul>
                  </li>-->
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">80%</span><span class="name">Current Project</span></div>
            <div class="progress">
              <div style="width: 80%;" class="progress-bar progress-bar-success"></div>
            </div>
          </div>
        </div>
      </div>