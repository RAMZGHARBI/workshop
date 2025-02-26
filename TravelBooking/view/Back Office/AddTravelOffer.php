<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Travel Offer</title>
    <link rel="stylesheet" href="styleBackOff.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        form {
            display: inline-block;
            text-align: left;
            margin-top: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color:rgb(255, 21, 122, 0.851);
            color: #333;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #FFD1DC;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 2px;
        }
        .correct {
            color: green;
            font-size: 12px;
            margin-top: 2px;
        }
    </style>
    
</head>

<body>
    <h1>Add Travel Offer</h1>
    <form id="offerForm" action="verfication.php" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required minlength="3" placeholder="Enter the title of the offer">
        <p id="title-error" class="error"></p>
        <p id="title-correct" class="correct" style="display:none;">Correct</p>

        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" placeholder="Enter the destination">
        <p id="destination-error" class="error"></p>
        <p id="destination-correct" class="correct" style="display:none;">Correct</p>

        <label for="departure-date">Departure Date:</label>
        <input type="date" id="departure-date" name="departure-date" required>
        <p id="departure-error" class="error"></p>

        <label for="return-date">Return Date:</label>
        <input type="date" id="return-date" name="return-date" required>
        <p id="return-error" class="error"></p>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required step="0.01" placeholder="Enter the price">
        <p id="price-error" class="error"></p>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="family">Family Trips</option>
            <option value="couple">Couples' Trips</option>
            <option value="adventure">Adventure and Sports Trips</option>
        </select>

        <label for="availability">Availability:</label>
        <input type="checkbox" id="availability" name="availability">


        <button type="submit">Add Offer</button>
    </form>
    <script src="addtravel2.js"></script>

</body>
</html>