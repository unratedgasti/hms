<div class="container-fluid padded">

	<div class="row-fluid">

        <div class="span30">

            <!-- find me in partials/action_nav_normal -->

            <!--big normal buttons-->

            <div class="action-nav-normal">

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?laboratorist/manage_prescription">

                        <i class="icon-stethoscope"></i>

                        <span><?php echo get_phrase('add_diagnosis_report');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_bank">

                        <i class="icon-tint"></i>

                        <span><?php echo get_phrase('manage_blood_bank');?></span>

                        </a>

                    </div>
                      <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?laboratorist/laboratory">

                        <i class="icon-medkit "></i>

                        <span><?php echo get_phrase('laboratory');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_donor">

                        <i class="icon-user"></i>

                        <span><?php echo get_phrase('manage_blood_donor');?></span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!---DASHBOARD MENU BAR ENDS HERE-->

    </div>

    <hr />

  

  <div class="table-responsive">
    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
          <thead>
              <tr>
                  <th>Request No.</th>
                  <th>Request Date</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Company Name</th>
                  <th>Action</th>

              </tr>
          </thead>
          <tbody>
              <?php
              foreach ($patients as $key) {

                 echo "<tr>
                    <td>".$key['recno']."</td>
                     <td>".$key['requestdate']."</td>
                      <td>".$key['pxlname']."</td>
                       <td>".$key['pxfname']."</td>
                        <td>".$key['compname']."</td>
                        <td align='center' valign='middle'><a  class='btn  btn-info' href='".base_url()."index.php?laboratorist/laboratory/".$key['recno']."'>View</a></td>
                 </tr>";
              }
              ?>
          </tbody>
      </table>
  </div>