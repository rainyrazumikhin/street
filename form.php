<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Blogy</title>

    <style>
        img {
            width: 50%;
            margin: auto;
            display: block;
        }
    </style>

    
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/bootstrap-grid.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="navbar">
        <ul>
            <li>
                <a href="index.html"><i class="fa fa-home"></i>Home</a>
            </li>
            <li id="continents">
                <a href="#cont"><i class="fa-solid fa-earth-europe"></i>Continents</a>
                <div class="sub-menu">
                    <ul>
                        <li>
                            <a href="africa.html">AFRICA</a>
                        </li>
                        <li>
                            <a href="america.html">AMERICA</a>
                        </li>
                        <li>
                            <a href="asia.html">ASIA</a>
                        </li>
                        <li>
                            <a href="europe.html">EUROPE</a>
                        </li>
                        <li>
                            <a href="oceania.html">OCEANIA</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="recipes.html"><i class="fa-solid fa-burger"></i>Recipes</a>
            </li>
            <li>
                <a href="about.html"><i class="fa-solid fa-user"></i>About</a>
            </li>
            <li>
                <a href="contact.html"><i class="fa-solid fa-phone"></i>Contact</a>
            </li>
        </ul>
        
    </div>

    <?php
        $to = $_POST['email'];
        $from = "tepemelike2001@hotmail.com";

        $headers = "From: " . $from . "\r\n";

        $subject = "New subscription";
        $body = "Thanks for your subscription " . $_POST['email'];


        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
        { 
            if (mail($to, $subject, $body, $headers, "-f " . $from))
            {
                echo 'Thanks for your subscription!';
            }
            else
            {
            echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
            }
        }
        else
        {
        echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';   
        }
        ?>
</body>

</html>

