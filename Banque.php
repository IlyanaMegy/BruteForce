<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Banque populaire</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <script>
        function ShowDiv() {
            document.getElementById("myDiv").style.display = "";
        }
    </script>

    <div class="container">
        <div class="row align-items-center">
            <div class="col">
            </div>
            <div class="col">
                <img style="width: 300px;" src="carte.png">
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
            </div>
            <div class="col">
                <button onclick="ShowDiv()" type="button" class="btn btn-light"><img style="width: 275px ;margin-top:25px" src="button.png"></button>
            </div>
            <div class="col">
            </div>
            <?php echo shell_exec("hey") ?>

            <? echo shell_exec("python attakk.py '12345'"); ?>
        </div>

        <div class="row align-items-center">
            <div class="col">
            </div>
            <div class="col">
                <div id="myDiv" style="display:none;" class="answer_list" >
                    <form name="search" action="attakk.py" method="post">
                        Search: <input type="text" name="searchbox">
                        <input type="submit" value="Submit">
                    </form>
                  
                </div>
            <div class="col">
            </div>
        </div>

        
    </div>
</body>
</html>

