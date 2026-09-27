<form method="POST">

<label for="job_title">Job Title</label>
 <input type="text" id="job_title" name="job_title">

 <label for="company">company</label>
 <input type="text" id="company" name="company">

 <label for="location">location</label>
 <input type="text" id="location" name="location">

 <label for="salary">salary</label>
 <input type="number" id="salary" name="salary">

 
 <button type="submit">Submit</button>
</form>

<?php

if(isset($_POST["job_title"])) {

   if(empty($_POST["job_title"])){
    echo "Job Title is required" . "<br>";
   } else {
    echo $_POST["job_title"] . "<br>";
   }

    if(empty($_POST["company"])){
        echo "Company Name is required." . "<br>";
    } else {
        echo $_POST["company"] . "<br>";
    }
    
    if(empty($_POST["location"])){
        echo "Location is required." . "<br>";
    } else {
       echo $_POST["location"] . "<br>";
    }
    
   
    if(empty($_POST["salary"])) {
        echo "Salary is required." . "<br>";
    } else {
        echo $_POST["salary"] . "<br>";
    }
}

?>