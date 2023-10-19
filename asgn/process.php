<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $pizzaCount = $_POST["pizza-count"];
    $pizzaSize = $_POST["pizza-size"];
    $pizzaShape = $_POST["shape"];
    $toppings = isset($_POST["toppings"]) ? $_POST["toppings"] : array();
    $crust = $_POST["crust"];
    $orderType = $_POST["order-type"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $notes = $_POST["notes"];

    // Display the order confirmation
    echo "<h2>Order Confirmation</h2>";
    echo "<p>Number of Pizzas: $pizzaCount</p>";
    echo "<p>Size of Pizza: $pizzaSize</p>";
    echo "<p>Shape of Pizza: $pizzaShape</p>";
    echo "<p>Toppings: " . implode(", ", $toppings) . "</p>";
    echo "<p>Crust Type: $crust</p>";
    echo "<p>Order Type: $orderType</p>";
    echo "<p>Name: $name</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Additional Notes: $notes</p>";
} else {
    echo "Invalid request. Please submit the form.";
}
?>
