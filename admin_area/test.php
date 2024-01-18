<?php
 include('../includes/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $attribute = $_POST['attribute'];
    $value = $_POST['value'];

    $insert_query = "INSERT INTO specifications (attribute, value) VALUES ('$attribute', '$value')";
    $result = mysqli_query($con, $insert_query);

    if ($result) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>

<div class="container mb-4 w-50 m-auto">
    <h2 class="mb-4">Admin Panel - Insert Data</h2>

    <form method="post" action="">
        <label for="attribute">Attribute:</label>
        <input type="text" name="attribute" required>

        <label for="value">Value:</label>
        <input type="text" name="value" required>

        <button type="submit">Insert Data</button>
    </form>
</div>

</body>
</html>