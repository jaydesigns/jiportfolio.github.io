
<?php
    $title = "First project";
    $articleText1 = "Surface Laptop complements style with an Alcantara fabric-covered keyboard, PixelSense display, &amp; fast charging - in a slim, elegant, ultra-light laptop";
    $articleText2 = "Do the things you want on Surface Laptop with protection you can count on and performance that lasts,
                    with Windows 10 in S mode. ";
    $articleText3 = "Get work done with Office all day, listen to iTunes or Spotify, and unwind with your favorite shows on Netflix and Hulu.";
    $articleText4 = "The design process includes utilizing the energetic and refreshing vibes of the users without compromising the functionality and design.";
    $articleText5 = "Surface Laptop provides the blend of texture, subtle details, and clean, elegant lines—plus the luxurious touch of our Signature Alcantara &copy; material-covered keyboard.";
?>
<?php require_once( 'head.php'); ?>

<script>
    fadeAnimation();
</script>

    <div id="readingMode">
            <div id="leftPanel" style="color:#fff;">
                
            <?php require_once('nav.php'); ?>
            
            <p id="text1">
                <?php echo $articleText1; ?>
            </p>
            <p id="text2">
                <?php echo $articleText2; ?>
            </p>
            <p id="text3">
                <?php echo $articleText3; ?>
            </p>
            <p id="text4">
                <?php echo $articleText4; ?>
            </p>
            <p id="text5">
                <?php echo $articleText5; ?>
            </p>
            </div>
        <!--

            NAVIGATION

            -->
        
        
        <div id="rightPanel">
            <?php require_once('header.php'); ?>
            
            
            <div id="content">
                <div class="verse text1" style="background-image:url(img/8.jpg); background-size: cover;" >
                </div>
                
                <div class="verse text2" style="background-image:url(img/accordion_bw.jpg); background-size: cover;">
                </div>
                
                <div class="verse text3" style="background-image:url(img/surface_laptop.png); background-size: cover;">
                </div>
                
                <div class="verse text3" style="background-image:url(img/keyboard.jpg); background-size: cover;">
                </div>
                
                <div class="verse text3" style="background-image:url(img/touch.jpg); background-size: cover;">
                </div>
            </div>
        </div>
    </div>
        
    <script type="text/javascript">
        $(function() {
            $.scrollify({
                section: ".verse",
                
                before: function(section) {
                    if(section===1) {
                        $('#text1').fadeIn(1000);
                        console.log(section);
                    } if (section!==1) {
                        $('#text1').fadeOut(300);
                    } if(section===2) {
                        $('#text2').fadeIn(1000);
                        console.log(section);
                    } if (section!==2) {
                        $('#text2').fadeOut(300);
                    } if(section===3) {
                        $('#text3').fadeIn(1000);
                        console.log(section);
                    } if (section!==3) {
                        $('#text3').fadeOut(300);
                    } if(section===4) {
                        $('#text4').fadeIn(1000);
                        console.log(section);
                    } if (section!==4) {
                        $('#text4').fadeOut(300);
                    } if(section===5) {
                        $('#text5').fadeIn(1000);
                        console.log(section);
                    } if (section!==5) {
                        $('#text5').fadeOut(300);
                    }
                } 
            });
        });
    </script>    

        
    <script>
        //DROPDOWN TOGGLE
            //
            //
            $(document).ready(function(){
                $("#menuButton").click(function(){
                    var x = document.getElementById("menuButton");
                    if (x.innerHTML === "MENU") {
                        x.innerHTML = "CLOSE";
                    } else {
                        x.innerHTML = "MENU";
                    }
                    $("#dropdown-content").slideToggle(350);
                    $("#dropdown-background").slideToggle(350);
                    $("#fullName").fadeToggle(500);
                    $("#myTitle").fadeToggle(500);
                });
            });
            
            //
            //SUBMENU TOGGLE
            //
            //
            $(document).ready(function(){
                $("#workmenu").click(function(){
                    $("#submenu").slideToggle(350);
                });
            });
    </script>    
</html>