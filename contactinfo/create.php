
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body style="text-align: center; width: 100%; height: 100%;">
<form action="add.php" method="POST">

    <h3>Contact Information</h3>

    <label>Present Adress: </label>
    <input type="text" name="present_address" />
    <br>
    <label>Permanent Address: </label>
    <input type="text" name="permanent_address">
    <br>
    <label>District: </label>
    <select name="district">
        <option selected>Select Your District</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Jessore">Jessore</option>
        <option value="Barisal">Barisal</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Comilla">Comilla</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Other">Other</option>
    </select>
    <br>
    <label>Home Phone: </label>
    <input type="text" name="home_phone" />
    <br>
    <label>Mobile: </label>
    <input type="text" name="mobile" />
    <br>
    <label>Emergency Contact: </label>
    <input type="text" name="emergency_contact" />
    <br>
    <label>Email: </label>
    <input type="email" name="email" />
    <br>
    <label>Alternate Email: </label>
    <input type="email" name="alternative_email" />
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>