<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    /*
        echo <pre>;
        var_dump($_POST);
        echo </pre>;

        POST ARRAY DATA

            array(7) {
      ["firstName"]=>
      string(5) "Vadim"
      ["lastName"]=>
      string(5) "Balan"
      ["address"]=>
      string(17) "11229 SE 225th ST"
      ["method"]=>
      string(6) "pickup"
      ["toppings"]=>
      array(1) {
        [0]=>
        string(9) "pepperoni"
      }
      ["size"]=>
      string(5) "small"
      ["terms"]=>
      string(2) "on"
    }
    */

    require ('validation-functions.php');

    // Create a flag to track validation
    $isValid = true;

        // Get the form data
        if (validName($_POST['firstName']))
        {
            $fname = $_POST['firstName'];
        }
        else
        {
            echo "<p>First name is required</p>";
            $isValid = false;
        }

        if (validName($_POST['lastName']))
        {
            $lname = $_POST['lastName'];
        }
        else
        {
            echo "<p>Last name is required</p>";
            $isValid = false;
        }

        $address = $_POST['address'];

        if (validMethod($_POST['method']))
        {
            $method = $_POST['method'];
        }
        else
        {
            echo "<p>Go away, evildoer!</p>";
            $isValid = false;
        }
        $toppings = $_POST['toppings'];
        $toppingsString = implode(", ", $toppings);
        $size = $_POST['size'];

        if ($isValid)
        {
            // Display the form data
            echo "<h1>Thank you for your order, $fname!</h1>";
            echo "<h2>Order Summary</h2>";
            echo "<p>Name: $fname $lname</p>";
            echo "<p>Address: $address</p>";
            echo "<p>Pickup or Delivery: $method</p>";
            echo "<p>Toppings: $toppingsString</p>";
            echo "<p>Size: $size</p>";

            // Send email
            $fromAddress = "poppa@gmail.com";
            $toAddress = "vbalan@mail.greenriver.edu";
            $subject = "Order Confirmation";
            $headers = "From: Poppa's Pizza <$fromAddress>";
            $message .= "Name: $fname $lname\r\n";
            $message .= "Address: $address\r\n";
            mail($toAddress, $subject, $message, $headers);
        }

    ?>
</body>
</html>