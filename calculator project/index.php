<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calculator</title>
</head>
<body>
    
    <form action="includes/calc.inc.php">
    
    <p>My calculator</p>
    <input type="number" name="num1" placeholder="First number">
    <select name="oper" id="operation">
    <option value="add">Addition</option>
    <option value="sub">Subtraction</option>
    <option value="div">Division</option>
    <option value="mul">Multiplication</option>
    </select>
    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit">Calculate</button>
    
    </form>

</body>
</html>