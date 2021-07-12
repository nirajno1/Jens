<?php $title = 'Refluxis'; include("header.php");?>
<form  method="get" action="question_page3.php">
    <div class="question" >
    Do you sweat a lot at night? *
    </div>
<input type="radio" name="sweat" value="y" checked="true"/>
<label for="y">yes</label><br>
<input type="radio" name="sweat" value="n"/>
<label for="n">No</label><br>
<input type="hidden" name="sleepType" value=javascript::getQueryVariable('sleepType')/>
<input type="submit" value="next">
</form>
<script > 
alert(getQueryVariable('sleepType')); 
</script>
<?php include("footer.php");?>

