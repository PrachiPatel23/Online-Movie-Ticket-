<?php
include("header.php");
include("conn.php");

if (isset($_POST["btn_submit"])) {
    $name = $_POST["reg_full_name"]; 
    $email = $_POST["reg_email"]; 
    $no = $_POST["reg_number_txt"]; 
    $messg = $_POST["message"]; 

    // Corrected SQL query syntax by adding closing parenthesis
    $sql = "INSERT INTO contact VALUES (0, '$name', '$email', '$no', '$messg', NOW())";
    $con = new connec();
    $con->insert($sql); 
}
?>
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<section style="min-height:450px;">
    <div class="container" style="color:maroon;">
        <div class="col-md-12">
            <center>
                <h1>Contact Us</h1>
                <h5>GET IN TOUCH</h5>
                <p>
                    We'd love to talk about how we can work together.
                    Send us a message below and we'll respond as soon as possible.
                </p>
            </center>
        </div>
        <div class="row">
            <div class="col-md-6 mt-5 mb-5" style="border-radius:30px;background-color:maroon">
                <h2 class="mt-5 pl-5">Contact Information</h2>
                <p class="mt-1 pl-5">
                    Our team will get back to you within 24 hours.
                </p>

                <p class="mt-5"><span class="material-symbols-outlined"></span>&nbsp; +92 300 - 1234567</p>
                <p class="mt-3"><i class="fa fa-envelope fa-2x mt-3"></i>&nbsp; movieticket@live.com</p>
                <p class="mt-3"><i class="fa fa-map-marker fa-2x mt-3"></i>&nbsp; movieticket@live.com</p>


                <h2 class="mt-5 pl-5">Join Us</h2>
                <div class="mb-5">
                    <a href="#" class="mt-5 mb-5" style="color:white;"><i
                            class="fab fa-facebook-square fa-2x mt-3"></i></a>
                    <a href="#" class="mt-5 ml-3 mb-5" style="color:white;"><i
                            class="fab fa-twitter-square fa-2x mt-3"></i></a>
                    <a href="#" class="mt-5 ml-3 mb-5" style="color:white;"><i
                            class="fab fa-instagram fa-2x mt-3"></i></a>
                    <a href="#" class="mt-5 ml-3 mb-5" style="color:white;"><i
                            class="fab fa-Linkedin-square fa-2x mt-3"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <form method="post">
                    <div class="container" style="color:maroon;">
                        <hr>

                        <label for="username"><b>Your Name</b></label>
                        <input type="text" style="border-radius:30px;" placeholder="Enter Your Name"
                            name="reg_full_name" id="username" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" style="border-radius:30px;" placeholder="Enter Email" name="reg_email"
                            id="email" required>

                        <label for="number"><b>Number</b></label>
                        <input type="tel" style="border-radius:30px;" placeholder="Enter number" name="reg_number_txt"
                            id="number" required>

                        <label for="message"><b>Message</b></label>
                        <textarea name="message" id="message" rows="4"
                            style="resize:none;width:100%;border-radius:30px;"></textarea>

                        <button type="submit" name="btn_submit" class="btn" style="background-color:maroon;color:white">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>