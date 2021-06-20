<?php $title = 'Refluxis'; include("header.php");?>
<form >
    <div class="question" >
    How much would you pay for your mattress? *
    </div>
<input type="radio" name="price" value="100300" checked="true"/>
<label for="100300">100 - 300 Euro</label><br>
<input type="radio" name="price" value="300600"/>
<label for="300600">300 - 600 Euro</label><br>
<input type="radio" name="price" value="600900"/>
<label for="600900">600 - 900 Euro</label><br>
<input type="radio" name="price" value="9001200"/>
<label for="9001200">900 - 1200 Euro</label><br>
<input type="hidden" name="sleepType" value=""/>
<input type="submit" value="next">
</form>


<?php include("footer.php");?>

