<?php
session_start();
?>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
  echo("couldnot connect");
}
$connec= mysql_select_db("merocollegeguide",$con);

?>
<!DOCTYPE html>
<html>
<head>
<title>E-Learning</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.0/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="
sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body >
<div class="container" id="myWizard">
  
   <h3>Bootstrap Wizard</h3>
  
   <hr>
  
   <div class="progress">
     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;">
       Step 1 of 5
     </div>
   </div>
  
   <div class="navbar">
      <div class="navbar-inner">
            <ul class="nav nav-pills">
               <li class="active"><a href="#step1" data-toggle="tab" data-step="1">Step 1</a></li>
               <li><a href="#step2" data-toggle="tab" data-step="2">Step 2</a></li>
               <li><a href="#step3" data-toggle="tab" data-step="3">Step 3</a></li>
               <li><a href="#step4" data-toggle="tab" data-step="4">Step 4</a></li>
               <li><a href="#step5" data-toggle="tab" data-step="5">Step 5</a></li>
            </ul>
      </div>
   </div>

     <form id="myForm" method="post" action = "form.php" onsubmit="return validate();" enctype="multipart/form-data">

   <div class="tab-content">
      <div class="tab-pane fade in active" id="step1">
         
        <div class="well"> 
          
            <p style="font-size:20px;margin-left:10%">Personal Information<p>

         <table class="table table-striped" style="width:80%;margin-left:10%" >
          
                <tr>
                 <td colspan="3"><strong> Name :</strong></td>
                </tr>
          
          <tr>
            <td> <input type="text" name="txtfname" value=""  placeholder="First Name"  size="25"/></td>
            <td>  <input type="text" name="txtmname" value="" placeholder="Middle Name" size="25"/></td>
            <td> <input type="text" name="txtlname" value="" placeholder="Last Name" required title="Please enter your last name" size="25" /></td>
            </tr>
            <tr>
      <tr><td></td>
      <td colspan="2"></td>
      </tr>
      <td colspan="3"><strong>Passport photo :</strong></td></tr>
      <tr>
      <td colspan="3"><input type="file" name="profileimage"/></td>
      </tr>
      <tr><td></td>
      <td colspan="2"></td>
      </tr>
            <tr><td colspan="3"><strong style="font-size:18px;"> Current Address :</strong> </td></tr>

            
            <tr><td colspan="3"><strong> Street Address</strong> </td></tr>
      <tr><td colspan="3"><input type="text" name="txtsadd" value="" placeholder="Street Address" size="70"/></td></tr>
             
             <tr><td><strong>Municipality/VDC</strong> </td><td colspan="2"><strong>Ward NO.</strong> </td></tr>
             <tr> <td><input type="text" name="txtmadd" value="" placeholder="Municipality/VDC" size="30"/></td>
       <td colspan="2"><input type="text" name="txtwadd" value="" placeholder="Ward No." required title="Please enter your city" size="30"/></td>
       </tr>
            
              <tr><td colspan="3"> <strong> District</strong> </td></tr>
             <tr> 
             <td colspan="3"><input type="text" name="txtdistrict" value="" placeholder = "District" size="30"/></td>
       </tr>
       <tr><td><strong> State/Zone:</strong> </td><td colspan="3"> <strong> Country: </strong></td></tr> 
             <tr> <td><input type="text" name="txtstate" value="" placeholder="State/Zone" size="30"/></td>
             <td colspan="3"> <select id="Field8" name="Field8" class="field select addr" tabindex="8" onclick="handleInput(this);" onkeyup="handleInput(this);" placeholder="country" required title="Please enter your country name" style="width:300px;height:25px;"/>
                  <option value="" selected="selected">Country</option>
                   <option value="Nepal">Nepal</option>
          <option value="India">India</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Australia">Australia</option>
                  <option value="Canada">Canada</option>
                  <option value="France">France</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="India">India</option>
                  <option value="Brazil">Brazil</option>
                  
              </select></td>
             </tr>
            
             <tr><td colspan="3"><strong style="font-size:18px;"> Permanent Address :</strong> </td></tr>

            
            <tr><td colspan="3"><strong> Street Address</strong> </td></tr>
      <tr><td colspan="3"><input type="text" name="txtpsadd" value="" placeholder="Street Address" size="70"/></td></tr>
             
             <tr><td><strong>Municipality/VDC</strong> </td><td colspan="2"><strong>Ward NO.</strong> </td></tr>
             <tr> <td><input type="text" name="txtpmadd" value="" placeholder="Municipality/VDC" size="30"/></td>
       <td colspan="2"><input type="text" name="txtpwadd" value="" placeholder="Ward No." size="30"/></td>
       </tr>
            
              <tr><td colspan="3"> <strong> District</strong> </td></tr>
             <tr> 
             <td colspan="3"><input type="text" name="txtpdistrict" value="" placeholder = "District" size="30"/></td>
       </tr>
       <tr><td><strong> State/Zone:</strong> </td><td colspan="3"> <strong> Country: </strong></td></tr> 
             <tr> <td><input type="text" name="txtpstate" value="" placeholder="State/Zone" size="30"/></td>
             <td colspan="3"> <select id="Field8" name="pField8" class="field select addr" tabindex="8" onclick="handleInput(this);" onkeyup="handleInput(this);" placeholder="country" style="width:300px;height:25px;"/>
                  <option value="" selected="selected">Country</option>
                   <option value="Nepal">Nepal</option>
          <option value="India">India</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Australia">Australia</option>
                  <option value="Canada">Canada</option>
                  <option value="France">France</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="India">India</option>
                  <option value="Brazil">Brazil</option>
                  
              </select></td>
             </tr>
            
              <tr>
               <td colspan="3"><strong> Date of Birth :</strong> </td></tr>
               <tr> <td colspan="3"><input type="date" id="datepicker" class="d_ate"  name="d_ate" size="30" aria-required="true" placeholder="D  / M / Y" required title ="Please enter your date of birth" size="30" /></td></tr>
                    
               <tr>
               <td colspan="3"><strong> Mobile No : </strong></td></tr>
               <tr><td colspan="3"><input type="text" name="txttel" value="" required title="Please enter your telephone number" placeholder="Mobile No." size="30"/></td>
              </tr>   
        
              <tr>
               <td colspan="3"> <strong>Email :</strong> </td></tr>
               <tr><td colspan="3"><input type="email" name="txtemail" value="" required title="Please enter your email" placeholder="Email" size="30" /></td>
              </tr>   

      
               <tr>
                <td colspan="3"> <strong>Gender : </strong></td></tr>
                <tr><td colspan="3"><select name="Gender" id="Gender" onClick="hideg();" required title ="Please enter your gender" >
          <option></option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>
           <option value="Other">Other</option>
           
                 </select></td></tr>
        <tr><td colspan="3"> <strong>Nationality :</strong> </td></tr>
               <tr><td colspan="3"><input type="text" name="txtnation" value="" placeholder="Nationality" size="30" /></td>
              </tr>  
              <tr>
      <td colspan="3"><strong>Copy of Citizenship:</strong></td></tr>
      <tr>
      <td colspan="3"><input type="file" name="citizenshipimage"/></td>
      </tr>

               
        </table>
            
        </div>

         <a class="btn btn-default btn-lg next" href="#">Continue</a>
      </div>

      <div class="tab-pane fade" id="step2">
         <div class="well"> 
          
            <p style="font-size:20px;margin-left:10%;">Family Information<p>
    <table class="table table-striped" style="width:80%;margin-left:10%" >
    <tr>
             <td> <strong>Father's Name :</strong> </td><td colspan="2"> <strong>Mother's Name :</strong> </td></tr>
        <tr><td><input type="text" name="txtfather" value="" required title="Please enter your Father's name" placeholder="Father's Name" size="40" /></td>
    <td colspan="2"><input type="text" name="txtmother" value="" required title="Please enter your Mother's name" placeholder="Mother's Name" size="40" /></td>
        </tr>
    <tr>
             <td> <strong>Father's Mobile No. :</strong> </td><td colspan="2"> <strong>Mother's Mobile No. :</strong> </td></tr>
        <tr><td><input type="text" name="txtfmob" value="" required title="Please enter your Father's Mobile No." placeholder="Father's Mobile No." size="40" /></td>
    <td colspan="2"><input type="text" name="txtmmob" value="" required title="Please enter your Mother's Mobile No." placeholder="Mother's Mobile No." size="40" /></td>
        </tr> 
    <tr>
             <td> <strong>Father's Email :</strong> </td><td colspan="2"> <strong>Mother's Email :</strong></tr>
             <tr><td><input type="email" name="txtfemail" value="" required title="Please enter your Father's Email" placeholder="Father's Email" size="40" /></td>
        <td colspan="2"><input type="email" name="txtmemail" value="" required title="Please enter your mother's email" placeholder="Mother's Email" size="40" /></td>
    </tr> 
    <tr>
             <td> <strong>Father's Occupation :</strong> </td><td colspan="2"> <strong>Mother's Occupation :</strong> </td></tr>
             <tr><td><input type="text" name="txtfoccupation" value="" placeholder="Father's Occupation" size="40" /></td>
        <td colspan="2"><input type="text" name="txtmoccupation" value="" placeholder="Mother's Occupation" size="40" /></td>
    </tr>
    
    <tr>
             <td> <strong>Father's Nationality :</strong> </td><td colspan="2"> <strong>Mother's Nationality :</strong> </td></tr>
             <tr><td><input type="text" name="txtfnational" value="" placeholder="Father's Nationality" size="40" /></td>
        <td colspan="2"><input type="text" name="txtmnational" value="" placeholder="Mother's Nationality" size="40" /></td>
    </tr>
    <tr><td colspan="2"></td></tr>
    <tr><td colspan="2"></td></tr>
    <tr><td colspan="2"></td></tr>

    <tr>
             <td> <strong>Name of Guardian(optional) :</strong> </td><td colspan="2"> <strong>Guardian's Address:</strong> </td></tr>
             <tr><td><input type="text" name="txtgname" value="" placeholder="Guardian's name" size="40" /></td>
        <td colspan="2"><input type="text" name="txtgaddress" value="" placeholder="Guardian's Address" size="40" /></td>
    </tr>
    <tr>
             <td> <strong>Guardian's Mobile No. :</strong> </td><td colspan="2"> <strong>Guardian's Relation to Student:</strong> </td></tr>
             <tr><td><input type="text" name="txtgmob" value="" placeholder="Guardian's Mobile No." size="40" /></td>
        <td colspan="2"><input type="text" name="txtgrelation" value="" placeholder="Relation to Student" size="40" /></td>
    </tr>
    </table>  
            
         </div>
         <a class="btn btn-default next" href="#">Continue</a>
      </div>

      <div class="tab-pane fade" id="step3">
        <div class="well"> 

<p style="font-size:20px;margin-left:10%;">Academic Information<p>
            <table class="table table-striped" style="width:80%;margin-left:10%" >
          <tr>
           <td><strong> Current Qualification: </strong></td></tr>
           <tr><td><select id='idselect' name="interest" style="width:300px;height:25px;">
               <option value="3" selected>Select Level</option>
                <option value="0" id = "plus2">School Leaving Certificate(SLC)</option>
                 <option value="1" id = "bachelor">Intermediate</option>
                  <option value="2" id = "master">Bachelor</option>
                
                
         </select></td>
        </tr>
      
            
      </table>


   <div id="div0" style="display:none">
  <p style="font-size:20px;margin-left:10%;">Academic Information<p>
     <table class="table table-striped" style="width:80%;margin-left:10%" >
   <tr><td><strong>Level</strong></td><td><strong>Year</strong></td><td><strong>College/School</strong></td><td><strong>Board/University</strong></td><td><strong>%/CGPA</strong></td></tr>
    <tr>
    <td>SLC</td>
    <td><input type="text" name="slcyear1" placeholder="Year" size="5"/></td>
    <td><input type="text" name="slccollege1" placeholder="College/School" size="30"/></td>
    <td><input type="text" name="slcuniversity1" placeholder="Board/University" size="15"/></td>
    <td><input type="text" name="slcpercentage1" placeholder="%/CGPA" size="10"/></td>
    </tr>
    
        </table>

         <input type="submit" name="submit" value="Save" onclick=return(0); style="float:right;margin-bottom:10px;margin-top:10px;background-color:#008ae6;color:white;height:30px;width:100px;border:none;">
       


</div>

<div id="div1" style="display:none">
 
 <p style="font-size:20px;margin-left:10%;">Academic Information<p>
     <table class="table table-striped" style="width:80%;margin-left:10%" >
   <tr><td><strong>Level</strong></td><td><strong>Program</strong></td><td><strong>Year</strong></td><td><strong>College/School</strong></td><td><strong>Board/University</strong></td><td><strong>%/CGPA</strong></td></tr>
    <tr>
    <td>SLC</td>
  <td></td>
    <td><input type="text" name="slcyear2" placeholder="Year" size="5"/></td>
    <td><input type="text" name="slccollege2" placeholder="College/School" size="30"/></td>
    <td><input type="text" name="slcuniversity2" placeholder="Board/University" size="15"/></td>
    <td><input type="text" name="slcpercentage2" placeholder="%/CGPA" size="10"/></td>
    </tr>
    <tr>
    <td>+2</td>
    <td><input type="text" name="interprogram1" placeholder="Program" size="30"   /></td>
    <td><input type="text" name="interyear1" placeholder="Year" size="5"   /></td>
    <td><input type="text" name="intercollege1" placeholder="College/School" size="30"   /></td>
    <td><input type="text" name="interuniversity1" placeholder="Board/University" size="15"   /></td>
    <td><input type="text" name="interpercentage1" placeholder="%/CGPA" size="10"   /></td>
    </tr>
    
            </table>

             <input type="submit" name="submit" value="Save" onclick=return(0); style="float:right;margin-bottom:10px;margin-top:10px;background-color:#008ae6;color:white;height:30px;width:100px;border:none;">


        </div>
            
             <div id="div2" style="display:none">
       <p style="font-size:20px;margin-left:10%;">Academic Information<p>
     <table class="table table-striped" style="width:80%;margin-left:10%" >
  <tr><td><strong>Level</strong></td><td><strong>Program</strong></td><td><strong>Year</strong></td><td><strong>College/School</strong></td><td><strong>Board/University</strong></td><td><strong>%/CGPA</strong></td></tr>
        <tr>
    <td>SLC</td>
  <td></td>
    <td><input type="text" name="slcyear3" placeholder="Year" size="5"/></td>
    <td><input type="text" name="slccollege3" placeholder="College/School" size="30"/></td>
    <td><input type="text" name="slcuniversity3" placeholder="Board/University" size="15"/></td>
    <td><input type="text" name="slcpercentage3" placeholder="%/CGPA" size="10"/></td>
    </tr>
    <tr>
    <td>+2</td>
    <td><input type="text" name="interprogram2" placeholder="Program" size="30"   /></td>
    <td><input type="text" name="interyear2" placeholder="Year" size="5"   /></td>
    <td><input type="text" name="intercollege2" placeholder="College/School" size="30"   /></td>
    <td><input type="text" name="interuniversity2" placeholder="Board/University" size="15"   /></td>
    <td><input type="text" name="interpercentage2" placeholder="%/CGPA" size="10"   /></td>
    </tr>
    <tr>
    <td>Bachelor</td>
    <td><input type="text" name="bachprogram1" placeholder="Program" size="30"/></td>
    <td><input type="text" name="bachyear1" placeholder="Year" size="5"/></td>
    <td><input type="text" name="bachcollege1" placeholder="College/School" size="30"/></td>
    <td><input type="text" name="bachuniversity1" placeholder="Board/University" size="15"/></td>
    <td><input type="text" name="bachpercentage1" placeholder="%/CGPA" size="10"/></td>
    </tr>
    
            </table>  
             <input type="submit" name="submit" value="Save" onclick=return(0); style="float:right;margin-bottom:10px;margin-top:10px;background-color:#008ae6;color:white;height:30px;width:100px;border:none;">

  
            </div>
      
     
      
     
      
      <div id="div3" style="display:none;" >
         
     <table class="table table-striped" style="width:80%;margin-left:10%" >
            <tr>
            <td colspan="3"><strong>SLC Marksheet :</strong></td>
            <td colspan="3"><input type="file" name="marksheetimage" disabled="disabled" />
            </tr>
            <tr>
            <td colspan="3"><strong>SLC Certificate :</strong></td>
            <td colspan="3"><input type="file" name="certificateimage" disabled="disabled" />
            </tr>
            <tr>
        </tr>
        </td>
        

            <td colspan="3"><strong>+2 Transcript : </strong><div style="color:red;font-size:11px;float:right;text-transform:none;">For Bachelor & Master</div></td>
            <td colspan="3"><input type="file" name="transcriptimage" size="20" disabled="disabled"/></td>
            
            </tr>
            <tr>
            <td colspan="3"><strong>+2 Character Certificate :</strong><div style="color:red;font-size:11px;float:right;text-transform:none;">For Bachelor & Master</div></td>
            <td colspan="3"><input type="file" name="characterimage" disabled="disabled" />
            </tr>
            <tr>
            <td colspan="3"><strong>+2 Provisional Certificate :</strong><div style="color:red;font-size:11px;float:right;text-transform:none;">For Bachelor & Master</div></td>
            <td colspan="3"><input type="file" name="provisionalimage" disabled="disabled" />
            </tr>
            <tr>
            <td colspan="3"><strong>+2 Migration Certificate :</strong><div style="color:red;font-size:11px;float:right;text-transform:none;">For Bachelor & Master</div></td>
            <td colspan="3"><input type="file" name="migrationimage" disabled="disabled"/>
            </tr>
            </td>
            

            <tr>
            <td colspan="3"><strong>Bachelor Transcript :</strong><div style="color:red;font-size:11px;float:right;text-transform:none;">For Master</div></td>
            <td colspan="3"><input type="file" name="btranscriptimage" disabled="disabled" />
            </tr>
            <tr>
            <td colspan="3"><strong>Bachelor Character Certificate :</strong><div style="color:red;font-size:11px;float:right;text-transform:none;">For Master</div></td>
            <td colspan="3"><input type="file" name="bcharacterimage" disabled="disabled" />
            </tr>
            <tr>
            <td colspan="3"><strong>Bachelor Provisional Certificate :</strong><div style="color:red;font-size:11px;float:right;text-transform:none;">For Master</div></td>
            <td colspan="3"><input type="file" name="bprovisionalimage" disabled="disabled" />
            </tr>
            <tr>
            <td colspan="3"><strong>Bachelor Migration Certificate :</strong><div style="color:red;font-size:11px;float:right;text-transform:none;">For Master</div></td>
            <td colspan="3"><input type="file" name="bmigrationimage" disabled="disabled"/>
            </tr>
            <tr>
            <td colspan="3"><strong>Work Experience (Optional):</strong></td>
            <td colspan="3"><input type="file" name="experienceimage" disabled="disabled"  />
            </tr>
            </table> 
            </div>   

            
        
        </div>
         <a class="btn btn-default next" href="#">Continue</a>
      </div>


      <div class="tab-pane fade" id="step4">
        <div class="well">
         <h2>Step 4</h2> Add another almost done step here..</div>
         <a class="btn btn-default next" href="#">Continue</a>
      </div>
      <div class="tab-pane fade" id="step5">
        <div class="well"> <h2>Step 5</h2> You're Done!</div>
         <a class="btn btn-success first" href="#">Start over</a>
      </div>
   </div>
  
   <hr>
  
   <a href="http://www.bootply.com/wj9gWh8ulj">Edit on Bootply</a>
  
   <hr>
  
</div>



<script>
$('.next').click(function(){

  var nextId = $(this).parents('.tab-pane').next().attr("id");
  $('[href=#'+nextId+']').tab('show');
  return false;
  
})

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  
  //update progress
  var step = $(e.target).data('step');
  var percent = (parseInt(step) / 5) * 100;
  
  $('.progress-bar').css({width: percent + '%'});
  $('.progress-bar').text("Step " + step + " of 5");
  
  //e.relatedTarget // previous tab
  
})

$('.first').click(function(){

  $('#myWizard a:first').tab('show')

})

</script>

<script>

$(document).ready(function(){

$('#idselect').on('change', function() {

    if ( this.value !== '0' && this.value !==  '1' && this.value !==  '2' && this.value !==  '3'){
             $("#div3").show();  

           

    }
    else{
  if ( this.value == '0')
  {
    $("#div1").hide();
     $("#div2").hide();
     $("#div3").hide();


    $("#div0").show();
    document.getElementById("myForm").addEventListener("submit", myFunction);

    function myFunction() {
    alert("The form was submitted");
}
   
    

  
  }
  else if (this.value == '1' ) 
  {
    $("#div0").hide();$("#div2").hide();
    $("#div1").show();
  $("#div3").hide();
 

    }
  else if (this.value == '2') {
    $("#div0").hide();$("#div1").hide();$("#div2").show();
         $("#div3").hide();
       

  }
  else if (this.value == '3') {
    $("#div0").hide();$("#div1").hide();$("#div2").hide();
         $("#div3").show();
      

  }
  
  else{
     
     $("#div3").show();
     
  }
}

});

});
</script>



      


    </form>



<!-- / IE9 Placeholder Support -->
</body>
</html>