<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
/** {
  box-sizing: border-box;
}*/

main {
  background-color: #e7e7e7;
}


.question input{
  padding: 10px;
  width: 3%;
  font-size: 17px;
  font-family: Arial;
  border: 1px solid #e7e7e7;
}
.question:after {
    content:" *";
    color: red;
    display:inline;
  }
.question {
    font-size: x-large;
    color: red;
  }
  .question p{
    display:inline;
  }
.note .head{
display: block;
font-style: normal;
font-size: larger;
font-weight: bold;
}
.note .noteitem{
display: block;
font-style: oblique;
font-size: small;
font-weight: lighter;
}
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Arial;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 5%;
  font-size: 17px;
  font-family: Arial;
  border: 1px solid #e7e7e7;
}

input[type=radio]:checked + label::After{
    content: '';
    width: 30%;
    background-color: #2eae06;
    height: 15px;
  width: 15px;
  margin: 0 2px;

  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.consultation {
  border-radius: 20px;
  padding-left: 50px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 25px;
  /* opacity: 0.5; */
  background-image: linear-gradient(#fff, #A3DFE4);
}
.answer {
  font-size: 20px;
  padding-top: 19px;
  padding-bottom: 35px;
}
.beratung{
display: block;
font-style: normal;
font-size: larger;
font-weight: bold;
opacity:1;
}
img {
  height: 4em;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}
button {
  background-color: #04AA6D;
  border-radius: 18px;
  color: #ffffff;
  border: 2px;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Arial;
  cursor: pointer;
}
label{
  line-height: 2.0;
}
button:hover {
  opacity: 0.8;
}
.line{
  border-bottom: 4px solid #e7e7e7;
  display: block;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 25px;
  width: 25px;
  margin: 0 2px;
  background-color: #e7e7e7;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}


/*.logo {
    font-size: 12px;
    font-weight: bold;
    position: relative;
    bottom: -10px;
}*/


.logo:after {
  content: '';
  position: absolute;
  right: 0;
  top: 0;
  width: 1px;
  height: 30px;
  background-color:grey;
}

h4 {
    font-weight: bold;
}

header {
  display: grid;
  grid-template-columns: 300px auto;
  grid-gap: 10px;
 /*  background-color: #ffffff;*/
 margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
  font-family: Arial;
  padding: 40px;
  width: 70%;
  min-width: 300px;
   background-color: #e7e7e7;
}
.content {
  display: grid;
}
header .content {
  /* align-content: center; */
  align-items: center;
}
footer{
  background-color: #e7e7e7;
}
body {
  margin: 40px;
}
.wrapper {
  display: grid;
  grid-template-rows: 100px auto 100px;
  grid-gap: 1px;
  background-color: #fff;
  color: #444;
}
</style>
<body>
  <div class="wrapper">
<header>
  <div class="logo">
  <figure>
    <img src="./images/logo-refluxis-neu_logo.png"/>
    
</figure>
</div>
<div class="content">Refluxis Mattress Configurator</div>
</header>
<main>
<form id="regForm" action="result.php">

 

    <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>

  </div>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
  <div class="question" >
    <p>Wie schläfst Du gerne?</p>
    </div>
    <div class="answer">
    <p><input type="radio" name="sleepType" value="soft" checked="true"/>
        <label for="soft">weiches Liegegefühl</label></p>
    <p><input type="radio" name="sleepType" value="medium"/>
        <label for="medium">mittleres Liegegefühl</label></p>
    <p><input type="radio" name="sleepType" value="firm"/>
        <label for="firm">festes Liegegefühl</label></p>
    </div>
    <div class="consultation">
      
      <p class="beratung">Beratung <span class="line" /></p>

      <p>Versuche, bei dieser Frage alles auszublenden, was Du gehört hast. Es ist an dieser Stelle nicht wichtig, was Dir Freunde, Bekannte oder womöglich Verkäufer gesagt oder empfohlen haben. Entscheide rein nach Deinem Gefühl.</p>
      <p>Das gewünschte Liegegefühl ist die erste wichtige Entscheidung, die Du treffen solltest. Diese Entscheidung nimmt starken Einfluss auf Deinen Schlaf.</p>
      <p>Sich für ein weiches Liegegefühl zu entscheiden heißt nicht, dass Du in einer Hängematte liegen sollst. Es bedeutet, dass die Oberfläche der Matratze aus weichem Material ist. Weiche Materialien sorgen für eine optimale Körperlagerung und bieten Dir eine sehr gute Druckentlastung. Umso fester die Matratze ist, desto höher ist die Wahrscheinlichkeit, dass Du zu starken Druckpunkten ausgesetzt bist.</p>
      <p>Weiches Liegegefühl - sehr gute Druckentlastung.<br>
Mittleres Liegegefühl - gute Druckentlastung.<br>
Festes Liegegefühl - schlechte Druckentlastung.</p>
<p> Für ein festes Liegegefühl solltest Du Dich nur entscheiden, wenn Du ganz sicher bist, dass Du auf den anderen Matratzen nicht schlafen kannst.</p>
    </div>

    </div>
    <!-- tab for question 2 -->
  <div class="tab"><div class="question" >Schwitzt Du nachts extrem viel?</div>
  <div class="answer">
        <input type="radio" name="sweat" value="y" checked="true"/>
        <label for="y">Ja</label><br>
        <input type="radio" name="sweat" value="n"/>
        <label for="n">Nein</label><br>
 </div>
     <div class="consultation">
      <p class="beratung">Beratung</p>
      <p>Ein bisschen schwitzen ist ganz normal. In der Nacht schwitzen wir ca. 0,5 Liter aus. Wenn Du nachts öfter nass bzw. Schweißgebadet aufwachst, egal ob Winter oder Sommer, solltest Du die Frage mit "Ja" beantworten.</p>
      <p>Keine Matratze bringt Dich zum Schwitzen. Das schwitzen kommt in den meisten Fällen vom Körper. Wichtig ist, wie die Matratze mit dieser Feuchtigkeit umgeht. Nur 20-30 % der entstehenden Feuchtigkeit geht in die Matratze. Der Rest geht nach oben weg als Wasserdampf. Wer also nachts stark schwitzt und immer noch unter einer Daunendecke schläft, darf sich nicht wundern, dass es Probleme mit zu viel Feuchtigkeit im Bett gibt. Die Wärme kann nicht entweichen und bleibt beim Körper.</p>
<p>Durch die richtige Wahl der Materialien kannst Du mit einem weichen Liegegefühl schlafen und trotzdem dem Schwitzen entgegenwirken.</p>
    </div>

  </div>
  <!-- tab for question 3 -->
  <div class="tab"><div class="question" >Wieviel wiegst Du?</div>
 <div class="answer">
        <input type="radio" name="weight" value="h2" checked="true"/>
            <label for="h2">bis ca. 80 kg [Normalgewicht lt. BMI-Wert] (H2)</label><br>
        <input type="radio" name="weight" value="h3"/>
            <label for="h3">bis ca. 100 kg [Normalgewicht lt. BMI-Wert] (H3)</label><br>
        <input type="radio" name="weight" value="h4"/>
            <label for="h4">bis ca. 120 kg [Normalgewicht lt. BMI-Wert] (H4)</label><br>
        <input type="radio" name="weight" value="h5"/>
            <label for="h5">ab ca. 120 kg [Normalgewicht lt. BMI-Wert] (H5)</label><br>
  </div>
   <div class="consultation">
      <p class="beratung">Beratung</p>
      <p>Wir brauchen Dein Körpergewicht, um Deine Matratzenauswahl so genau wie möglich einzugrenzen. Beachte bitte auch Dein Alter und Deine Körpergröße. Matratzen bekommst Du in verschiedenen Festigkeiten.</p>
      <p>In der Regel zählt:<br>
bis 80 kg Körpergewicht nimmst Du Härte 2 (H2)<br>
bis 100 kg Körpergewicht nimmst Du Härte 3 (H3)<br>
bis 120 kg Körpergewicht nimmst Du Härte 4 (H4)<br>
ab 120 kg Körpergewicht nimmst Du Härte 5 (H5)</p>
<p>Durch die richtige Wahl der Materialien kannst Du mit einem weichen Liegegefühl schlafen und trotzdem dem Schwitzen entgegenwirken.</p>
<p>Du solltest zusätzlich Dein Alter und Deine Körpergröße berücksichtigen. Bei der richtigen Wahl der Festigkeit kann der BMI-Wert helfen, um die richtige Entscheidung zu treffen.</p>
<p>Der Body-Mass-Index, kurz BMI, ist die gebräuchlichste Formel zur Gewichtsberechnung. Er ergibt sich aus dem Verhältnis des Körpergewichts in Kilogramm und der Körpergröße in Metern zum Quadrat. Je nach Höhe des errechneten Werts unterscheidet die Deutsche Gesellschaft für Ernährung (DGE) für die Auswertung fünf Kategorien: Untergewicht, Normalgewicht, Übergewicht, extremes Übergewicht (Adipositas) und massive Adipositas.</p>
<p>Übertragen auf die Festigkeit Deiner Matratze empfehlen wir Folgendes:
<ul>
  <li>Bei "Normalgewicht lt. BMI-Wert" kannst Du Dich an den oben stehenden Angaben orientieren.</li>
  <li>Bei "Übergewicht lt. BMI-Wert" nimmst Du eine Festigkeit höher.</li>
</ul>
</p>
<div class="note">
<p class="head">HINWEIS</p>
<p class="noteitem">Bei Untergewicht und extremen bzw. massiven Übergewicht lt. BMI-Wert empfehlen wir dir, einen Arzt aufzusuchen.</p>
<p  class="noteitem">Hier findest Du einen Link zum BMI-Rechner der Techniker Krankenkasse. Nutze den Link, um Dein BMI-Wert zu ermitteln.
<a href="https://www.tk.de/service/app/2002866/bmirechner/bmirechner.app" target="open_blank">BMI-Rechner</a></p></div>
    </div>
</div>
<!-- tab for question 4 -->
  <div class="tab">
  <div class="question" >Wieviel würdest Du für Deine Matratze bezahlen?</div>
  <div class="answer">
    <input type="radio" name="price" value="100300" checked="true"/>
        <label for="100300">100 - 300 Euro</label><br>
    <input type="radio" name="price" value="300600"/>
        <label for="300600">300 - 600 Euro</label><br>
    <input type="radio" name="price" value="600900"/>
        <label for="600900">600 - 900 Euro</label><br>
    <input type="radio" name="price" value="9001200"/>
        <label for="9001200">900 - 1200 Euro</label><br>
  </div>
  <p class="beratung">Beratung</p>
      <p>Natürlich entscheidet am Ende das Portemonnaie, wie teuer Deine neue Matratze sein darf. Doch Qualität hat eben doch etwas mit Geld zu tun. Umso hochwertiger die eingesetzten Materialien einer Matratze sind, desto länger ist die Lebensdauer und umso besser ist die Körperanpassung an Deinen Körper.</p>
      <p>Bei vielen Matratzenherstellern bekommst Du mittlerweile auch eine Zufriedenheitsgarantie von bis zu 3 Monaten. Bei Nichtgefallen kannst Du dann gegen eine andere Matratze vom Hersteller tauschen. Sollte dies der Fall sein, werden wir diese Produkte entsprechend kennzeichnen.</p>
      <p>Entscheide selber, was Dir gesunder Schlaf wert ist!</p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>

</form>
</main>
<footer>
  This is footer
</footer>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");

  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

</script>
</div>
</body>
</html>
