<style type="text/css">
  table, th, td, tr {
   border: none !important;
 }
</style>
<div class="box" >
  <div class="box-header" >
             <div class="table-responsive" style="overflow:auto;background-color: white;">
                <table cellpadding="0" cellspacing="0" border="0" style="background-color: white;border: none" class="table st" >

                 <thead>
                     
                 </thead>
                 <tbody>
                   <tr>
                       <td>
                           First Name
                       </td>
                       <td>
                           <input type="text" name="pxfname" value="">
                       </td>
                        <td>
                           Consult Date :
                       </td>
                       <td>
                           <input type="text" class="datepicker fill-up" name="requestdate" value=""/>
                       </td>
                       
                        <td rowspan="5" height="142" width="142" style="vertical-align: middle">
                            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRcB_AhqIKo-khmdiva0r9mobPEh0aGyU0GQcF23xug2jmwE8u6xw">
                        </td>
                   </tr>
                   <tr>
                       <td>
                           Last Name
                       </td>
                       <td>
                           <input type="text" name="pxlname"  value="">
                       </td>
                       <td>Company Name</td>
                       <td>
                           <input type="text" name="compname"  value="">
                       </td>
                        
                   </tr>
                     <tr>
                       <td>
                           Middle Name
                       </td>
                       <td>
                           <input type="text" name="pxmname"  value="">
                       </td>
                       <td>
                            ID No.
                       </td>
                       <td>
                           <input type="text" name="idno"  value="">
                       </td>
                       
                   </tr>
                
                    <tr>
                     <td >  Birth Date&nbsp;&nbsp;&nbsp;&nbsp; </td>
                       <td >
                        <input type="text" class="datepicker" name="birthdate"  value="" style="display: inline;width: 30%">
                         Age&nbsp;&nbsp;<input type="text" name="pxage"  value="" style="width: 20%">
                         
                       </td>
                        <td>
                          Reference No.
                       </td>
                       <td>
                           <input type="text" name="refno"  value="">
                       </td>
                       
                        
                   </tr>
                        <tr>
                     <td >  Status&nbsp;&nbsp;&nbsp;&nbsp; </td>
                       <td >
                     
                      <select style="display: inline;width: 30%" >

                            <option value="SINGLE"<?=$patientresult[0]['sstatus'] == 'SINGLE' ? ' selected="selected"' : '';?>>SINGLE</option>
                            <option value="MARRIED"<?=$patientresult[0]['sstatus'] == 'MARRIED' ? ' selected="selected"' : '';?>>MARRIED</option>
                            <option value="WIDOWED"<?=$patientresult[0]['sstatus'] == 'WIDOWED' ? ' selected="selected"' : '';?>>WIDOWED</option>
                              <option value=" "<?=$patientresult[0]['sstatus'] == '' ? ' selected="selected"' : '';?>>No status indicated</option> 
                            

                             
                         </select>&nbsp;&nbsp;
                         Gender&nbsp;&nbsp; <select style="width: 20%">
                               <option value="M"<?=$patientresult[0]['pxgender'] == 'M' ? ' selected="selected"' : '';?>>M</option>
                            <option value="F"<?=$patientresult[0]['pxgender'] == 'F' ? ' selected="selected"' : '';?>>F</option>
                             <option value=" "<?=$patientresult[0]['pxgender'] == '' ? ' selected="selected"' : '';?>>No gender indicated</option>

                           
                         </select>
                       </td>
                       <td>
                          Radiologist
                       </td>
                       <td>
                   
                       <select class="chzn-select">

                        <?php 

                        $this->db->order_by('recno' , 'desc');

                        $doctors = $this->db->get('drinfo')->result_array();
                                    ?>
                                    <?php
                        foreach($doctors as $row2):

                          ?>
            <option value="<?php echo $row2['recno'];?>"<?=$patientresult[0]['conductedby'] == $row2['drname'] ? ' selected="selected"' : '';?>><?php echo $row2['drname'];?></option>


                      <option value="<?php echo $row2['recno'];?>" <?php if($row2['recno'] == $row['recno'])echo 'selected';?>>

                          <?php echo $row2['drname'];?></option>

                          <?php

                          endforeach;

                          ?>
                      </select></td>  
                        
                   </tr>
             
                 </tbody>
             </table>
      
          

    </div>
  </div>
</div>
<hr>
<br>
<table class="table">
  <thead>
    <tr></tr>
  </thead>
  <tbody>
    <tr>
      <td>Procedure</td>
      <td colspan="11"><input type="text" name="" style="width: 100%"></td>
    </tr>
    <tr>
      <td>Findings</td>
      <td valign="text-top"><textarea style="width: 100%" rows="10"></textarea></td>
    </tr>
     <tr>
      <td>Remarks</td>
      <td valign="text-top"><textarea style="width: 100%" rows="5"></textarea></td>
    </tr>
  </tbody>
</table>