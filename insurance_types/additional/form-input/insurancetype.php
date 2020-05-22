<select id="InsuranceType" name="InsuranceType" value="<?php echo @$data['InsuranceType'];?>">
   <option selected="selected" value="" disabled>Select insurance coverage amount</option>
   <?php if (isset($InsuranceType)){ ?><option value = "<?php echo $InsuranceType;?>" selected = "selected"><?php echo $InsuranceType; }?></option>
   <option value="Basic">Basic (0 - 10k)</option>
   <option value="Standart">Standart (10k - 50k)</option>
   <option value="Select">Select (50k - 100k)</option>
   <option value="Advanced">Advanced (100k - 250k)</option>
   <option value="Luxury">Luxury (250k - 1M)</option>
</select>