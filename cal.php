<!DOCTYPE html>

<head>
	<title>Simple Calculator Program in PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="dp.jpeg" type="image/gif" sizes="16x16">
</head>

<?php
if(isset($_POST['operator']))
{
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    $result = '';
    if (is_numeric($first_num) && is_numeric($second_num)) {
        switch ($operator) {
            case "Add":
               $result = $first_num + $second_num;
                break;
            case "Subtract":
               $result = $first_num - $second_num;
                break;
            case "Multiply":
                $result = $first_num * $second_num;
                break;
            case "Divide":
                $result = $first_num / $second_num;
        }
    }
}

?>

<body>
    <div id="page-wrap">
	<center><h1 align="center">PHP - Simple Calculator Program</h1></center>
   <center> <div class="main">
	  <form action="" method="post" id="quiz-form" >
        <table align='center'>
            
            <tr>
                <td><label for="first_num">First Number :</label></td>
                <td>
                    <input type="number" name="first_num" id="first_num" tabindex="1" required="required" value="<?php if(isset($first_num)){echo $first_num;} ?>" />
                </td>
            </tr>    
                
            <tr>
                <td><label for="second_num">Second Number :</label></td>
                <td>
                    <input type="number" name="second_num" id="second_num" tabindex="2" required="required" value="<?php if(isset($second_num)){echo $second_num;} ?>" />
                </td>
            </tr>
            
            <tr>
                <td><label for="result">Result :</label></td>
                <td>
                    <input readonly="readonly" type="number" name="result" value="<?php if(isset($result)){echo $result;} ?>">    
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
                
            <tr>
                <td><input type="submit" class="btn" name="operator" tabindex="3" value="Add" /></td>
                <td><input type="submit" class="btn" name="operator" tabindex="4" value="Subtract" /></td>
            </tr>

            <tr>
                <td><input type="submit" class="btn" name="operator" tabindex="5" value="Multiply" /></td>
                <td><input type="submit" class="btn" name="operator" tabindex="6" value="Divide" /></td>
            </tr>   
            
        </table>
	  </form>
      </div></center>
      <center><footer>
        <table class="tbl-5">
            <tr>
                <td><a href="https://www.instagram.com/dhirenkumar_rathod/" target="_blank"><img src="https://img.icons8.com/fluent/30/000000/instagram-new.png"/></a></td>
                <td><a href="https://www.facebook.com/dhiren.rathod.927" target="_blank"><img src="https://img.icons8.com/fluent/30/000000/facebook-new.png"/></a></td>
                <td><a href="https://www.youtube.com/c/DhirenkumarRathod" target="_blank"><img src="https://img.icons8.com/fluent/30/000000/youtube-play.png"/></a></td>
            </tr>
        </table>
        <p>All Rights Reserver. Developed by <a href="https://www.instagram.com/dhirenkumar_rathod/" target="_blank">Dhirenkumar Rathod</a>.</p>
    </footer></center>
    </div>
</body>
</html>