<select id="gadgets" name="gadgets" value="<?php echo @$data['gadgets'];?>">
   <option selected="selected" value="" disabled>Select a gadget</option>
   <?php if (isset($gadgets)){ ?><option value = "<?php echo $gadgets;?>" selected = "selected"><?php echo $gadgets; }?></option>
   <option value="Smartphone">Smartphone</option>
   <option value="Digital Camera">Digital Camera</option>
   <option value="Camera">Camera</option>
   <option value="Computer">Computer</option>
   <option value="Laptop">Laptop</option>
   <option value="Smart-Watch">Smart-Watch</option>
   <option value="TV">TV</option>
   <option value="Headphones">Headphones</option>
   <option value="Earbuds">Earbuds</option>
   <option value="VR Glasses">VR Glasses</option>
   <option value="Wifi Drone">Wifi Drone</option>
   <option value="Play Console">Play Console</option>
</select> <br><br>
<label for="gadgetname">Gadget name:</label><br><input type="text" name="gadgetname" value="<?php echo @$data['gadgetname'];?>">
<br><br>
 <label for="gadgetcondition">Gadget Condition:</label><br><?php require "gadgetcondition.php"?><br><br>