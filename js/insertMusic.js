function validateForm(){

    /* Check title */
    var title = document.getElementById("titleText").value;
    if (title == "") {
      alert("Title must be filled out");
      return false;
    }

    /* Determine which star rating is selected */
    var rating = document.getElementsByName('rating'); // Get a collection of HTML Radio objects with the name rating
    var selectedRating = 0;
    for( var i = 0; i < rating.length; i++ ) { // Loop through the collection
      if( rating[i].checked == true ) { // if current rating is checked
        selectedRating = rating[i].value // save this as the selected rating
      }
    }

    /* If no rating is selected, display an error */
    if( selectedRating == 0) {
      alert("Rating must be filled out");
      return false;
    }

    /* Check artist */
    var artist = document.getElementById("artistText").value;
    if (artist == "") {
      alert("Artist must be filled out");
      return false;
    }

    /* Check Genre */
    var genre = document.getElementById("genreText").value;
    if (genre == "") {
      alert("Genre must be filled out");
      return false;
    }

    /* Check the year */
    var year = document.getElementById("yearText").value;
    if (year == "") {
      alert("Year formed must be filled out");
      return false;
    } 
    else if (year <= 0){
      alert("Year must be greater than 0");
      return false;
    }

    /* Check origin */
    var origin = document.getElementById("originText").value;
    if (origin == "") {
      alert("Origin must be filled out");
      return false;
    }

    /* Check the price */
    var price = document.getElementById("priceText").value;
    if (price == "") {
      alert("Price must be filled out");
      return false;
    } 
    else if (price <= 0) {
      alert("Price must be greater than $0.00");
      return false;
    }
}