<!doctype html>
<html>
<head>
    <title>APOD</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./css/nasa.css">
    <style>
        #speed-container {
            position: fixed;
            right: 2em;
            bottom: 0;
        }
        h1, h2, #start {
            color: white;
        }
        table {
            background-color: white;
            margin-bottom: 2em;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .navbar .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .navbar a {
                float: none;
                display: block;
                width: 100%;
                text-align: left;
            }

            .navbar.responsive {
                position: relative;
            }

            .navbar.responsive .icon {
                display: block;
                position: absolute;
                left: 0;
                top: 0;
            }

            .navbar.responsive a {
                display: none;
            }

            .navbar.responsive a.icon {
                float: left;
                display: block;
            }

            .navbar.responsive a.icon:hover {
                background-color: #ddd;
                color: black;
            }
        }
    </style>
</head>
<body>

    <div class="navbar" id="myNavbar">
        <a class="active" href="../index.php">Dashboard</a>
        <a href="planete.php">Planetes</a>
        <a href="astronaute.php">Astronautes</a>
        <a href="missions.php">Missions</a>
        <a href="vaisseau.php">Vaisseaus</a>
        <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
            &#9776;
        </a>
    </div>


<div class="container">
    <main>
        <section>
            <h1 class="center-align">Image d’astronomie du jour</h1>
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div id="apod" class="card">

                    </div>
                </div>
            </div>
        </section>
        <aside>
            <h2>Astroid Feed</h2>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" id="start" class="datepicker">
                        <label for="start">Approach Date</label>
                    </div>
                </div>
            </form>
            <table id="afeedTable" class="striped hide">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Is Dangerous</th>
                    <th>Magnitude</th>
                    <th>Min</th>
                    <th>Max</th>
                    <th>Miss Distance</th>
                    <th>Approach Date</th>
                </tr>
                </thead>
                <tbody id="afeed">

                </tbody>
            </table>
        </aside>
    </main>
</div>
<div id="speed-container" class="range-field">
    <label for="speed-slider">Travel Speed</label>
    <input value="20" type="range" id="speed-slider" step="1" min="0" max="100" />
</div>


    <script>
        function toggleNavbar() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="../dist/js/nasa.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.2/p5.js"></script>
<script src="../dist/js/starfield.js"></script>
</body>
</html>