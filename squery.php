<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SEARCH</title>
        <script src="jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#search").keyup(function(){
        $("#result").show();
        var x= $("#search").val();
        $.ajax({
          type:"GET",
          url:"fetch.php",
          data:{search:x},
          dataType:"text",
          success:function(data){
            $("#result").html(data);
          },


        });
        $(!this).keyup(function(){
        $("#result").hide();
      });

      });

    });


    </script>
  </head>
  <style type="text/css">
#result{
  width:400px;
  height:300px;
  display: none;

  position: relative;
  top:20px;
}
#search{
  width:400px;
  border:1px solid #2727f9;
  border-radius:5px;
  height:40px;
}
  </style>
  <body>

    <form method="get">
    <input type="text" name="search" id="search" placeholder="search" />
</form>
    <div id="result"> <br/> </div>

  </body>
</html>
