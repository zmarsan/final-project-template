
<html>

    <head>
        <link rel="stylesheet" href="assets/styles/homepage.css">
     

        <style>
            
            @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@300&display=swap');
        
            body {
                font-family: 'Manrope', sans-serif;
                font-weight: 300;
            }


            /* BECAUSE CSS FILE IS NOT WORKING */
            body 
{
    font-family: 'Roboto', sans-serif;
    margin: 0;
}


h1{
    padding: 8px;
    background: brown;
    border-radius: 8px;
    margin: 0;
    font-size: 60px;
}

input,
textarea{
    height:32px;
    padding:0 16px;
    font-family:'Roboto Condensed', sans-serif;
    font-size: 20px;
    /*box-shadow: inset 8px 3px 18px -4px*/
}
/* banner */

#banner {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background: rgba(0,0,0,0.2) url('violin_main.jpeg');
    background-size:cover;
    background-attachment: fixed;
    background-position: center;
    background-blend-mode: overlay;
    color: white;
}


#mediabanner {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background: rgba(0,0,0,0.2) url('mediabannerphoto.JPG');
    background-size:cover;
    background-attachment: fixed;
    background-position: center;
    background-blend-mode: overlay;
    color: white;
}

#lessonbanner {

height: 100vh;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
background: rgba(0,0,0,0.2) url('teaching.jpeg');
background-size:cover;
background-attachment: fixed;
background-position: center;
background-blend-mode: overlay;
color: white;

}

#youtubevideos {

    align-items: center;
}
#searchbox {
    position: fixed;
    right: 0;
    top: 24px;
    width: 500px;
    pointer-events: none;
    z-index: 50;
    transition: 0.4s;
}

#searchbox input {
    height: 48px;
    width: 100%;
}

nav {
    height: 72px;
    background: brown;
    width: 100%;
    margin: 0;
    position: fixed;
    font-size: 20px;
    display: flex;
    justify-content: space-between;
    padding: 0 16px 0 0;
    box-sizing: border-box;
    z-index: 100;
}

nav a {
    padding: 0 32px;
    color: white;
    transition: 0.4s;

}

nav a:hover {
    text-decoration: none;
    color: red;
}

nav ul
{
    display: flex;
    list-style: none;
    justify-content: space-around;
    align-items: center;
    height: 100%;
    margin: 0;
}


section{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.section-heading {
    font-size: 32px;
    border-left: 3px solid black;
    border-right: 3px solid black;
    transition: all 0.4s;
    text-align: center;
    padding: 3px 20px;
}


.aboutintro {
    padding: 8px;
    background: brown;
    border-radius: 8px;
    margin: 0;
    font-size: 60px;
}



{
    font-family: 'Roboto', sans-serif;
    margin: 0;
}



        </style>


    </head>

    <body>



        <nav>
            <div>
                <div id="menu-icon">
                  </div>
                  <ul>
                    <li>
                        <a href="#banner"> Home</a>
                    </li>
            
                    <li>
                        <a href="#lessonbanner"> Book a Lesson </a>
                    </li>
            
                    <li>
                    <a href="#mediabanner"> Media </a>
                    </li>

                    <li>
                        <a href= "#aboutsection"> About </a>
                    </li>
           
                    <li>
                        <div id="search-icon">
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        
       

        <div id="banner"> 
            <h1> Zara Marsan</h1>
            <h3> Welcome to my webpage! </h3>
        </div>

        <main>

                <h2 class="section-heading"> ABOUT ME </h2>
        


            <section>

<!--
    first section 
-->

<div id = "aboutsection"> 
                     <img src="IMG_7079.jpg" class="center"
                            width="500" 
                             height="500">
                         
</div>

                    <div class="description">
            
                        <p> My name is Zara Marsan, and I'm a student at Fordham University. </p>
                        <p> I am a rising Junior at Fordham University, class of 2026. I study Computer Science and Music,
                             and would love to combine the two in the future. Currently, I've been playing the violin for approximately 12 years, 
                             and have worked as a violin tutor in several places, including SongCatchers Inc., and I have privately been teaching students
                              locally for a few years now. </p>

                        <p> I am classically trained, graduating from the Westchester Music Conservatory in 2022. I was also the Concertmaster of my high-school's Symphonic Orchestra. Currently, I am a part of the Fordham University Symphonic Orchestra, seated second stand, first violin. Although most of my education is within the Classical world, I have an appreciation for other genres, and have recently gotten into playing Jazz Tango pieces! <p>
                        
                        <p> I have always enjoyed working in music, and wanted to give back in the way that my previous teachers did to me, spreading the message and joy that is music.

                    </div>
                    
                </div>
            </section>

<!--
    second section 
-->

<div id="lessonbanner"> 
            <h1> Book a Lesson with Zara </h1>
            <h3> Learn how to play an instrument today! </h3>
        </div>

    <h2 class="section-heading"> BOOK A LESSON</h2>


        <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.2472737711696!2d-73.7849554587861!3d40.91032382556888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28d9090c6e0ad%3A0x3e2db74c0b87f470!2s41%20Lawton%20St%2C%20New%20Rochelle%2C%20NY%2010801!5e0!3m2!1sen!2sus!4v1713661156754!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="description">


                <!-- JAVA -->
                <p>Click here to view my availability: </p>
    <button onclick="alert('APRIL 2024: MONDAY AND FRIDAY AFTER 5:00 PM')"> April Availability</button>

                   
    
                    <p> If you are interested in taking music lessons with me please provide your first and last name, including your email address, phone number, and age in the form below. <p>
                    <p> Alternative ways to contact me are: </p>
                    <ul>
                        <li> gmail: zmarsan@fordham.edu </li>
                        <li> phone number: 914-689-4540 </li>
                        <li> linkedin: @ZaraMarsan </li>
                </ul>

                <p> Although I mainly play the violin, I can also teach violists! </p>

        
                </div>
            </div>

            <div>
            <!-- this is for get request, form to receive data like first name and last name  -->

    
            <form method="post">
    <form class="" action="" method="post" autocomplete="off">
    <label for="fname">First name:</label>
    <input type="text" id="first" name="first" autocomplete="off">
    <label for="lname">Last name:</label>
    <input type="text" id="last" name="last" autocomplete="off">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" autocomplete="off">
    <label for="phonenum">Phone Number:</label>
    <input type="text" id="phonenum" name="phonenum" autocomplete="off">
    <label for="age">Age:</label>
    <input type="text" id="age" name="age" autocomplete="off">

    <div class="buttons">
        <button type="submit" formmethod="post"> SUBMIT </button>

    </div>
</form>

</div>
        </section>

<!--
    third section
-->

<div id="mediabanner"> 
            <h1> Media and Performances</h1>
            <h3> Videos of my past performances </h3>
        </div>

    <h2 class="section-heading"> MEDIA </h2>
        <section>
            <div class="card"> 
                <div class="card-image">
                        <img src="meplaying.jpeg">
                
                </div>
                <div class="description">
                   
                    <p> Includes Video/Audio/Images of me playing in solo recitals, ensembles, and larger orchestras throughout my musical career. </p>                </div>
            </div>
        
        </section>

    

<!-- this is for post request, form for username and password -->



        </main>

        <div id = "youtubevideos">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/T7JicQqQrM8?si=AUBR3KVGpxD9eRsK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8NIHVbHd4Gc?si=XRQhg4Q1_9zO4qC_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


        </div>

      
        <h2> If you have any additional questions, feel free to leave them in the comment box below! </h2>
        <form action="login.php" method="get"> 
      
      <table> 
          <tr> 
              <td> </td> 
              <td><input type="text" name="firstnamename"></td> 
          </tr> 
    
          <tr> 
              <td></td> 
              <td style="float:right;"><input type="submit"></td> 
          </tr> 
      </table> 
  </form> 



</html>

<?php

$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "finalprojectDB"; 

$conn = mysqli_connect("localhost", "root", "root", "finalprojectDB");

if(isset($_POST["submit"])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];
$age = $_POST['age'];

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query = "INSERT INTO userinfo VALUES('', '$fname', '$lname', '$email', '$phonenum', '$age')";
mysqli_query($conn, $query);
}





?>


