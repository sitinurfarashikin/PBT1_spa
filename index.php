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

    <h4>Hour of service : Spa Treatments</h4>
    <h5>From 11:00 AM To 8:30 PM</h5>

    <h4>List of service:</h4>
    <table>

        <tr>

            <th>SPA & SALON SERVICES</th>

            <th>Price per services</th>

        </tr>

        <tr>

            <td>MASSAGES</td>

            <td>RM659</td>

        </tr>


        <h4>Additional service</h4>

        <table>

            <tr>

                <th colspan="2">Optional</th>

            </tr>

            <tr>

                <td>RETAIL</td>

                <td>RM60</td>

            </tr>

        </table>

        <br><br><br>

        <h4>Please insert form below to booking:</h4>

        <form action="function.php" method="post">

            <table>

                <tr>

                    <th>Name</th>

                    <td><input type="text" class="form-control" name="name"></td>

                </tr>

                <tr>

                    <th>Room type</th>

                    <td>

                        <select name="room" id="room" class="form-control">

                            <option value=""></option>

                            <option value="Deep Relaxing Marma">Deep Relaxing Marma</option>

                            <option value="Tradisional Balinese">Tradisional Balinese</option>

                            <option value="Tender Touch">Tender Touch</option>

                            <option value="Ayuveda Foot Massage">Ayuveda Foot Massage</option>

                        </select>

                    </td>

                </tr>

                

            </table>

            <br>

            <button id="btn" name="submit" type="submit" class="btn btn-primary">Submit</button>

        </form>

</body>

</html>