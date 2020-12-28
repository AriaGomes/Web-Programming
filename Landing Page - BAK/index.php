<!DOCTYPE html>
<html>
<title>AriaGomes.net</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo '<link rel="stylesheet" href="StyleSheet.css">';
echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">'; ?>
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('Background.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg display-container text-white">
  <div class="display-middle jumbo">
      <center><p>Welcome to AriaGomes.net</p></center>
  </div>
  <div class="display-topleft container xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="button black">Labs/Assignments</button></p>
    <p><button onclick="document.getElementById('resume').style.display='block'" class="button black">View Resume</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="button black">Leave Feedback</button></p>
  </div>
  <div class="display-bottomleft container">
    <p class="xlarge">
    <script type="text/javascript">
        
function updateClock ( )
{
  var currentTime = new Date ( );

  var currentDay = currentTime.getDay ( );
  
  //Convert the day value to Human readable abbreaveation
  currentDay = ( currentDay == 0 ) ? "Sun" : currentDay;
  currentDay = ( currentDay == 1 ) ? "Mon" : currentDay;
  currentDay = ( currentDay == 2 ) ? "Tue" : currentDay;
  currentDay = ( currentDay == 3 ) ? "Wed" : currentDay;
  currentDay = ( currentDay == 4 ) ? "Thu" : currentDay;
  currentDay = ( currentDay == 5 ) ? "Fri" : currentDay;
  currentDay = ( currentDay == 6 ) ? "Sat" : currentDay;
  
  var currentMonth = currentTime.getMonth( ); 
  
  //Convert the month value to Human readable abbreaveation
  currentMonth = ( currentMonth == 0 ) ? "January" : currentMonth;
  currentMonth = ( currentMonth == 1 ) ? "February" : currentMonth;
  currentMonth = ( currentMonth == 2 ) ? "March" : currentMonth;
  currentMonth = ( currentMonth == 3 ) ? "April" : currentMonth;
  currentMonth = ( currentMonth == 4 ) ? "May" : currentMonth;
  currentMonth = ( currentMonth == 5 ) ? "June" : currentMonth;
  currentMonth = ( currentMonth == 6 ) ? "July" : currentMonth;
  currentMonth = ( currentMonth == 7 ) ? "August" : currentMonth;
  currentMonth = ( currentMonth == 8 ) ? "September" : currentMonth;
  currentMonth = ( currentMonth == 9 ) ? "October" : currentMonth;
  currentMonth = ( currentMonth == 10) ? "November" : currentMonth;
  currentMonth = ( currentMonth == 11) ? "December" : currentMonth;
  
  var currentDate = currentTime.getDate( );
  
  // Add appropriate suffix to the date
  currentDate = ( currentDate == 1 || currentDate == 21 || currentDate == 31 ) ? currentDate + "st" : currentDate;
  currentDate = ( currentDate == 2 || currentDate == 22 ) ? currentDate + "nd" : currentDate;
  currentDate = ( currentDate == 3 ) || currentDate == 23 ? currentDate + "rd" : currentDate;
  currentDate = ( currentDate > 3 || currentDate < 21 || currentDate > 23 || currentDate < 31 ) ? currentDate + "th" : currentDate;
  
  
  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = "Today is : " + currentDay + " " + currentMonth +  " " + currentDate + " " + currentHours + ":" + currentMinutes + " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}
        
updateClock();        
</script>
   
   </p>
   
    <p class="large">Algonquin College - Computer Engineering Technology Student</p>
  </div>
</div>
<!-- Labs/Assignments Modal -->
<div id="menu" class="modal"> <!-- Called menu -->
  <div class="modal-content animate-zoom">
    <div class="container black display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="button display-topright large">x</span>
      <h1>Labs</h1>
    </div>
    <div class="container table-all">
     <table>
         <tr>
         <td><h5>Lab 1</h5></td>   <td><h5>Description</h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab1/"> Link</a></h5></td>
         </tr>
         
         <tr>
         <td><h5>Lab 2</h5></td>   <td><h5>Description</h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab2/"> Link</a></h5></td>
         </tr>
     </table>
      
    </div>
    <div class="container black">
      <h1>Assignments</h1>
    </div>
    <div class="container">
      <h5>Fruit Salad <b>$2.50</b></h5>
      <h5>Ice cream <b>$2.00</b></h5>
      <h5>Chocolate Cake <b>$4.00</b></h5>
      <h5>Cheese <b>$5.50</b></h5>
    </div>
  </div>
</div>

<!-- Resume Modal -->
<div id="resume" class="modal">
  <div class="modal-content animate-zoom">
    <div class="container black">
      <span onclick="document.getElementById('resume').style.display='none'" class="button display-topright large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="container">
      <p>Reserve a table, ask for today's special or just send us a message:</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="input padding-16 border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="input padding-16 border" type="number" placeholder="How many people" required name="People"></p>
        <p><input class="input padding-16 border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
        <p><input class="input padding-16 border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
        <p><button class="button" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
  </div>
</div>

<!-- Feedback Modal -->
<div id="contact" class="modal"> <!-- called contact -->
  <div class="modal-content animate-zoom">
    <div class="container black">
      <span onclick="document.getElementById('contact').style.display='none'" class="button display-topright large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="container">
      <p>Reserve a table, ask for today's special or just send us a message:</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="input padding-16 border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="input padding-16 border" type="number" placeholder="How many people" required name="People"></p>
        <p><input class="input padding-16 border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
        <p><input class="input padding-16 border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
        <p><button class="button" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
  </div>
</div>

</body>
</html>