<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<title>Refluxis Matratzen-Konfigurator</title>
<style>

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
font-size: small;
font-weight: bold;
color:#c40000;
}
.note .noteitem{
display: block;
font-style: oblique;
font-size: small;
font-weight: lighter;
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
    content: '  \2713';
    /*width: 30%;*/
   /* background-color: #2eae06;*/
 /*   height: 15px;
  width: 15px;*/
  margin: 0 2px;
color: #2eae06;
  border: none;  
  /*border-radius: 50%;*/
  display: inline-block;

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
color: #c40000;
}

.logo {
	display: block;
	height: 75px;
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
  height: 15px;
  width: 15px;
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

header {
  background-color: #ffffff;
  font-family: Arial;
  padding: 16px;
  min-width: 200px;
  display: grid;
 
  grid-template-columns: auto auto;
  grid-template-rows: auto;
  align-items: end;
}
#regForm {
  background-color: #ffffff;
  
  font-family: Arial;
  padding: 10px;
  /*width: 70%;*/
  min-width: 200px;
}
.content {
  padding: 10px;
  font-weight: bolder;
  font-size: 30px;
  text-align: left;
  color: #2eae06;
}
footer{
  font-family: Arial;
  padding: 16px;
  /*width: 70%;*/
  min-width: 200px;
  background-color: #ffffff;
}
body {
  margin: 40px;
}
.wrapper {
  max-width: 1000px;
  margin: auto;
  display: grid;
  grid-template-columns: auto;
  grid-template-rows: 100px auto 100px;
  grid-gap: 1px;
  align-items: center;

  /*background-color: #d95959;*/
  /*background-color: #fff;*/
  color: #444;
  min-width: 200px;
}

.wrapper > div img {
    max-height: 50%;
    display: block;
}
.answer > p {
  margin: 0px;
}


@media only screen and (max-width: 600px) {

  header {
	background-color: #ffffff;
	font-family: Arial;
	padding: 16px;
	min-width: 200px;
	display: grid;

	grid-template-columns: auto;
	grid-template-rows: auto;
}
.content {
  padding: 10px;
  font-weight: bolder;
  font-size: 15px;
  text-align: left;
  color: #2eae06;
}
.logo {
  display: block;
  height: 45px;
}
}

</style>

<body>
<a id="anchor" href="#"></a> 
  <div class="wrapper">
<header>


    
    <img class="logo" src="./images/logo-refluxis-neu_logo.png"/>


<div class="content">Refluxis Matratzen-Konfigurator</div>
</header>
<main>
<form id="regForm" action="result1.php">

  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span> 
    <span class="step" style="display: none;"></span>

  </div>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <div class="consultation">
      <div class="note">
 <p class="noteitem">Du ben??tigst eine Matratze? Dieser Matratzen-Konfigurator soll Dir helfen, die Richtige zu finden. Wir erl??utern Dir die unterschiedlichen Materialien und unterst??tzen Dich darin, dass richtig f??r Dich zu finden. Du musst uns ein paar Fragen beantworten, damit wir Dir die passenden Produkte zeigen k??nnen. Deine Schlafgewohnheiten, Preisvorstellungen und nat??rlich auch Deine k??rperliche Situation m??chten wir mit einbeziehen.
</p>
<p class="head">
WICHTIGE GRUNDS??TZE DES MATRATZEN-KONFIGURATORS:</p>

<p class="noteitem">Alle Matratzen sind konzipiert f??r einen Schlaf auf der Seite. Durch den Schlaf auf der Seite hast Du die gr????tm??gliche Entlastung Deiner Wirbels??ule und Dein K??rper kann perfekt regenerieren.</p>

<p class="noteitem">Alle Matratzen werden f??r eine Schlaftemperatur von 14-18 Grad gefertigt. Genau in diesem Temperaturfenster sprechen wir vom gesunden Schlaf.</p>

<p class="noteitem">Alle Matratzen sind allergikerfreundlich durch abnehmbaren und waschbaren Bezug.</p>

<p class="head">DIESES ZIEL SOLLTEST DU VERFOLGEN:</p>

<p class="noteitem">Im Kern geht es darum, dass Deine Wirbels??ule beim schlafen m??glichst gerade ist und das m??glichst wenig Druckpunkte auf Deinen K??rper lasten. Das ist der Schl??ssel zum gesunden Schlaf.

<p class="noteitem">Kann es losgehen? Dann geh auf weiter</p>
</div></div>
    </div>
  <div class="tab">
  <div class="question" >
    <p>Wie schl??fst Du gerne?</p>
    </div>
    <div class="answer">
    <p><input type="radio" name="sleepType" value="s" checked="true"/>
        <label for="s">weiches Liegegef??hl</label></p>
    <p><input type="radio" name="sleepType" value="m"/>
        <label for="m">mittleres Liegegef??hl</label></p>
    <p><input type="radio" name="sleepType" value="f"/>
        <label for="f">festes Liegegef??hl</label></p>
    </div>
    <div class="consultation">
      
      <p class="beratung">Beratung <span class="line" /></p>

      <p>Versuche, bei dieser Frage alles auszublenden, was Du geh??rt hast. Es ist an dieser Stelle nicht wichtig, was Dir Freunde, Bekannte oder wom??glich Verk??ufer gesagt oder empfohlen haben. Entscheide rein nach Deinem Gef??hl.</p>
      <p>Das gew??nschte Liegegef??hl ist die erste wichtige Entscheidung, die Du treffen solltest. Diese Entscheidung nimmt starken Einfluss auf Deinen Schlaf.</p>
      <p>Sich f??r ein weiches Liegegef??hl zu entscheiden hei??t nicht, dass Du in einer H??ngematte liegen sollst. Es bedeutet, dass die Oberfl??che der Matratze aus weichem Material ist. Weiche Materialien sorgen f??r eine optimale K??rperlagerung und bieten Dir eine sehr gute Druckentlastung. Umso fester die Matratze ist, desto h??her ist die Wahrscheinlichkeit, dass Du zu starken Druckpunkten ausgesetzt bist.</p>
      <p>Weiches Liegegef??hl - sehr gute Druckentlastung.<br>
Mittleres Liegegef??hl - gute Druckentlastung.<br>
Festes Liegegef??hl - schlechte Druckentlastung.</p>
<p> F??r ein festes Liegegef??hl solltest Du Dich nur entscheiden, wenn Du ganz sicher bist, dass Du auf den anderen Matratzen nicht schlafen kannst.</p>
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
      <p class="beratung">Beratung  <span class="line" /></p>
      <p>Ein bisschen schwitzen ist ganz normal. In der Nacht schwitzen wir ca. 0,5 Liter aus. Wenn Du nachts ??fter nass bzw. Schwei??gebadet aufwachst, egal ob Winter oder Sommer, solltest Du die Frage mit "Ja" beantworten.</p>
      <p>Keine Matratze bringt Dich zum Schwitzen. Das schwitzen kommt in den meisten F??llen vom K??rper. Wichtig ist, wie die Matratze mit dieser Feuchtigkeit umgeht. Nur 20-30 % der entstehenden Feuchtigkeit geht in die Matratze. Der Rest geht nach oben weg als Wasserdampf. Wer also nachts stark schwitzt und immer noch unter einer Daunendecke schl??ft, darf sich nicht wundern, dass es Probleme mit zu viel Feuchtigkeit im Bett gibt. Die W??rme kann nicht entweichen und bleibt beim K??rper.</p>
<p>Durch die richtige Wahl der Materialien kannst Du mit einem weichen Liegegef??hl schlafen und trotzdem dem Schwitzen entgegenwirken.</p>
    </div>

  </div>
  <!-- tab for question 3 -->
  <div class="tab"><div class="question" >Wieviel wiegst Du?</div>
 <div class="answer">
        <input type="radio" name="weight" value="H2" checked="true"/>
            <label for="H2">bis ca. 80 kg [Normalgewicht lt. BMI-Wert] (H2)</label><br>
        <input type="radio" name="weight" value="H3"/>
            <label for="H3">bis ca. 100 kg [Normalgewicht lt. BMI-Wert] (H3)</label><br>
        <input type="radio" name="weight" value="H4"/>
            <label for="H4">bis ca. 120 kg [Normalgewicht lt. BMI-Wert] (H4)</label><br>
        <input type="radio" name="weight" value="H5"/>
            <label for="H5">ab ca. 120 kg [Normalgewicht lt. BMI-Wert] (H5)</label><br>
  </div>
   <div class="consultation">
      <p class="beratung">Beratung  <span class="line" /></p>
      <p>Wir brauchen Dein K??rpergewicht, um Deine Matratzenauswahl so genau wie m??glich einzugrenzen. Beachte bitte auch Dein Alter und Deine K??rpergr????e. Matratzen bekommst Du in verschiedenen Festigkeiten.</p>
      <p>In der Regel z??hlt:<br>
bis 80 kg K??rpergewicht nimmst Du H??rte 2 (H2)<br>
bis 100 kg K??rpergewicht nimmst Du H??rte 3 (H3)<br>
bis 120 kg K??rpergewicht nimmst Du H??rte 4 (H4)<br>
ab 120 kg K??rpergewicht nimmst Du H??rte 5 (H5)</p>
<p>Durch die richtige Wahl der Materialien kannst Du mit einem weichen Liegegef??hl schlafen und trotzdem dem Schwitzen entgegenwirken.</p>
<p>Du solltest zus??tzlich Dein Alter und Deine K??rpergr????e ber??cksichtigen. Bei der richtigen Wahl der Festigkeit kann der BMI-Wert helfen, um die richtige Entscheidung zu treffen.</p>
<p>Der Body-Mass-Index, kurz BMI, ist die gebr??uchlichste Formel zur Gewichtsberechnung. Er ergibt sich aus dem Verh??ltnis des K??rpergewichts in Kilogramm und der K??rpergr????e in Metern zum Quadrat. Je nach H??he des errechneten Werts unterscheidet die Deutsche Gesellschaft f??r Ern??hrung (DGE) f??r die Auswertung f??nf Kategorien: Untergewicht, Normalgewicht, ??bergewicht, extremes ??bergewicht (Adipositas) und massive Adipositas.</p>
<p>??bertragen auf die Festigkeit Deiner Matratze empfehlen wir Folgendes:
<ul>
  <li>Bei "Normalgewicht lt. BMI-Wert" kannst Du Dich an den oben stehenden Angaben orientieren.</li>
  <li>Bei "??bergewicht lt. BMI-Wert" nimmst Du eine Festigkeit h??her.</li>
</ul>
</p>
<div class="note">
<p class="head">HINWEIS</p>
<p class="noteitem">Bei Untergewicht und extremen bzw. massiven ??bergewicht lt. BMI-Wert empfehlen wir dir, einen Arzt aufzusuchen.</p>
<p  class="noteitem">Hier findest Du einen Link zum BMI-Rechner der Techniker Krankenkasse. Nutze den Link, um Dein BMI-Wert zu ermitteln.
<a href="https://www.tk.de/service/app/2002866/bmirechner/bmirechner.app" target="open_blank">BMI-Rechner</a></p></div>
    </div>
</div>
<!-- tab for question 4 -->
  <div class="tab">
  <div class="question" >Wieviel w??rdest Du f??r Deine Matratze bezahlen?</div>
  <div class="answer">
    <input type="radio" name="price" value="0 and 300" checked="true"/>
        <label for="0 and 300">100 - 300 Euro</label><br>
    <input type="radio" name="price" value="300 and 600"/>
        <label for="300 and 600">300 - 600 Euro</label><br>
    <input type="radio" name="price" value="600 and 900"/>
        <label for="600 and 900">600 - 900 Euro</label><br>
    <input type="radio" name="price" value="900 and 1200"/>
        <label for="900 and 1200">900 - 1200 Euro</label><br>
        <input type="radio" name="price" value="1200 and 999999.99"/>
        <label for="1200 and 999999.99">more than 1200 Euro</label><br>
  </div>
  <div class="consultation">
  <p class="beratung">Beratung  <span class="line" /></p>
      <p>Nat??rlich entscheidet am Ende das Portemonnaie, wie teuer Deine neue Matratze sein darf. Doch Qualit??t hat eben doch etwas mit Geld zu tun. Umso hochwertiger die eingesetzten Materialien einer Matratze sind, desto l??nger ist die Lebensdauer und umso besser ist die K??rperanpassung an Deinen K??rper.</p>
      <p>Bei vielen Matratzenherstellern bekommst Du mittlerweile auch eine Zufriedenheitsgarantie von bis zu 3 Monaten. Bei Nichtgefallen kannst Du dann gegen eine andere Matratze vom Hersteller tauschen. Sollte dies der Fall sein, werden wir diese Produkte entsprechend kennzeichnen.</p>
      <p>Entscheide selber, was Dir gesunder Schlaf wert ist!</p>
  </div>
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
  <!-- This is footer -->
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
  var anchor=document.getElementById("anchor").focus();
 

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
