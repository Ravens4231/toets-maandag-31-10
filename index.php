<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

<script type="text/javascript">
    function red(){
        document.bgColor="red";
    }
    function Blue(){
        document.bgColor="Blue";
    }
    function Yellow(){
        document.bgColor="Yellow";
    }
    function Grey(){
        document.bgColor="Grey";
    }
</script>

    <Ul>
        <input type="button" class="button" value="Red" onclick="red()">
        <input type="button" class="button" value="Blue" onclick="Blue()">
        <input type="button" class="button" value="Yellow" onclick="Yellow()">
        <input type="button" class="button" value="Grey" onclick="Grey()">
    </Ul>
</body>
</html>