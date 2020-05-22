<div class="confirmation">
    <input type="checkbox" name="confirm1" class="exception" <?php if(isset($data['confirm1'])) echo "checked";?>>
    <label for="confirm1">I read, understand, and agree with the <a href="../legal-documents/terms.php">terms and conditions</a> and the <a href="../legal-documents/productdocument.php">product document</a> information as well as all legal documentation and correspondence is exclusively in English language.</label><br><br>

    <input type="checkbox" name="confirm2" class="exception" <?php if(isset($data['confirm2'])) echo "checked";?>>
    <label for="confirm2">I read, understand and agree to the fact that this plan is sold online without personal advice. I understand that if I require personal advice, I can contact Swisscare directly.</label><br><br>

    <input type="checkbox" name="confirm3" class="exception" <?php if(isset($data['confirm3'])) echo "checked";?>>
    <label for="confirm3">I read, understand and agree with <a href="../legal-documents/legalinformation.php">legal information</a> and <a href="../legal-documents/dataprotectionpolicy.php">the data protection policy</a>.
    </label>
</div>