<!DOCTYPE html>
<html>
    <body>
        <form action="calculator.php" method="POST">
        <lable>Number 1</lable>
        <input type = "number" name="Number1"></br><br>
        <lable>Number 2</lable>
        <input type = "number" name="Number2"></br><br>
        <lable> Operation</lable>
        <select name="Operator" id="operator">
            <option>Select</option>
            <option value="Addition">+</option>
            <option value="Substraction">-</option>
            <option value="Multiplication">*</option>
            <option value="Division">%</option>
        </select></br><br>
        <input type = "Submit" value ="Submit" name="submit">
        </form>
    </body>
</html>