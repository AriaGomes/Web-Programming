<!DOCTYPE html>
<html>
<title>AriaGomes.net</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo '<link rel="stylesheet" href="StyleSheet.css">';
echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">'; ?>
<style>
body,h1,h5 
{
    font-family: "Raleway", sans-serif;
}
    
body, html 
{
    height: 100%;
}

.bgimg 
{
  background-image: url('Images/Background.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>
<div class="bgimg display-container text-white">

<a href="https://github.com/AriaGomes"><img class="img clockwiseSpin display-topright" src="Images/Github.png"></a>
<a href="https://www.linkedin.com/in/aria-gomes-60684a165/"><img class="img counterClockwiseSpin display-topright" src="Images/LinkedIn.png" style="right:130px"></a>
<a href="https://www.figrocloud.duckdns.org/"><img class="img clockwiseSpin display-topright" src="Images/Nextcloud.png" style="right:280px; top:10px;"></a>
  
  <div class="display-middle jumbo">
      <center><p>Welcome to AriaGomes.net</p></center>
  </div>
  <div class="display-topleft container xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="button black">Labs/Assignments</button></p>
    <p><button onclick="document.getElementById('resume').style.display='block'" class="button black">View Resume</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="button black">Contact Me/Leave Feedback</button></p>
  </div>
  <div class="display-bottomleft container">
    <p class="xlarge">  
    <script type="text/javascript">
			
		var objDate = new Date();
        var Clock;
		var locale = navigator.language;
		var month = objDate.toLocaleDateString(locale, { month: "long" });
		var wkday = objDate.toLocaleDateString(locale, { weekday: 'long' });
        var day = objDate.toLocaleDateString(locale, { day: 'numeric' });
        var year = objDate.toLocaleDateString(locale, { year: 'numeric'}); 
        
		document.write("Today is " + wkday + ", " + month + " " + day + ", " + year + " - ");
        
        
        </script>
    
    <body style="height:100%; margin:0; padding:0; justify-content:center; align-items:center">
		<span id="clocktext" style="font-kerning:none"></span>
   
        <script type="text/javascript"> // Clock Start JS
			
			var textElem = document.getElementById("clocktext");
			var targetWidth = 0.25;  // Proportion of Clock width
			var curFontSize = 5;  // Clock Font Size
			
			function updateClock() 
            {
				var date = new Date();
				var string = "";
				string += ((date.getHours() + 11) % 12 + 1) + ":";
				string += (10 > date.getMinutes() ? "0" : "") + date.getMinutes() + ":";
				string += (10 > date.getSeconds() ? "0" : "") + date.getSeconds() + "\u00A0";
				string += date.getHours() >= 12 ? "PM" : "AM";
				textElem.textContent = string;
				setTimeout(updateClock, 1000 - date.getTime() % 1000 + 20);
			}
			
			function updateTextSize() 
            {
				for (var i = 0; 3 > i; i++) 
                {  // Iterate for better better convergence
					curFontSize *= targetWidth / (textElem.offsetWidth / textElem.parentNode.offsetWidth);
					textElem.style.fontSize = curFontSize + "pt";
				}
			}
			
			updateClock();
			updateTextSize();
			window.addEventListener("resize", updateTextSize);
		</script>  
    <p class="large">Algonquin College - Computer Engineering Technology Student <?php include 'ACLevel.php'; echo $ACLevelString; ?></p>
        </body>
      </p>
    </div>
        
    </div>


<!-- Labs/Assignments Modal -->
<div id="menu" class="modal"> <!-- Called menu -->
  <div class="modal-content animate-right">
    <div class="container black display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="button display-topright large">x</span>
      <h1>Labs</h1>
    </div>
    <div class="container table-all">
     <table>
         <tr>
             <td><center><h5>Lab 1</h5></center></td>   <td><h5><center>Introduction to HTML</center>
             </h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab1/"> Link </a></h5></td>
         </tr>
         
         <tr>
             <td><center><h5>Lab 2</h5></center></td>   <td><h5><center>Exercise with Basic HTML Elements</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab2/"> Link</a></h5></td>
         <tr>
             
         </tr>
         <td><center><h5>Lab 3</h5></center></td>   <td><h5><center>Demoing Basic HTML  Tables</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab3/"> Link</a></h5></td> 
        <tr>
        
            <td><center><h5>Lab 4</h5></center></td>   <td><h5><center>Exercising with Pseudo, contentextual, attribute, class, and id selectors and Multimedia  Page (HTML)</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab4/"> Link</a></h5></td>
        </tr>
        
            <td><center><h5>Lab 5</h5></center></td> <td><h5><center>Introduction to PHP</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab5/"> Link</a></h5></td>
    <tr>
    
        <td><center><h5>Lab 6</h5></center></td>   <td><h5><center>Collection of 3 basic PHP scripts using basic syntax - (Random, Prime, and Pattern)</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab6/Menu.php"> Link</a></h5></td>
        <tr>
        
            <td><center><h5>Lab 7</h5></center></td>   <td><h5><center>Collection of PHP scripts - (Arrays, ArrayOfObjects, Calculator) Exercise using forms and more advance PHP syntax and polymorphism</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab7/Menu.php"> Link</a></h5></td>
            
        <tr>
        <td><center><h5>Lab 8</h5></center></td>   <td><h5><center>Exercising with Cookies / Session States & More Forms (PHP) </center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab8/Input.php"> Link</a></h5></td>
        <tr>
        
            <td><center><h5>Lab 9</h5></center></td>   <td><h5><center>Exercising with MYSQL & PHP to Create a Login and save the state using Cookies, Restrict access to certain groups of the database from getting access to certain pages on the site  </center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab9/Login.php"> Link</a></h5></td>
        <tr>
        
            <td><center><h5>Lab 10</h5></center></td>   <td><h5><center>Javascript and JQuery Exercise & XML to JSON object Conversion</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Lab10/"> Link</a></h5></td>
        <tr>
        
    </tr>
     </table>
      
    </div>
    <div class="container black">
      <h1>Assignments</h1>
    </div>
    <div class="container table-all">
     <table>
         <tr>
             <td><center><h5>Assignment 1</h5></center></td>   <td><h5><center>Final Assignment for HTML - Create a Site with 5 pages showing your: Homeland, Hobbies, Contacts, Travels and Resume</center>
             </h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Assignment1/"> Link </a></h5></td>
         </tr>
         
         <tr>
             <td><center><h5>Assignment 2</h5></center></td>   <td><h5><center>PHP Assignment using BookRepCRM Template and FileIO - Create Query Strings for each customer displaying their orders, if any</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Assignment2/BookRepCRM.php"> Link</a></h5></td>
         <tr>
             
         </tr>
         <td><center><h5>Assignment 3</h5></center></td>   <td><h5><center>Final PHP Assignment using MYSQL and BookRepCRM Template - Create a full library website using a MYSQL database and display, sort and show book images using everything learned</center></h5></td> <td><h5><a href="https://ariagomes.net/CST83238/Assignment3/"> Link</a></h5></td> 
        <tr>
        
        </tr>
     </table>
    </div>
        <div class="container black"><a href="https://ariagomes.net/CST83238/">If Links are down Click me - Hosted localy via LiteSpeed</a></div>
  </div>
</div>

<!-- Resume Modal -->
<div id="resume" class="modal">
  <div class="modal-content animate-zoom">
    <div class="container black">
      <span onclick="document.getElementById('resume').style.display='none'" class="button display-topright large">x</span>
      <h1>Résumé</h1>
    </div>
    <div class="container">
     <div class="Rcontent">
      
       <div class="resume">
           <h3>Aria Gomes</h3>
            <b>Cell:</b> (613) 981-1315<br>
            <b>E-mail: </b><a href="mailto:Aria.Gomes00@gmail.com">Aria.Gomes00@gmail.com</a><br><hr>
            <table>
            <col style="width:1000px">
            <tr>
                <td bgcolor="lightblue"><center><b>Education</b></center></td>
            </tr>           
            </table>
                
           <h5><b>Algonquin College</b></h5>
            <h6>Computer Engineering Technology - Computing Science
                      3.41 GPA Student Average
           </h6>
            <table>
            <body>
            <col style="width:1000px">
            <tr>
                <td bgcolor="lightblue"><center><b>Program-Related Skills</b></center></td>
            </tr>
                </body>           
            </table>
            <h6>
            <ul>
                <li><b>Database -</b> SQL to build, adjust and query a database. Learned how to form a database that is secure, 	maintainable, using normalization.</li>
                <li><b>Network Programming -</b>WireShark, to diagnose and troubleshooting. Packet Tracer, creating virtual 	networks.</li>
                <li><b>Operating System - </b>Analyzed various details of the GNU/Linux operating system.</li>
                <li><b>Object-Oriented Programming - </b>Overview of Encapsulation, Inheritance, Abstraction, Polymorphism.     	With a banking system that runs on Java, JavaFX, J-Unit, Big-O Notation, Data structures and sorting algorithms.</li>
                <li>And much much more...</li>
            </ul>
            </h6>
            <table>
            <col style="width:1000px">
            <tr>
                <td bgcolor="lightblue"><center><b>Work Experience</b></center></td>
            </tr>           
           </table>
           
           <h5><b>Fellow.app</b><br>
                   Junior Programmer - Nepean, ON<br></h5>
               <h6> -	Writing and Analyzing code written in Java in a group environment
                 <br>
                 -	Handling support tickets made by users 
                <br><br>
                </h6>    
            
            <h5>
                <b>Ottawa Laptops</b>
                  <br>
                   Computer Service Technician - Nepean, ON<br>
                <h6>-	Troubleshooting issues with customers laptops and desktop computers and running tests to see where the problem is coming from and how to resolve the problem.
                <br>- Keeping the stock of computer components stocked (inventory).
                <br>- Making phone calls to clients to let them know that their machine is ready to pick up or to update them on the status on their machine.
                <br><br>
                </h6>
                
                
                <h5><b>Mr. Pretzels</b><br>
                   Counter Staff / Baker - Nepean, ON<br></h5>
               <h6> -	Trained new staff members on working the equipment and other responsibilities
                 <br>
                 -	Working as a team to keep the store fully stocked
                <br><br>
                </h6>    
                
                
                <h5><b>Sears Canada Inc.</b><br>
                   Sales Associate - Nepean, ON<br></h5>
               <h6> -	Sell merchandise to the customer and offer the customer great customer service.
                 <br>
                 -	Attention to detail while working with customers and always remind the customer of the current promotion.
                <br><br>
                </h6>    
              <table>
            <col style="width:1000px">
            <tr>
                <td bgcolor="lightblue"><center><b>References</b></center></td>
            </tr>           
            </table>
           </h5> 
               <br>     
                <b>Mathew Dean</b>-Family Friend - Nepean, ON<br>
                Email: Mathew.deanbuisness@gmail.com<br>
                Cell: 613-600-5721
                <br><br>
                <b>Alice Costa</b>-Close Friend (Self Employed) - Nepean, ON<br>
                Email: gomesmaria1970@homtmail.com<br>
                Cell: 613-315-8575
         </div>
        </div><br>
    </div>
    <div class="container black"><a href="Resume(CompSCI).pdf" download>Download Resume - Always up to date</a></div>
    </div>
    </div>
      </body>

<!-- Feedback Modal -->
<div id="contact" class="modal"> <!-- called contact -->
  <div class="modal-content animate-bottom">
    <div class="container black">
      <span onclick="document.getElementById('contact').style.display='none'" class="button display-topright large">x</span>
      <h1>Contact<?php include 'database.inc.php'; echo " - $stringConnectedToDB"?></h1>
    </div>
    <div class="container">
      <p>Leave me a message: <br><i>(Please note that messages are checked frequently)</i></p>
      <form action="/action_page.php" target="_blank">
        <p><input class="input padding-16 border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="input padding-16 border" type="textArea" placeholder="Message" required name="Message"></p>
        <p><input class ="input padding-16 border" type ="email" placeholder="example@mail.com"></p>
        <p><button class="button" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
    <div class="container black">If database is down the best way to contact me is by email at: <a href="mailto:Aria.Gomes00@gmail.com">Aria.Gomes00@gmail.com</a></div>
  </div>
</div>
</html>

