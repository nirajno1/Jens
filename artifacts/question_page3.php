<?php $title = 'Refluxis'; include("header.php");?>
<form method="get" action="question_page4.php">
    <div class="question" >
    How much do you weigh? *
    </div>
<input type="radio" name="weight" value="h2" checked="true"/>
<label for="h2">up to 80 kg (H2)</label><br>
<input type="radio" name="weight" value="h3"/>
<label for="h3">up to 100 kg (H3)</label><br>
<input type="radio" name="weight" value="h4"/>
<label for="h4">up to 120 kg (H4)</label><br>
<input type="radio" name="weight" value="h5"/>
<label for="h5">up to 140 kg (H5)</label><br>
<input type="submit" value="next">
</form>




<?php include("footer.php");?>

