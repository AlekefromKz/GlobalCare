<select id="gadgetcondition" name="gadgetcondition" value="<?php echo @$data['gadgetcondition'];?>">
   <option selected="selected" value="" disabled>Select gadget condition</option>
   <?php if (isset($gadgetcondition)){ ?><option value = "<?php echo $gadgetcondition;?>" selected = "selected"><?php echo $gadgetcondition; }?></option>
   <option value="New">New</option>
   <option value="Excellent">Excellent</option>
   <option value="Very Good">Very Good</option>
   <option value="Good">Good</option>
   <option value="Average">Average</option>
   <option value="Below Average">Below Average</option>
   <option value="Bad">Bad</option>
   <option value="Very Bad">Very Bad</option>
</select>