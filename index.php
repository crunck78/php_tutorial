<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #eaedf8;
            margin: 0;
        }

        .menubar {
            background-color: white;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 80px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
            padding-left: 50px;
            display: flex;
            justify-content: space-between;
        }

        .myname{
            display: flex;
            align-items: center;
            margin-right: 50px;
        }

        .avatar{
            border-radius: 100%;
            background-color: yellowgreen;
            padding: 16px;
            width: 16px;
            height: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 8px;
        }

        .main {
            display: flex;
        }

        .menu {
            width: 20%;
            background-color: #746cf5;
            margin-right: 32px;
            padding-top: 150px;

            height: 100vh;
        }

        .menu a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 8px;
            display: flex;
            align-items: center;
        }

        .menu img {
            margin-right: 8px;
        }

        .menu a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .content {
            width: 80%;
            margin-top: 150px;
            margin-right: 32px;
            background-color: white;
            border-radius: 8px;
            padding: 16px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .footer {
            padding: 100px;
            text-align: center;
            background-color: #343434;
            color: white;
            margin-top: 300px;
        }
    </style>
</head>

<body>
    <div class="menubar">
        <h1>Mein Kontaktbuch</h1>

        <div class="myname">
            <div class="avatar">J</div>Junus Ergin
        </div>
    </div>
    <div class="main">
        <div class="menu">
            <a href="index.php?page=start"><img src="img/home.svg"> Start</a>
            <a href="index.php?page=contacts"><img src="img/book.svg"> Kontakte</a>
            <a href="index.php?page=addcontact"><img src="img/add.svg"> Kontakt hinzuf??gen</a>
            <a href="index.php?page=legal"><img src="img/legal.svg"> Impressum</a>
        </div>

        <div class="content">
            <?php
            $headline = 'Herzlich wilkommen';
            $contacts = [
                [
                    'name' => '',
                    'phone' => ''
                ],
                [
                    'name' => '',
                    'phone' => ''
                ]
            ];

            if(isset($_POST['name']) && isset($_POST['phone'])){
                echo 'Kontakt ' . $_POST['name'] . ' w??rde hinzugef??gt';
            }

            if ($_GET['page'] == 'contacts') {
                $headline = 'Deine Kontakte';
            }

            if ($_GET['page'] == 'addcontact') {
                $headline = 'Kontakt hinzuf??gen';
            }

            if ($_GET['page'] == 'legal') {
                $headline = 'Impressum';
            }

            echo '<h1>' . $headline . '</h1>';

            if ($_GET['page'] == 'contacts') {
                echo "
                    <p>Auf dieser Seite hast du einen ??berblick ??ber deine <b>Kontakte</b></p>
                ";
            } else if ($_GET['page'] == 'legal') {
                echo "
                    Hier kommt das Impressum hin
                ";
            } else if ($_GET['page'] == 'addcontact') {
                echo "
                    <div>
                        Auf dieser Seite kannst du einen weitern Kontakt hinzuf??gen
                    </div>
                    <form action='?page=contacts' method='POST'>
                        <div>
                            <input placeholder='Name eingeben' name='name'>
                        </div>
                        <div>
                            <input placeholder='Telefonnummer eingeben' name='phone'> 
                        </div>
                        <button type='Submit'>Absenden</button>
                    </form>
                ";
            } else {
                echo 'Du bist auf der Startseite!';
            }
            ?>
        </div>
    </div>

    <div class="footer">
        (C) 2021 Developer Akademie GmbH
    </div>
</body>

</html>