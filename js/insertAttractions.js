function validateForm(){

    /* Check name of attraction, can't be left blank */
    var Attractions_Name = document.getElementById("Attractions_NameText").value;
    if (Attractions_Name == "") {
      alert("Attractions name must be filled out");
      return false;
    }

    /* Check artist */
    var Regions_ID = document.getElementById("Regions_IDNumber").value;
    if (Regions_ID == "") {
      alert("Region must be selected");
      return false;
    }

    /* Check Genre */
    var Info = document.getElementById("InfoText").value;
    if (Info == "") {
      alert("Information about the attraction must be entered");
      return false;
    }

    /* Check origin */
    var Attractions_Type_ID = document.getElementById("Attractions_Type_IDNumber").value;
    if (Attractions_Type_ID == "") {
      alert("Please select an attraction type");
      return false;
    }
    /* Check the price */
    var Image = document.getElementById("ImageText").value;
    if (Image == "") {
      alert("Image path must be entered");
      return false;
    } 
    var OrderBy = document.getElementById("OrderByNumber").value;
    if (OrderBy == "") {
      alert("Order by must be entered");
      return false;
    } 
    else if (OrderBy <= 0){
      alert("Order by must be larger than 0");
      return false;
    }
    var Disabled = document.getElementById("DisabledNumber").value;
    if (Disabled == "") {
      alert("Disabled must be 0 or 1");
      return false;
    } 

}