<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php>
    if (!empty($_POST["send"])) {
        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $userPhone = $_POST["userPhone"];
        $userMessage = $_POST["userMessage"];
        $toEmail = "gamaoninfo@gmail.com";


        $mailHeaders = "Name: " . $userName .
        "\r\n Email: " . $userEmail .
        "\r\n Phone: " . $userPhone .
        "\r\n Message: " . $userMessage . "\r\n";

        if (mail($toEmail, $userName, $mailHeaders)) {
            $message = "Your information is Received Successfully.";
        }
    }
    <?>
    <div class="form-container">
        <form action="" method="post" name="emailContact">
            <div class="input-row">
                <label for="">Name<em>*</em></label>
                <input type="text" name="userName" id="" required>
            </div>
            <div class="input-row">
                <label for="">Email<em>*</em></label>
                <input type="email" name="userEmail" id="" required>
            </div>
            <div class="input-row">
                <label for="">Phone<em>*</em></label>
                <input type="tel" name="userPhone" id="" required>
            </div>
            <div class="input-row">
                <label for="">Message<em>*</em></label>
                <textarea name="userMessage" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input-row">
                <input type="submit" name="send" id="" value="Submit">
                <?php if (!empty($message)) { ?>
                <div class="success">
                    <strong><?php echo $message; ?></strong>
                </div>
                <?php } ?>
            </div>
        </form>
    </div>
</body>
</html>