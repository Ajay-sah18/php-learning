<form method="POST">

<label for="job_title">Job Title</label>
 <input type="text" id="job_title" name="job_title" value="<?php echo $_POST["job_title"] ?? ""; ?>" >

 <label for="company">Company</label>
 <input type="text" id="company" name="company" value="<?php echo $_POST["company"] ?? ""; ?>" >

 <label for="location">Location</label>
 <input type="text" id="location" name="location" value="<?php echo $_POST["location"] ?? ""; ?>" >

 <label for="salary">Salary</label>
 <input type="number" id="salary" name="salary" value="<?php echo $_POST["salary"] ?? ""; ?>" >

 
 <button type="submit">Submit</button>
</form>

<?php

if(isset($_POST["job_title"])) {

   if(empty(trim($_POST["job_title"]))){
    echo "Job Title is required" . "<br>";
   } else {
    echo trim(htmlspecialchars($_POST["job_title"])) . "<br>";
   }

    if(empty(trim($_POST["company"]))){
        echo "Company Name is required." . "<br>";
    } else {
        echo trim(htmlspecialchars($_POST["company"])) . "<br>";
    }
    
    if(empty(trim($_POST["location"]))){
        echo "Location is required." . "<br>";
    } else {
       echo trim(htmlspecialchars($_POST["location"])) . "<br>";
    }
    
   
    if(empty(trim($_POST["salary"]))) {
        echo "Salary is required." . "<br>";
    } else {
        echo trim(htmlspecialchars($_POST["salary"])) . "<br>";
    }
}

?>


