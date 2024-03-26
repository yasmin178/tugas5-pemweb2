<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Makanan</title>
</head>
<body>
    <h2>Form Order Makanan</h2>
    <form method="post" action="order.php">
        <label for="nasi_goreng">Nasi Goreng:</label>
        <input type="number" id="nasi_goreng" name="nasi_goreng" value="0" min="0"><br><br>
        
        <label for="mie_goreng">Mie Goreng:</label>
        <input type="number" id="mie_goreng" name="mie_goreng" value="0" min="0"><br><br>
        
        <label for="ayam_goreng">Ayam Goreng:</label>
        <input type="number" id="ayam_goreng" name="ayam_goreng" value="0" min="0"><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    
</body>
</html>
