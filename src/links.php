<!-- Crystal Lim, Jeremy Park -->
<!-- All resources for content like text and images are coded in html NOT css -->
<!-- All titlecard images used are from pexel, so they are royalty free -->
<!-- favicon taken from http://www.emoji.co.uk/view/1843/ -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CSCB20 | Links</title>
    <link rel="icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Introduction to Databases and Web Applications">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat" rel="stylesheet"> -->
    <script src="menuClick.js"></script>
</head>

<body>
    <!--Top Sticky Header-->
    <header>
        <nav>
            <div class="toggle">
                <img src="img/hamburger.png">
            </div>
            <a id="logo" href="index.html">CSCB20</a>
            <div class="menu">
                <ul id="navBar">
                    <li>
                        <a href="announcements.php">Announcements</a>
                    </li>
                    <li>
                        <a href="course.php">Course Materials</a>
                    </li>
                    <li>
                        <a href="schedule.php">Schedule</a>
                    </li>
                    <li>
                        <a href="grades.php" target="_blank">Grades</a>
                    </li>
                    <li>
                        <a href="feedback.php" target="_blank">Feedback</a>
                    </li>
                    <li>
                        <a href="links.php" target="_blank">Links</a>
                    </li>
                    <li>
                        <a href="logout.php" target="_blank">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--Main Content-->
    <div class="main">
        <div id="titlecard">
            <div id="tcText">
                <h1>
                    Lectures
                </h1>
            </div>
            <div id="tcImg" style="background-image: url('img/lectures.jpg');"></div>
        </div>

        <div class="boxes">

            <!-- Box 1 -->
            <div class="box">
                <h2>Piazza</h2>
                <p>
                    <a href="piazza.com/utoronto.ca/winter2018/cscb20h3" target="_blank">Here</a>
                </p>
            </div>
            <hr>

            <!-- Box 1 -->
            <div class="box">
                <h2>Markus</h2>
                <p>
                    <a href="https://markus.utsc.utoronto.ca/cscb20w18" target="_blank">Here</a>
                </p>
            </div>
            <hr>

            <!-- Box 1 -->
            <div class="box">
                <h2>UTSC Labs</h2>
                <p>
                    <a href="http://www.utsc.utoronto.ca/iits/computer-labs" target="_blank">Here</a>
                </p>
            </div>
            <hr>

        </div>

        <footer>
            <img alt="University of Toronto" src="http://cou.on.ca/wp-content/uploads/2015/04/University-of-Toronto.png">
            <p>
                <b>CAMPUS</b>
                <br>
                <a href="http://www.utsc.utoronto.ca/home/" target="_blank">University of Toronto Scarborough</a>
            </p>
            <p>
                <b>FACULTY</b>
                <br>
                <a href="http://www.utsc.utoronto.ca/cms/faculty-of-computer-science" target="_blank">Computer and Mathematical Sciences Faculty</a>
            </p>
            <p>
                &copy; Site Design by Crystal Lim and Jeremy Park
            </p>
        </footer>
    </div>
</body>

</html>