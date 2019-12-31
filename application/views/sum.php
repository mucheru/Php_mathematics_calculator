
<html>
<head>
        <title>aritmetic</title>
</head>
<body>

        <h1>Welcome to mathematics site</h1>
        <?php echo validation_errors(); ?>
       <?php echo form_open('welcome/sum'); ?>
       Enter num 1: <input type = "text" name="num_1"><br> </br>
       Enter num 2: <input type = "text" name="num_2"><br> </br>
       submit: <input type = "submit" name="submit">
   
</body>
</html>