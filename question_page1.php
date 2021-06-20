<?php $title = 'Refluxis'; include("header.php");?>
<form method="get" action="question_page2.php">
    <div class="question" >
    How do you like to sleep? *
    </div>
<input type="radio" name="sleepType" value="soft" checked="true"/>
<label for="soft">Soft lying feeling</label><br>
<input type="radio" name="sleepType" value="medium"/>
<label for="medium">Medium lying feeling</label><br>
<input type="radio" name="sleepType" value="Firm lying feeling"/>
<label for="firm">Firm lying feeling</label><br>
<input type="submit" value="next">
</form>

<?php include("footer.php");?>

