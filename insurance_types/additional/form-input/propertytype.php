<select id="propertytype" name="propertytype" value="<?php echo @$data['propertytype'];?>">
   <option selected="selected" value="" disabled>Select property type</option>
   <?php if (isset($propertytype)){ ?><option value = "<?php echo $propertytype;?>" selected = "selected"><?php echo $propertytype; }?></option>
   <option value="Single pen">Single pen</option>
   <option value="Double pen">Double pen</option>
   <option value="Hut">Hut</option>
   <option value="Cottage">Cottage</option>
   <option value="Ranch">Ranch</option>
   <option value="Movable dwellings">Movable dwelings</option>
   <option value="Apartment">Apartment</option>
   <option value="House">House</option>
   <option value="Office">Office</option>   
   <option value="Mansion">Mansion</option>
   <option value="Castle">Castle</option>
   <option value="Factory">Factory</option>
</select>