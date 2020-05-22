<select id="EngineSize" name="EngineSize" value="<?php echo @$data['EngineSize'];?>">
   <option selected="selected" value="" disabled>Select engine size</option>
   <?php if (isset($EngineSize)){ ?><option value = "<?php echo $EngineSize;?>" selected = "selected"><?php echo $EngineSize; }?></option>
   <option value="0.2">0.2 L.</option>
   <option value="0.4">0.4 L.</option>
   <option value="0.5">0.5 L.</option>
   <option value="0.6">0.6 L.</option>
   <option value="0.7">0.7 L.</option>
   <option value="0.8">0.8 L.</option>
   <option value="0.9">0.9 L.</option>
   <option value="1.0">1.0 L.</option>
   <option value="1.2">1.2 L.</option>
   <option value="1.4">1.4 L.</option>
   <option value="1.5">1.5 L.</option>
   <option value="1.6">1.6 L.</option>
   <option value="1.8">1.8 L.</option>
   <option value="2.0">2.0 L.</option>
   <option value="2.2">2.2 L.</option>
   <option value="2.4">2.4 L.</option>
   <option value="2.5">2.5 L.</option>
   <option value="2.6">2.6 L.</option>
   <option value="2.8">2.8 L.</option>
   <option value="3.0">3.0 L.</option>
   <option value="3.2">3.2 L.</option>
   <option value="3.4">3.4 L.</option>
   <option value="3.6">3.6 L.</option>
   <option value="3.8">3.8 L.</option>
   <option value="4.0">>4.0 L</option>
</select>