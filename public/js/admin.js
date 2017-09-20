// Initialize collapse button
  $(".button-collapse,.left-menu-btn").sideNav(
    {
      menuWidth: 250, // Default is 240      
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
  $(document).ready(function() {
    $('select').material_select();
  });
