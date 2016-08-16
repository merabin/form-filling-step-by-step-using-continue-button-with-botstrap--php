<?php

$con=mysql_connect("localhost","root","");
if(!$con)
{
  echo("couldnot connect");
}
$connec= mysql_select_db("merocollegeguide",$con);

?>

<?php
if(isset($_POST['submit']))
{
$fname1 = $_POST['txtfname'];
$mname1 = $_POST['txtmname'];
$lname1=$_POST['txtlname'];
$Address1=$_POST['txtsadd'];
$Address2=$_POST['txtmadd'];
$Address3=$_POST['txtwadd'];
$Address4=$_POST['txtdistrict'];
$Address13=$_POST['txtstate'];
$Address6=$_POST['Field8'];
$Address7=$_POST['txtpsadd'];
$Address8=$_POST['txtpmadd'];
$Address9=$_POST['txtpwadd'];
$Address10=$_POST['txtpdistrict'];
$Address14=$_POST['txtpstate'];
$Address12=$_POST['pField8'];
$DOB1=$_POST['d_ate'];
$telephone1=$_POST['txttel'];
$email1=$_POST['txtemail'];
if($_FILES['profileimage'])
{
	$tempname=$_FILES['profileimage']['tmp_name'];
	$originalname=$_FILES['profileimage']['name'];
	$size=($_FILES['profileimage']['size']/5242880)."MB<br>" ;
	$type=$_FILES['profileimage']['type'];
	$image11=$_FILES['profileimage']['name'];
	$file_ext=strtolower(end(explode('.',$_FILES['profileimage']['name'])));
	$expensions= array("jpeg","jpg","png","pdf","doc","docx","gif");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
	move_uploaded_file($_FILES['profileimage']['tmp_name'],"collegeimage/".$_FILES['profileimage']['name']);
}
if($_FILES['citizenshipimage'])
{
	$tempname=$_FILES['citizenshipimage']['tmp_name'];
	$originalname=$_FILES['citizenshipimage']['name'];
	$size=($_FILES['citizenshipimage']['size']/5242880)."MB<br>" ;
	$type=$_FILES['citizenshipimage']['type'];
	$image12=$_FILES['citizenshipimage']['name'];
	$file_ext=strtolower(end(explode('.',$_FILES['citizenshipimage']['name'])));
	$expensions= array("jpeg","jpg","png","pdf","doc","docx","gif");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
	move_uploaded_file($_FILES['citizenshipimage']['tmp_name'],"collegeimage/".$_FILES['citizenshipimage']['name']);
}
$gender1=$_POST['Gender'];
$nationality=$_POST['txtnation'];
$level=$_POST['interest'];


$slcpassyear1=$_POST['slcyear1'];
$slccollege1=$_POST['slccollege1'];
$slcuniversity1=$_POST['slcuniversity1'];
$slcpercentage1=$_POST['slcpercentage1'];

$slcpassyear2=$_POST['slcyear2'];
$slccollege2=$_POST['slccollege2'];
$slcuniversity2=$_POST['slcuniversity2'];
$slcpercentage2=$_POST['slcpercentage2'];

$slcpassyear3=$_POST['slcyear3'];
$slccollege3=$_POST['slccollege3'];
$slcuniversity3=$_POST['slcuniversity3'];
$slcpercentage3=$_POST['slcpercentage3'];

$interprogram1=$_POST['interprogram1'];
$interpassyear1=$_POST['interyear1'];
$intercollege1=$_POST['intercollege1'];
$interuniversity1=$_POST['interuniversity1'];
$interpercentage1=$_POST['interpercentage1'];

$interprogram2=$_POST['interprogram2'];
$interpassyear2=$_POST['interyear2'];
$intercollege2=$_POST['intercollege2'];
$interuniversity2=$_POST['interuniversity2'];
$interpercentage2=$_POST['interpercentage2'];

$bachprogram1=$_POST['bachprogram1'];
$bachpassyear1=$_POST['bachyear1'];
$bachcollege1=$_POST['bachcollege1'];
$bachuniversity1=$_POST['bachuniversity1'];
$bachpercentage1=$_POST['bachpercentage1'];

$fathername=$_POST['txtfather'];
$mothername=$_POST['txtmother'];
$fathermob=$_POST['txtfmob'];
$mothermob=$_POST['txtmmob'];
$fatheremail=$_POST['txtfemail'];
$motheremail=$_POST['txtmemail'];
$fatheroccupation=$_POST['txtfoccupation'];
$motheroccupation=$_POST['txtmoccupation'];
$fathernationality=$_POST['txtfnational'];
$mothernationality=$_POST['txtmnational'];
$guardianname=$_POST['txtgname'];
$guardianaddress=$_POST['txtgaddress'];
$guardianmob=$_POST['txtgmob'];
$guardianrelation=$_POST['txtgrelation'];



if($level=="2")
	{
$run2=mysql_query("INSERT INTO studentprofile(FirstName,MiddleName,LastName,StreetAddress,VDCMunicipality,WardNo,District,StateZone,Country,PermanentStreetAddress,PermanentMunicipalityVDC,PermanentWardNo,PermanentDistrict,PermanentStateZone,PermanentCountry,DateOfBirth,Telephone,Email,ProfileImage,Citizenship,Gender,Nationality,FatherName,MotherName,FatherMobNo,MotherMobNo,FatherEmail,MotherEmail,FatherOccupation,MotherOccupation,FatherNationality,MotherNationality,GuardianName,GuardianAddress,GuardianMobNo,Guardianrelation,Level,SLCYear,SLCSchool,SLCBoard,SLCPercentage,InterProgram,InterYear,InterCollege,InterUniversity,InterPercentage,BachProgram,BachYear,BachCollege,BachUniversity,BachPercentage) values('$fname1','$mname1','$lname1','$Address1','$Address2','$Address3','$Address4','$Address13','$Address6','$Address7','$Address8','$Address9','$Address10','$Address14','$Address12','$DOB1','$telephone1','$email1','$image11','$image12','$gender1','$nationality','$fathername','$mothername','$fathermob','$mothermob','$fatheremail','$motheremail','$fatheroccupation','$motheroccupation','$fathernationality','$mothernationality','$guardianname','$guardianaddress','$guardianmob','$guardianrelation','$level','$slcpassyear3','$slccollege3','$slcuniversity3','$slcpercentage3','$interprogram2','$interpassyear2','$intercollege2','$interuniversity2','$interpercentage2','$bachprogram1','$bachpassyear1','$bachcollege1','$bachuniversity1','$bachpercentage1')");

if($run2==true)
{	

echo"success";
header("location:profile.php");

}

else{
	
	echo"sorry1";
}

}
elseif($level=="1")
{
$run2=mysql_query("INSERT INTO studentprofile(FirstName,MiddleName,LastName,StreetAddress,VDCMunicipality,WardNo,District,StateZone,Country,PermanentStreetAddress,PermanentMunicipalityVDC,PermanentWardNo,PermanentDistrict,PermanentStateZone,PermanentCountry,DateOfBirth,Telephone,Email,ProfileImage,Citizenship,Gender,Nationality,FatherName,MotherName,FatherMobNo,MotherMobNo,FatherEmail,MotherEmail,FatherOccupation,MotherOccupation,FatherNationality,MotherNationality,GuardianName,GuardianAddress,GuardianMobNo,Guardianrelation,Level,SLCYear,SLCSchool,SLCBoard,SLCPercentage,InterProgram,InterYear,InterCollege,InterUniversity,InterPercentage,BachProgram,BachYear,BachCollege,BachUniversity,BachPercentage) values('$fname1','$mname1','$lname1','$Address1','$Address2','$Address3','$Address4','$Address13','$Address6','$Address7','$Address8','$Address9','$Address10','$Address14','$Address12','$DOB1','$telephone1','$email1','$image11','$image12','$gender1','$nationality','$fathername','$mothername','$fathermob','$mothermob','$fatheremail','$motheremail','$fatheroccupation','$motheroccupation','$fathernationality','$mothernationality','$guardianname','$guardianaddress','$guardianmob','$guardianrelation','$level','$slcpassyear2','$slccollege2','$slcuniversity2','$slcpercentage2','$interprogram1','$interpassyear1','$intercollege1','$interuniversity1','$interpercentage1','','','','','')");

if($run2==true)
{	
echo"success";
header("location:profile.php");

}

else{
	
	echo"sorry2";
}	
}
elseif($level=="0")
{
$run2=mysql_query("INSERT INTO studentprofile(FirstName,MiddleName,LastName,StreetAddress,VDCMunicipality,WardNo,District,StateZone,Country,PermanentStreetAddress,PermanentMunicipalityVDC,PermanentWardNo,PermanentDistrict,PermanentStateZone,PermanentCountry,DateOfBirth,Telephone,Email,ProfileImage,Citizenship,Gender,Nationality,FatherName,MotherName,FatherMobNo,MotherMobNo,FatherEmail,MotherEmail,FatherOccupation,MotherOccupation,FatherNationality,MotherNationality,GuardianName,GuardianAddress,GuardianMobNo,Guardianrelation,Level,SLCYear,SLCSchool,SLCBoard,SLCPercentage,InterProgram,InterYear,InterCollege,InterUniversity,InterPercentage,BachProgram,BachYear,BachCollege,BachUniversity,BachPercentage) values('$fname1','$mname1','$lname1','$Address1','$Address2','$Address3','$Address4','$Address13','$Address6','$Address7','$Address8','$Address9','$Address10','$Address14','$Address12','$DOB1','$telephone1','$email1','$image11','$image12','$gender1','$nationality','$fathername','$mothername','$fathermob','$mothermob','$fatheremail','$motheremail','$fatheroccupation','$motheroccupation','$fathernationality','$mothernationality','$guardianname','$guardianaddress','$guardianmob','$guardianrelation','$level','$slcpassyear1','$slccollege1','$slcuniversity1','$slcpercentage1','','','','','','','','','','')");

if($run2==true)
{	
echo"success";
header("location:profile.php");

}

else{
	
	echo"sorry3";
}	
}
else{
	
	echo"sorry4";
}	
}
?>