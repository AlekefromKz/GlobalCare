<select id="propertyage" name="propertyage" value="<?php echo @$data['propertyage'];?>">
   <option selected="selected" value="" disabled>Select property age</option>
   <?php if (isset($propertyage)){ ?><option value = "<?php echo $propertyage;?>" selected = "selected"><?php echo $propertyage; }?></option>
   <option value="0-1">0-1 years</option>
   <option value="1-2">1-2 years</option>
   <option value="2-5">2-5 years</option>
   <option value="5-10">5-10 years</option>
   <option value="10-20">10-20 years</option>
   <option value="20-40">20-40 years</option>
   <option value="40-60">40-60 years</option>
   <option value="60+">60+ years</option>
   
</select>