<select id="area" name="Area" value="<?php echo @$data['Area'];?>">
   <option selected="selected" value="" disabled>Select an area</option>
   <?php if (isset($Area)){ ?><option value = "<?php echo $Area;?>" selected = "selected"><?php echo $Area; }?></option>
   <option value="Worldwide">Worldwide</option>
   <option value="USA">USA</option>
   <option value="Europe">Europe</option>
   <option value="Asia">Asia</option>
   <option value="Worldwide-USA">Worldwide excluding USA</option>
</select>