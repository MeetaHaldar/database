<?php
include('includes/config.php');
if(isset($_POST['database'])){
 $Fname =$_POST['Fname'];
 $Nname =$_POST['Nname'];
 $DOB =$_POST['DOB'];
 $Gender =$_POST['Gender'];
 $email =$_POST['email'];
 $Phone =$_POST['Phone'];

 $sql="Insert into datacont (FirstName,LastName,DOB,Gender,emailId,PhoneNo) values ((:Fname),(:Nname),(:DOB),(:Gender),(:email) ,(:Phone));";
 $query = $dbh->prepare($sql);
 $query-> bindParam(':Fname', $Fname, PDO::PARAM_STR);
 $query-> bindParam(':Nname', $Nname, PDO::PARAM_STR);
 $query-> bindParam(':DOB', $DOB, PDO::PARAM_STR);
 $query-> bindParam(':Gender', $Gender, PDO::PARAM_STR);
 $query-> bindParam(':email', $email, PDO::PARAM_STR);
 $query-> bindParam(':Phone', $Phone, PDO::PARAM_STR);
 if($query->execute()){
	 header('location:./welcome.php');
}
}
?>