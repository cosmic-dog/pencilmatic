<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencilmatic - Vinyl art graphics services</title>
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <div id="main">
        <p class="csoon">Full version website is coming soon</p>
        <img id="logo" src="images/logo-big.png" alt="Pencilamtic logo">
        <h1>Vinyl art graphics services</h1>
        
        <p>Small independent design studio specializing in vinyl art graphics services for individuals and businesses.<br class="hide-br">
        We are a friends run company making beautiful vinyl graphics designed in our small studio in Bristol.</br>
        Proudly produced in the UK.</p>
        
        <ul class="icon-links">
            <li>
                <a href="https://www.etsy.com/uk/shop/PencilmaticDecals" target="_blank">
                    <span>Nunc quis ultricies metus. Integer in tempor tortor. Aenean at urna sollicitudin, ornare mauris</span>
                    <img src="images/etsy.png" alt="Etsy">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/pencilmatic/" target="_blank">
                    <span>Nunc quis ultricies metus. Integer in tempor tortor. Aenean at urna sollicitudin, ornare mauris</span>
                    <img src="images/instagram.png" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://www.etsy.com/uk/shop/Pencilmatic" target="_blank">
                    <span>Nunc quis ultricies metus. Integer in tempor tortor. Aenean at urna sollicitudin, ornare mauris</span>
                    <img src="images/etsy.png" alt="Etsy">
                </a>
            </li>
        </ul>

        <p>
            If your design requires a more bespoke touch, simply email us with your question or idea <br>and we will get back to you as soon as we can.
            <span class="dblock">
                <a href="mailto:pencilmatic@gmail.com">pencilmatic@gmail.com</a> or by form below
            </span>
        </p>
        

        <?php if (isset($_GET['email-sent'])) : ?>
            <h2 id="form-response">Thank you!</h2>
            <p>Your message has been successfully sent. We will contact you very soon.</p>
        <?php elseif (isset($_GET['email-error'])) : ?>
            <h2 id="form-response">Oops!</h2>
            <p><?php echo $_GET['email-error'] ?></p>
        <?php else : ?>
            <form action="email/index.php" method="POST" onsubmit="formSubmit(event)">
                <h2>Contact Us</h2>
                <div class="form-row">
                    <input type="email" name="email"  id="email-field" onchange="updateField(this)" value="">
                    <label for="email" id="email-label" data-invalid="Email can't be blank" data-valid="Email">Email</label>
                </div>
                <div class="form-row">
                    <input type="text" name="message"  id="message-field" onchange="updateField(this)" value="">
                    <label for="message" id="message-label" data-invalid="Message can't be blank" data-valid="Message">Message</label>
                </div>
                <div class="form-row-btn">
                    <button>Send</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
    <script src="assets/main.js"></script>
</body>
</html>