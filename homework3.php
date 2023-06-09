<!DOCTYPE html>
<html>
<head>
    <title> Fibonacci </title>
<body>
    <form method="post">
        <label>100이하의 정수를 입력하세요 </label>
        <input type="number" name="n" min="1" max="100" required>
        <input type="submit" name="submit" value="출력">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $n=$_POST['n'];

        $before = 0;
        $now = 1;
        echo $before . " ";
        echo $now . " ";

        for ($i = 3; $i <= $n; $i++) {
            $next = $before + $now;
            echo $next . " ";
            $ratio = $now != 0 ? $next / $now : 0;
            echo "(" . $next . "/" . $now . " = " . round($ratio, 2) . ")" . " ";
            $before = $now;
            $now = $next;
        }
    }
    ?>
</body>
</html>
