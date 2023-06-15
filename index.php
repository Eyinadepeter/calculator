
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   input{
       width: 200px;
       height: 30px;
       margin: 10px;
       border: purple solid ;
       background: orange;
   }
</style>
<body>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="input a number">
        
        <select name="operation" id="operation">
            <option value="none" name="none">None</option>
            <option value="add" name="add">+</option>
            <option value="subtract" name="subtract">-</option>
            <option value="divide" name="divide">/</option>
            <option value="multiply" name="multiply">*</option>
        </select>
        <input type="number" name="num2" placeholder="input a number">

        <button type="submit" name="submit">Calculate</button>
    </form>
    
</body>
</html>