<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Syafiqa & Farashikin</title>
</head>

<body>
    <h1>Welcome To Spa And Wellness</h1>
    <h4>FOUR SEASONS PLACE, 145 JALAN AMPANG, 50450 KUALA LUMPUR, MALAYSIA</h4>

    <form action="function.php" method="post">

        <label>First Name:</label>
        <input type="text" for="fname" name="fname" id="fname"><br><br>

        <label>Last Name:</label>
        <input type="text" for="lname" name="lname" id="lname"><br><br>

        <label>Age:</label>
        <input type="number" for="age" name="age" id="age"><br><br>

        <label>Gender:</label>
        <input type="radio" for="Jantina" name="jantina" value="female" id="female">
        <label>Female</label>
        <input type="radio" for="Jantina" name="jantina" value="male" id="male">
        <label>Male</label><br><br>

        <label>Address:</label>
        <textarea id="address" name="address" rows="4" cols="40"></textarea><br><br>

        <label>Email:</label>
        <input type="text" for="email" name="email" id="email"><br><br>

        <label>Number telephone:</label>
        <input type="text" for="notelefon" name="notelefon" id="notelefon"><br><br>

        <label>Spa & Salon Services:</label>
        <select id="services" name="services">
            <option value=""></option>
            <option value="massage">MASSAGES</option>
            <option value="bodyrenewal">BODY RENEWAL</option>
            <option value="facials">FACIALS</option>
            <option value="skincare">SKINCARE</option>
        </select><br><br>

        <label>Retails:</label>
        <input type="checkbox" for="skills" name="micellar" value="micellar" id="micellar">
        <label>CLEANSING MICELLAR WATER 200ML</label>

        <input type="checkbox" for="skills" name="cleansing" value="cleansing" id="cleansing">
        <label>DELICATE CLEANSING MILK 250ML</label>

        <input type="checkbox" for="skills" name="moisturizing" value="moisturizing" id="moisturizing">
        <label>PH MOISTURIZING BOOSTER 30ML</label>

        <input type="checkbox" for="skills" name="eyecream" value="eyecream" id="eyecream">
        <label>SOOTHING EYE CREAM 15ML</label>

        <input type="checkbox" for="skills" name="spf" value="spf" id="spf">
        <label>PROTECTIVE CREAM SPF 50+ "BLUE LIGHT TECHNOLOGY"</label> <br><br>

        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>