<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <style>
        body {
            font: 1em sans-serif;
            text-align: center;
        }
    </style>
    <script>
        function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function kiki() {
        var x = document.getElementById("dvivi");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>
</head>
<body>
<nav>
    <a href="/">Home</a>
    <a href="faq.php">FAQ</a>
    <a href="about.php">About</a>
    <a href="contactme.php">Contact Me</a>
    <a href="support.php">Support</a>
    <a href="profile.php">Profile</a>
</nav>
    <h1>Contact Page</h1>
    <h2>You can Contact me through this Systems: </h2>
    <p>Linkedin: <a href="https://www.linkedin.com/in/nir-shakibi-715135208/">Link</a></p>
    <p>Instagram: <a href="https://instagram.com/nir_shakibi">Insta</a></p>
    <p>Github: <a href="https://github.com/nirsha123">Here</a></p>
    <div id="myDIV" class="toshow" style="display:none">nirshakibi123@outlook.co.il</div>
    <div id="dvivi" class="toshow" style="display:none"><p>Email: <button onclick="myFunction()">Click Here.</button></p></div>
    <div>are you sure you want to send me an email? <button onclick="kiki()">Yes.</button></div>
</body>
</html>