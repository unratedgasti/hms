<style type="text/css">
  table, th, td, tr {
   border: none !important;
 }
 th, td{
 
  text-align: center !important;
 }

</style>
<div class="box" >

	<div class="box-header" >
   <table cellpadding="0" cellspacing="0" border="0" style="background-color: white;border: none" class="dTable responsive " >
    <thead>

    </thead>
    <tbody>
     <tr>
      <td>Package Name</td>
      <td colspan="2"><input type="text" name="" ></td>
      <td>Company Name</td>
      <td colspan="2"><select class="chzn-select">

        <?php 

        $this->db->order_by('account_opening_timestamp' , 'asc');

        $patients = $this->db->get('patient')->result_array();

        foreach($patients as $row2):

          ?>

        <option value="<?php echo $row2['patient_id'];?>" <?php if($row2['patient_id'] == $row['patient_id'])echo 'selected';?>>

          <?php echo $row2['name'];?></option>

          <?php

          endforeach;

          ?>
          </select></td>        
      </tr>
      <tr>
        <td>Description</td>
        <td colspan="2"><textarea rows="3"></textarea></td>
        <td>Price</td>
        <td colspan="2"><input type="text" name="" ></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
 <button class="btn btn-primary"  style="float: right;margin-right: 1%;margin-top: 1%"><i class="icon-plus "></i>   Add Row</button>
<div class="box" >
 
      <table class="table " cellpadding="0" cellspacing="0" border="0" style="background-color: white;border: none" >
    <thead>
    <tr>
      <th>
        Service name
      </th>
      <th >
        Description
      </th>
    </tr>

    </thead>
    <tbody>
    <tr>
      <td>
        <input type="text" name="">
      </td>
       <td>
        <input type="text" name="">
      </td>
    </tr>
    </tbody>
    </table>

    
  
  </div>
<div style="float: right">
  <input class="btn btn-success" type="submit" name="" value="Save">  
  <input class="btn btn-warning" type="submit" name="" value="Close">
</div>
  

