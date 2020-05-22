<select id="sickreason" name="sickreason" value="<?php echo @$data['sickreason'];?>">
   <option selected="selected" value="" disabled>Select reason</option>
   <?php if (isset($sickreason)){ ?><option value = "<?php echo $sickreason;?>" selected = "selected"><?php echo $sickreason; }?></option>
   <option value="Accident">Accident</option>
   <option value="Fever">Fever</option>
   <option value="Coronavirus">Coronavirus</option>
   <option value="Allergy">Allergy</option>
   <option value="Cancers">Cancers</option>
   <option value="Astma">Astma</option>
   <option value="Other">Other</option>
   <option value="None">None</option>
</select>