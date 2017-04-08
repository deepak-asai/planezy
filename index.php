<?php $cities = array ("TamilNadu" => array("Chennai","Trichy","Coimbatore"), "Kerala"=> array ("Trivandrum", "Cochin", "Calicut"), "Karnataka"=>array("Bangalore", "Mysore", "Manipal"));

 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Planezy</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function makeVisible(ele){
      if(ele == 'firstTask'){
        $('#firstTask').show();
        $('#secondTask').hide();
        $('#thirdTask').hide();
       
      }
      else if(ele == 'secondTask'){
        $('#firstTask').hide();
        $('#secondTask').show();
        $('#thirdTask').hide();
      }
      else if(ele == 'thirdTask'){
        $('#firstTask').hide();
        $('#secondTask').hide();
        $('#thirdTask').show();
      }
      
    }
    $(document).ready(function(){
      $("#txtChar").val('');
      $("#togg").click(function(){
        $("#taj").fadeToggle("slow");
        
      });

      $("#calc").click(function(){
        var n = parseInt($("#txtChar").val());
        var text='';
        //var n=5;
        for(i=1; i<=n;i++){
          for(j=1; j<=i; j++){
            text+= j;
          }

          for(k=j-2; k>=1; k--){
            text+= k;
          }
          text+="<br>";
        }
        $("#disp_2nd").html(text);
        
      });

    });



     function isNumberKey(evt)
     {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
    }
  </script>
</head>
<body>
<div style="margin-left: 650px;" >
  <img src="logo.png">
</div>
<div id="line"></div>
<div style="margin-top: 30px;">
<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration: none;" onclick="makeVisible('firstTask');">
        <div class="panel-heading" id="headingbox">
          <h4 class="panel-title">
            1st task - Fade in and Fade out
          </h4>
        </div>
      </a>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="container-fluid">
              <div class="row">
                <button id="togg" style="background:#cd3f0e; color: #fff; width: 100px; height: 40px;font-size: 15px; margin-left: 490px" >Toggle</buton>
              </div>
            </div>
         </div>
      </div>
    </div>

    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration: none;"  onclick="makeVisible('secondTask');">
        <div class="panel-heading" id="headingbox">
          <h4 class="panel-title" >
            2nd Task - Displaying number sequence
          </h4>
        </div>
      </a>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body" style="color:  #505050">
            <input id="txtChar" style=" margin-left: 450px;" onkeypress="return isNumberKey(event)" type="text" name="txtChar">
          <button id="calc" style="background:#cd3f0e; color: #fff; width: 100px; height: 40px;font-size: 15px; margin-left: 477px; margin-top:10px">Calculate</button>
        </div>
      </div>
    </div>


    <div class="panel panel-default">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration: none;" onclick="makeVisible('thirdTask');">
        <div class="panel-heading" id="headingbox" >
          <h4 class="panel-title">
            3rd Task - Php array
          </h4>
        </div>
      </a>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body" style="color:  #505050; margin-left: 500px;">
          <p>Check Below</p>
        </div>
      </div>
    </div>

  </div> 
</div>


<div id = "main_cont">
  <div id = "firstTask" style="" >
    <div id = "taj" style="box-shadow:  0px 8px 16px 0px rgba(0,0,0,0.2); width: 150px; margin-left: 20px;">
      <img  src="tajmahal.jpg" style="width: 150px; height: 150px; ">
      <div class="container">
        <p style="margin-left: 30px;">Taj Mahal  </p>
      </div>
    </div>
    
  </div>
  <div id = "secondTask" style="display: none">
    <p>The Pattern is printed here</p>
    <p id = "disp_2nd"></p>
  </div>
  <div id = "thirdTask" style="display: none">        
        <?php 
          echo "<select id='main' style='margin-left:-30px; margin-top:60px; width:130px;'>";
            foreach ($cities as $key => $value) {
              echo "<option value='$key'>$key</option>";
            }
          echo "</select>";

          foreach ($cities as $key => $value) {
            echo "<select class='sublist' id='$key' style='margin-left:20px; width:130px;'>";
            foreach ($value as $item) {
              echo "<option value='$item'>$item</option>";
            }
            echo "</select>";
          }
        ?>
  </div>
</div>
</div>

<div id="line"></div>
<div style="text-align: center;"> 
Deepak A <br>
9952069133<br>
deepak.a.1996@gmail.com<br>
Reg No: 118015027

</div>
<script>
$("#main").change(function () {
    $(".sublist").hide();
    $("#" + $(this).val()).show();
});
$("#main").trigger("change");
</script>

</body>
</html>