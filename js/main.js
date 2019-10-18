(function($) {
  "use strict"; // Start of use strict

/* date format */
$(document).ready(function(){
var datepick = "#datepicker";
  $(datepick).datepicker({
          dateFormat: "dd-mm-yy",
          changeMonth: true,
          changeYear: true
  });
})


/* toggle menu */
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});


})(jQuery); // End of use strict


