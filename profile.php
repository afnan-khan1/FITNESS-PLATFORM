<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Additional Information</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Complete Your Profile</h2>
    <form action="/submit_additional_info" method="POST">
        <table>
            <tr>
                <th>Field</th>
                <th>Input</th>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="tel" name="phone"></td>
            </tr>
            <tr>
                <td>Preferred Genre</td>
                <td>
                    <select name="genre" required>
                        <option value="">Select a genre</option>
                        <option value="fiction">Fiction</option>
                        <option value="non-fiction">Non-fiction</option>
                        <option value="sci-fi">Sci-Fi</option>
                        <option value="fantasy">Fantasy</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Favorite Authors</td>
                <td><input type="text" name="favorite_authors"></td>
            </tr>
            <tr>
                <td>Subscription Plan</td>
                <td>
                    <input type="radio" id="basic" name="subscription_plan" value="basic">
                    <label for="basic">Basic</label><br>
                    <input type="radio" id="premium" name="subscription_plan" value="premium">
                    <label for="premium">Premium</label>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
