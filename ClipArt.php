<!DOCTYPE>
<html>

 <head>
    <title>
        FUNBRAIN_CLIPART
    </title>
    <meta name="viewport" content="width-device width, initial-scale=1.0">
    <link rel="stylesheet" href="kiddy.css" type="text/css">
 </head>

<body>

    <header>
       
        <div class="flex">
            <div class="logo">
                <a href="ClipArt.php">CLIPART</a>

            </div>
            <!--NAVIGATION -->
            <nav>
                <button id="nav-toggle" class="harmburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                <ul id="nav-menu-container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Activities</a></li>
                    <li><a href="#">Forums</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Logout</a></li>

                </ul>
            </nav>

        </div>
    </header>
    <main>
        <section id="hero-image">

            <div class="hero-marketing-text">
                <h1>Keep Your Brain Active</h1>
                <h3><strong> Test your skills by engaging your brain in our fun-filled educational activities. Tap into your creativity and unlock your potential by making learning fun!</strong></h3>
                <button>Read More</button>
            </div>
        </section>

        <!--NEW ACTIVITIES SECTION-->
        <section id="game-type-boxes">
            <div class="flex">
                <!--First box -->
                <div class="box letters">

                    <span class="badge math">NEW</span>
                    <div class="shade"></div>
                    <div class="contents">
                        <h4>ALPHABET</h4>
                        <p>Learn the 26 letters of Alphabet</p>
                        <a href="#" class="comments">No Comment</a>
                    </div>
                </div>
                <!--Second box --><br></br>
                <div class="box read">
                    <div class="shade"></div>
                    <span class="badge language">NEW</span>
                    <div class="contents">
                        <h4>BIRDS</h4>
                        <p>Know all the different types of birds</p>
                        <a href="#" class="comments">3 Comments</a>
                    </div>
                </div>
                <!--Third box -->
                <div class="box puzzle">
                    <div class="shade"></div>
                    <span class="badge puzzle">NEW</span>
                    <div class="contents">
                        <h4>TRANSPORTATION</h4>
                        <p>Do you know all the vehicles used in transport?</p>
                        <a href="#" class="comments">2 Comments</a>
                    </div>
                </div>
                <!--Fourth box -->
                <div class="box music">
                    <div class="shade"></div>
                    <span class="badge music">NEW</span>
                    <div class="contents">
                        <h4>TOYS</h4>
                        <p>Kick boredom away by continuosly playing with online toys</p>
                        <a href="#" class="comments">1 Comment</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Your Recent Activities-->
    </main>
    
    <?php
       require_once("footer2.php");
    ?>
</body>

</html>