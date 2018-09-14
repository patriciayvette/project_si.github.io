
<script>
  $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); });

  $(document).ready(function() {
    $('body').tooltip({
        selector: "[data-tooltip=tooltip]",
        container: "body"
    });
  });

  $(document).ready(function(){
    $(" #alert" ).fadeOut(6000);
  });
  
</script>