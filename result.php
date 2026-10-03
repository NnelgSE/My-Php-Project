<!DOCTYPE html>
<html>

<head>
    <meta charset=UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="page-wrap">

        <h1>Result | PHP Quiz</h1>

        <?php

        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];

        $totalCorrect = 0;

        if ($answer1 == "A") {
            $totalCorrect++;
        }
        if ($answer2 == "B") {
            $totalCorrect++;
        }
        if ($answer3 == "A") {
            $totalCorrect++;
        }
        if ($answer4 == "C") {
            $totalCorrect++;
        }
        if ($answer5 == "B") {
            $totalCorrect++;
        }

        echo "<div id='results'>$totalCorrect / 5 correct</div>";
        echo "<br>";
        

        if ($totalCorrect <= 2) {
            echo "You Failed!";
        } elseif ($totalCorrect <= 3) {
            echo "You Passed!";
        } elseif ($totalCorrect <= 4) {
            echo "Great Job!";
        } elseif ($totalCorrect <= 5) {
            echo "Congratulations! Perfect Score!";
        }

        ?>
        <br />
        <!-- Final Project: enter your php if, elseif and else code here-->
        &nbsp;
        &nbsp;
        &nbsp;
        <form action="index2.php" method="POST">
            <input type="submit" value="Retake" />
        </form>
    </div>



</body>

</html>