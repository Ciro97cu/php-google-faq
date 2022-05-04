<?php
include "php/data.php";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <title>Google FAQ</title>
</head>

<body>
    <header class="bg-white position-fixed w-100">
        <div class="container-fluid">
            <div class="d-flex gap-1 align-items-center py-3">
                <div class="wrapper_img">
                    <img class="w-100" src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="google-logo">
                </div>
                <div class="info_text text-secondary">
                    Privacy e termini
                </div>
            </div>
            <ul class="row text-secondary">
                <li class="col-auto">Introduzione</li>
                <li class="col-auto">Norme sulla privacy</li>
                <li class="col-auto">Termini di servizio</li>
                <li class="col-auto">Tecnologie</li>
                <li class="col-auto">Domande frequenti</li>
            </ul>
        </div>
    </header>
    <main class="py-5">
        <div class="container-sm pt-5">
            <div class="row">
                <?php foreach ($arrayFaq as $item) {

                    echo "<h2>";
                    echo $item["question"];
                    echo "</h2>";

                    if (array_key_exists("answer", $item)) {
                        foreach ($item["answer"] as $answer) {
                            echo "<p>";
                            echo $answer;
                            echo "</p>";
                        }
                    }


                    if (array_key_exists("altAnswer", $item)) {
                        foreach ($item["altAnswer"] as $answer) {
                            echo $answer;
                        }
                    }


                    if (array_key_exists("subQuestion", $item)) {
                        foreach ($item["subQuestion"] as $subQuestion) {
                            echo "<h4>";
                            echo $subQuestion;
                            echo "</h4>";
                        }
                    }

                    if (array_key_exists("subAnswer", $item)) {
                        foreach ($item["subAnswer"] as $subAnswer) {
                            echo "<p>";
                            echo $subAnswer;
                            echo "</p>";
                        }
                    }
                } ?>
            </div>
        </div>
    </main>
</body>

</html>