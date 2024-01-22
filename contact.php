<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.7.0/remixicon.css">

    <!-- stylesheets -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>

    <!-- BODY -->
    <?php include "includes/header.php"; ?>

    <div class="contact">
        <div class="cotainer contact-container">
            <div class="contact-left">
                <h3>Direct Contact</h3>
                <a href="mailto:patelzaid721@gmail.com"><i class="ri-mail-line"></i> Email: patelzaid721@gmail.com</a> <br> <br>
                <a href="tel:799022947"><i class="ri-phone-line"></i> Phone: 799225947</a>
            </div>

            <div class="contact-right">
                <div class="contact-form">
                    <h3>Contact Me</h3>
                    <div class="contact-err">
                        <div class="contact-err-icon">
                            <i class="ri-warning-line"></i>
                        </div>
                        <span class="contact-err-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, soluta cum. In ullam accusantium cupiditate quis non illum ratione voluptate!</span>
                    </div>
                    <div class="field field-email">
                        <input type="text" id="_email" class="inp" autocapitalize="off" autofocus>
                        <label for="_email">Email Address (*)</label>
                        <div class="err"></div>
                    </div>
                    <div class="field field-email">
                        <input type="text" id="_sub" class="inp">
                        <label for="_sub">Purpose Of Contacting (*)</label>
                        <div class="err"></div>
                    </div>
                    <div class="field field-email">
                        <textarea rows="2" id="_des" class="inp"></textarea>
                        <label for="_des">Describe In Detail Heare</label>
                        <div class="err"></div>
                    </div>
                    <button class="btn btn-submit-form">Continue</button>
                </div>
            </div>

            <div class="contact-loader">
                <i class="ri-loader-4-line"></i>
            </div>
        </div>

    </div>

    <!-- SCRIPTS -->
    <script src="./contact.js"></script>

</body>

</html>