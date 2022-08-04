<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Sahaj </title>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type = "text/javascript">
function Copier() {
var firstWord= document.getElementById("email").value;
var box = document.getElementById('display');
box.style.cssText= 'font-size: 20px; cursor: pointer; text-align:center;';
box.innerHTML="Gowtham D";
}
</script>
  </head>
  <body>
    <br><br>
    <center><div style="width:800px;height:500px;border:1px solid #000;">
        <form action="details2.php">                                                                                                                                                                                     <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <center><label for="email">Enter Email ID:</label>
          <br>
        <input type="text" id="email" name="email"></center>
        <br>
        <center><button>Submit</button></center>
        <div id="display"></div>
      </form>
    </div></center>
  </body>

</html>
