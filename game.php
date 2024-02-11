<?php

function determineWinner($player, $computer) {

    if($player == $computer) {
        return "Empate";
    }elseif (($player == "rock" && $computer == "scissors") ||
            ($player == "scissors" && $computer == "paper")  ||
            ($player == "paper" && $computer == "rock")){
            
                return "Has ganado";
    } else {
        return "La máquina gana";
    }
}

$choices = array("rock","paper","scissors");
$computer = $choices[array_rand($choices)];

if (isset($_POST['player'])) {
    $player = $_POST['player'];
    $result = determineWinner($player, $computer);
} else {
    $result = "Bienvenido Chema al juego de piedra, papel o tijera";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo $result; ?></h2>
        <form method="post" action="game.php">
            <label>Elige tu opción:</label>
            <input type="radio" name="player" value="rock" id="rock"><label for="rock"> Piedra</label><br>
            <input type="radio" name="player" value="paper" id="paper"><label for="paper"> Papel</label><br>
            <input type="radio" name="player" value="scissors" id="scissors"><label for="scissors"> Tijera</label><br>
            <br>
            <input type="submit" value="Play">
        </form>
    </div>
</body>
</html>