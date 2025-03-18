function validateForm(){

  /* Check region name */
  var Regions_Name = document.getElementById("Regions_NameText").value;
  if (Regions_Name == "") {
    alert("Region name must be filled out");
    return false;
  }

   /* Check the select value for the island */
   var NZ_Islands_IDNumber = document.getElementById("NZ_Islands_IDNumber").value;
   if (NZ_Islands_IDNumber == "") {
     alert("Island value must be selected");
     return false;
   } 
   else if (NZ_Islands_IDNumber <= 0) {
     alert("Island value must be selected");
     return false;
   } 

  /* Check info text */
  var InfoText = document.getElementById("InfoText").value;
  if (InfoText == "") {
    alert("Information must be entereded");
    return false;
  }
    
  /*Info and image fields are both text, so it's the same kind of code as before. */

  /* Check the order by value */
  var OrderByText = document.getElementById("OrderByText").value;
  if (OrderByText == "") {
    alert("Order by must be filled out");
    return false;
  } 
  else if (OrderByText <= 0) {
    alert("Order by must be greater than 0");
    return false;
  } 
    /* Check the disabled value */
    var DisabledText = document.getElementById("DisabledText").value;
    if (DisabledText == "") {
      alert("Disabled field must be a 0 or 1");
      return false;
    } 
    else if (DisabledText < 0) {
      alert("Disabled field must be a 0 or 1");
      return false;
    } 
}