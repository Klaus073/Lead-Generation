<link rel="stylesheet" type="text/css" href="css/style.css">

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Your Website Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" type="text/css" href="/path/to/style.css">

</head>
<body>
    <div class="container">
        <div class="header">
            <span class="logo">Traveler's Paradise</span>
            <nav>
                <a href="#">Home</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </nav>
        </div>
        
        <div class="section">
            <h1>Welcome to the Traveler's Paradise</h1>
            <h2>Explore the World</h2>
            <p>Discover new horizons, embrace diverse cultures, and create unforgettable memories.</p>
        </div>

        <div class="section">
            <h2>Our Services</h2>
            <ul>
                <li>Customized Travel Packages</li>
                <li>Group and Solo Adventures</li>
                <li>Luxury Getaways</li>
            </ul>
            <p>Our team of expert travel planners will curate the perfect itinerary for your dream vacation.</p>
        </div>

        <div class="section form-container">
            <h2>Contact Us</h2>
            <form action="submit_form.php" method="post">
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" required>

                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname" required>

                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" required>

                <label for="zipcode">Zip Code:</label>
                <input type="text" name="zipcode" id="zipcode" required>

                <label for="option">Select Option:</label>
                <select name="option" id="option">
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>

                <label for="accept">I accept the terms and conditions:</label>
                <input type="checkbox" name="accept" id="accept" required>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
