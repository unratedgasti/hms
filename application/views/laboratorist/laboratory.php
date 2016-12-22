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
                           <input type="text" name="pxfname" value="<?=$patientresult[0]['pxfname']?>">
                       </td>
                        <td>
                           Consult Date :
                       </td>
                       <td>
                           <input type="text" class="datepicker fill-up" name="requestdate" value="<?=date("m/d/Y", strtotime($patientresult[0]['requestdate']))?>"/>
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
                           <input type="text" name="pxlname"  value="<?=$patientresult[0]['pxlname']?>">
                       </td>
                       <td>Company Name</td>
                       <td>
                           <input type="text" name="compname"  value="<?=$patientresult[0]['compname']?>">
                       </td>
                        
                   </tr>
                     <tr>
                       <td>
                           Middle Name
                       </td>
                       <td>
                           <input type="text" name="pxmname"  value="<?=$patientresult[0]['pxmname']?>">
                       </td>
                       <td>
                            ID No.
                       </td>
                       <td>
                           <input type="text" name="idno"  value="<?=$patientresult[0]['idno']?>">
                       </td>
                       
                   </tr>
                
                    <tr>
                     <td >  Birth Date&nbsp;&nbsp;&nbsp;&nbsp; </td>
                       <td >
                        <input type="text" class="datepicker" name="birthdate"  value="<?=date("m/d/Y", strtotime($patientresult[0]['birthdate']))?>" style="display: inline;width: 30%">
                         Age&nbsp;&nbsp;<input type="text" name="pxage"  value="<?=$patientresult[0]['pxage']?>" style="width: 20%">
                         
                       </td>
                        <td>
                          Reference No.
                       </td>
                       <td>
                           <input type="text" name="refno"  value="<?=$patientresult[0]['refno']?>">
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
                          Lab Technician
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
 

<ul class="nav nav-tabs">
            <li class="active">
        <a  href="#1" data-toggle="tab">Laboratory Results</a>
            </li>
            <li><a href="#2" data-toggle="tab">Blood Chemistry</a>
            </li>
            <li><a href="#3" data-toggle="tab">Miscellaneous</a>
            </li>
        </ul>
            <div class="tab-content ">
              <div class="tab-pane active" id="1">
                   <table class="table " cellpadding="0" cellspacing="0" border="0" >
  <thead>
    <tr>
    
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>Hemoglobin</td>
      <td><input type="text" name="hxhemoglobin" value="<?=$patientresult[0]['hxhemoglobin']?>" style="width: 75%"></td>
      <td>Segmenters</td>
      <td><input type="text" name="hxsegmenter" style="width: 75%" value="<?=$patientresult[0]['hxsegmenter']?>"></td>
      <td>Platelet Count</td>
        <td><input type="text" name="hxplatelet" style="width: 75%" value="<?=$patientresult[0]['hxplatelet']?>"></td>
    </tr>
    <tr>
     
      <td>Hematocrit</td>
      <td><input type="text" name="hxhematocrit" style="width: 75%" value="<?=$patientresult[0]['hxhematocrit']?>"></td>
      <td>Lymphocytes</td>
      <td><input type="text" name="hxlymphocyte" style="width: 75%" value="<?=$patientresult[0]['hxlymphocyte']?>"></td>
      <td> Blood Type</td>
        <td><input type="text" name="hxbloodtype" style="width: 75%" value="<?=$patientresult[0]['hxbloodtype']?>"></td>
    </tr>
    <tr>
     
      <td>WBC</td>
      <td><input type="text" name="hxwbc" style="width: 75%" value="<?=$patientresult[0]['hxwbc']?>"></td>
      <td>Monocytes</td>
      <td><input type="text" name="hxmonocyte" style="width: 75%" value="<?=$patientresult[0]['hxmonocyte']?>"></td>
      <td>HBsAg</td>
        <td><input type="text" name="hxhbsag" style="width: 75%" value="<?=$patientresult[0]['hxhbsag']?>"></td>
    </tr>
    <tr>
     
      <td></td>
      <td></td>
      <td>Others</td>
      <td><input type="text" name="hxothers" style="width: 75%" value="<?=$patientresult[0]['hxothers']?>"></td>
      <td>RPR</td>
        <td><input type="text" name="hxrpr" style="width: 75%" value="<?=$patientresult[0]['hxrpr']?>"></td>
    </tr>
    <tr>
        <td>Color</td>
      <td colspan="2"><select>
         <option value="Yellow"<?=$patientresult[0]['uxmaccol'] == 'Yellow' ? ' selected="selected"' : '';?>>Yellow</option>
            <option value="Green"<?=$patientresult[0]['uxmaccol'] == 'Green' ? ' selected="selected"' : '';?>>Green</option>
               <option value="Brown"<?=$patientresult[0]['uxmaccol'] == 'Brown' ? ' selected="selected"' : '';?>>Brown</option>
      </select></td>
      <td>RBC</td>
        <td colspan="2"><input type="text" name="uxmicrbc"  value="<?=$patientresult[0]['uxmicrbc']?>"></td>
    </tr>
     <tr>
        <td>Transparency</td>
    
      <td colspan="2"><select>
     <option value="Slight Turbid"<?=$patientresult[0]['uxmactrans'] == 'Slight Turbid' ? ' selected="selected"' : '';?>>Slight Turbid</option>
            <option value="Turbid"<?=$patientresult[0]['uxmactrans'] == 'Turbid' ? ' selected="selected"' : '';?>>Turbid</option>

      </select></td>
      <td>Pus. Cells</td>
        <td colspan="2"><input type="text" name="uxmicplus" value="<?=$patientresult[0]['uxmicplus']?>"></td>
    </tr>
     <tr>

        <td>Reaction</td>
      <td colspan="2"><input type="text" name="uxmacreac"  value="<?=$patientresult[0]['uxmacreac']?>"></td>
      <td>Bacteria</td>
       <td colspan="2"><select>
     <option value="Few"<?=$patientresult[0]['uxmicbact'] == 'Few' ? ' selected="selected"' : '';?>>Few</option>
            <option value="Normal"<?=$patientresult[0]['uxmicbact'] == 'Normal' ? ' selected="selected"' : '';?>>Normal</option>
             <option value="More"<?=$patientresult[0]['uxmicbact'] == 'More' ? ' selected="selected"' : '';?>>More</option>

      </select></td>
    </tr>
     <tr>
        <td>Sp. Gravity</td>
      <td colspan="2"><input type="text" name="uxmacspec" value="<?=$patientresult[0]['uxmacspec']?>"></td>
      <td>Epithelial Cells</td>
        <td colspan="2"><select>
   <option value="Few"<?=$patientresult[0]['uxmicepith'] == 'Few' ? ' selected="selected"' : '';?>>Few</option>
            <option value="Normal"<?=$patientresult[0]['uxmicepith'] == 'Normal' ? ' selected="selected"' : '';?>>Normal</option>
             <option value="More"<?=$patientresult[0]['uxmicepith'] == 'More' ? ' selected="selected"' : '';?>>More</option>
      </select></td>
    </tr>
     <tr>
        <td>Sugar</td>
      <td colspan="2"><select>
       <option value="Positive"<?=$patientresult[0]['uxmacsugar'] == 'Positive' ? ' selected="selected"' : '';?>>Positive</option>
            <option value="Negative"<?=$patientresult[0]['uxmacsugar'] == 'Negative' ? ' selected="selected"' : '';?>>Negative</option>
      </select></td>
      <td>Amorph Urates/Phospates</td>
        <td colspan="2"><select>
      <option value="Few"<?=$patientresult[0]['uxmicamorph'] == 'Few' ? ' selected="selected"' : '';?>>Few</option>
            <option value="Normal"<?=$patientresult[0]['uxmicamorph'] == 'Normal' ? ' selected="selected"' : '';?>>Normal</option>
             <option value="More"<?=$patientresult[0]['uxmicamorph'] == 'More' ? ' selected="selected"' : '';?>>More</option>
      </select></td>
    </tr>
     <tr>
        <td>Protein</td>
       <td colspan="2"><select>
        <option value="Positive"<?=$patientresult[0]['uxmacprotein'] == 'Positive' ? ' selected="selected"' : '';?>>Positive</option>
            <option value="Negative"<?=$patientresult[0]['uxmacprotein'] == 'Negative' ? ' selected="selected"' : '';?>>Negative</option>
      </select></td>
      <td>Pregnancy Test</td>
        <td colspan="2"><input type="text" name="uxmicpreg" value="<?=$patientresult[0]['uxmicpreg']?>"></td>
    </tr>
    <tr>
         <td></td>
       <td colspan="2"></td>
      <td>Others</td>
        <td colspan="2"><input type="text" name="uxmicothers" value="<?=$patientresult[0]['uxmicothers']?>" ></td>
    </tr>
     <tr>
        <td>Color</td>
      <td colspan="2"><select>
      <option value="Yellow"<?=$patientresult[0]['fxmaccol'] == 'Yellow' ? ' selected="selected"' : '';?>>Yellow</option>
            <option value="Green"<?=$patientresult[0]['fxmaccol'] == 'Green' ? ' selected="selected"' : '';?>>Green</option>
               <option value="Brown"<?=$patientresult[0]['fxmaccol'] == 'Brown' ? ' selected="selected"' : '';?>>Brown</option>
                 <option value=" "<?=$patientresult[0]['fxmaccol'] == '' ? ' selected="selected"' : '';?>></option>
      </select></td>
      <td>Pus. Cells</td>
        <td colspan="2"><input type="text" name="fxmicpus" value="<?=$patientresult[0]['fxmicpus']?>" ></td>
    </tr>
     <tr>
        <td>Consistency</td>
      <td colspan="2"><select>
       <option value="1"<?=$patientresult[0]['fxmaccon'] == '1' ? ' selected="selected"' : '';?>>1</option>
            <option value="2"<?=$patientresult[0]['fxmaccon'] == '2' ? ' selected="selected"' : '';?>>1</option>
               <option value="3"<?=$patientresult[0]['fxmaccon'] == '3' ? ' selected="selected"' : '';?>>2</option>
                 <option value=" "<?=$patientresult[0]['fxmaccon'] == '' ? ' selected="selected"' : '';?>></option>
      </select></td>
      <td>RBC Cells</td>
        <td colspan="2"><input type="text" name="fxmicrbc" value="<?=$patientresult[0]['fxmicrbc']?>" ></td>
    </tr>
      <tr>
    <td>
        Findings
    </td>
        <td colspan="5">
  <textarea class="form-control" rows="5" cols="50" style="width: 100%">
      <?=$patientresult[0]['labfindings']?>
  </textarea>
</td>
    </tr>
  </tbody>
</table>
                </div>
                <div class="tab-pane" id="2">
                <table class="table " cellpadding="0" cellspacing="0" border="0" >
                <thead>
                    
                </thead>
                    <tbody>
                    <tr>
                     <td>Random Blood Sugar</td>
                     <td colspan="2"><input type="text" name="bcrandombs" value="<?=$patientresult[0]['bcrandombs']?>" ></td>
                     <td>Fasting Blood Sugar</td>
                     <td colspan="2"><input type="text" name="bcfastingbs" value="<?=$patientresult[0]['bcfastingbs']?>" ></td>
                    </tr>
                   
                    <tr>
                     <td>Blood Uric Acid</td>
                     <td colspan="2"><input type="text" name="bcbloodua" value="<?=$patientresult[0]['bcbloodua']?>" ></td>
                     <td>Blood Urea Nitrogen</td>
                     <td colspan="2"><input type="text" name="bcbloodun" value="<?=$patientresult[0]['bcbloodun']?>" ></td>
                    </tr>
                    <tr>
                    <td>Creatinine</td>
                     <td colspan="2"><input type="text" name="bccreatinine" value="<?=$patientresult[0]['bccreatinine']?>" ></td>
                    <td>Cholesterol</td>
                     <td colspan="2"><input type="text" name="bccholesterol" value="<?=$patientresult[0]['bccholesterol']?>" ></td>
                    </tr>                   
                    <tr>
                     <td>Triglycerides</td>
                     <td colspan="2"><input type="text" name="bctriglycerides" value="<?=$patientresult[0]['bctriglycerides']?>" ></td>
                     <td>HDL</td>
                     <td colspan="2"><input type="text" name="bchdl" value="<?=$patientresult[0]['bchdl']?>" ></td>
                    </tr>
                    <tr>
                     <td>LDL</td>
                     <td colspan="2"><input type="text" name="bcldl" value="<?=$patientresult[0]['bcldl']?>" ></td>
                     <td>ALT/SGPT</td>
                     <td colspan="2"><input type="text" name="bcaltsgpt" value="<?=$patientresult[0]['bcaltsgpt']?>" ></td>
                    </tr>
                    <tr>
                     <td>AST/SGOT</td>
                     <td colspan="2"><input type="text" name="bcastsgot" value="<?=$patientresult[0]['bcastsgot']?>" ></td>
                     <td>HDL</td>
                     <td colspan="2"><input type="text" name="" value="<?=$patientresult[0]['fxmicrbc']?>" ></td>
                    </tr>
                    <tr>
                     <td>Sodium</td>
                     <td colspan="2"><input type="text" name="bcsodium" value="<?=$patientresult[0]['bcsodium']?>" ></td>
                     <td>Pottassium</td>
                     <td colspan="2"><input type="text" name="bcpotassium" value="<?=$patientresult[0]['bcpotassium']?>" ></td>
                    </tr>
                     <tr>
                     <td>Glycosylated Hb</td>
                     <td colspan="2"><input type="text" name="bcglycosylatedhb" value="<?=$patientresult[0]['bcglycosylatedhb']?>" ></td>
                     <td></td>
                     <td colspan="2"></td>
                    </tr>
                     <tr>
                     <td>Others</td>
                     <td colspan="11"><input type="text" name="bcothers" style="width: 100%" value="<?=$patientresult[0]['bcothers']?>" ></td>
                     
                    </tr>
                    </tbody>
                </table>
                </div>
        <div class="tab-pane" id="3">
            <div>
                Miscellaneous 
                <textarea rows="20" style="width: 80%" >
                   <?=$patientresult[0]['miscellaneous']?>
                </textarea>
            </div>
                </div>

<div style="float: right">
    <input type="submit" class="btn btn-primary" name="" value="Print">
    <input type="submit" class="btn btn-success" name="" value="Save">
    <input type="submit" class="btn btn-warning" name="" value="Close">
</div>
            </div>
