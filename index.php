<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Spa Syafiqa & Farashikin</title>
</head>

<body>
    <fieldset id="intro1">
        <div>
            <h1>Welcome To Spa And Wellness</h1>
            <h4>FOUR SEASONS PLACE, 145 JALAN AMPANG, 50450 KUALA LUMPUR, MALAYSIA</h4>
            <h5>Combining cutting-edge treatments with Malaysian traditions,
                our spa delivers natural healing that draws on the best of both worlds.</h5>
        </div>
    </fieldset>
    <br>
    <fieldset>
        <center>
            <h1>Open Hours</h1>
            <h4>SPA TREATMENTS 11:00 AM till 8:30 PM</h4>
        </center>
    </fieldset>
    <br>
    <fieldset>
        <center>
            <form id="bookService" method="post" action="result.php">
                <h1>SPA SERVICES</h1>
                <table class="center">
                    <tr>
                        <td>
                            <input type="radio" name="rad" id="rad1" value="MASSAGE">
                            MASSAGE - MYR 295 FOR 30 MINUTES
                        </td>
                        <td>
                            <input type="radio" name="rad" id="rad2" value="FACIALS">
                            FACIALS - MYR 615 FOR 60 MINUTES
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="rad" id="rad3" value="SKINCARE">
                            SKINCARE - MYR 305 FOR 15 MINUTES
                        </td>
                        <td>
                            <input type="radio" name="rad" id="rad4" value="BODY RENEWAL">
                            BODY RENEWAL - MYR 405 FOR 60 MINUTES
                        </td>
                    </tr>
                </table>

                <h1>ADDITIONAL</h1>
                <table>
                    <tr>
                        <label>If you want additional services from us, please list them below.</label>
                    </tr>
                    <tr>
                        <td>
                            <label>MASSAGE</label>
                        </td>
                        <td>
                            <input type="checkbox" name="cb1" value="555" id="cb1">
                            <label>DEEP RELAXING MARMA - MYR 555 FOR 60 MINUTES</label><br>
                            <input type="checkbox" name="cb2" value="295" id="cb2">
                            <label>AYURVEDA FOOT MASSAGE - MYR 295 FOR 30 MINUTES</label><br>
                            <input type="checkbox" name="cb3" value="295" id="cb3">
                            <label>UPPER BACK - MYR 295 FOR 30 MINUTES</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>FACIAL</label>
                        </td>
                        <td>
                            <input type="checkbox" name="cb4" value="635" id="cb4">
                            <label>24-CARAT GOLD FACIAL - MYR 635 60 MINUTES</label><br>
                            <input type="checkbox" name="cb5" value="615" id="cb5">
                            <label>HYDRATING FACIAL - MYR 615 60 MINUTES</label><br>
                            <input type="checkbox" name="cb6" value="695" id="cb6">
                            <label>SHAPING & LIFTING MESO BT-LIFT - MYR 695 FOR 90 MINUTES</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>SKINCARE</label>
                        </td>
                        <td>
                            <input type="checkbox" name="cb7" value="655" id="cb7">
                            <label>ANTI-AGING MESO FILLER - MYR 655 FOR 90 MINUTES</label><br>
                            <input type="checkbox" name="cb8" value="655" id="cb8">
                            <label>MESO BRIGHT - MYR 655 FOR 90 MINUTES</label><br>
                            <input type="checkbox" name="cb9" value="305" id="cb9">
                            <label>BODY SHAPING MESO SLIM - MYR 305 15 MINUTES</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>BODY RENEWAL</label>
                        </td>
                        <td>
                            <input type="checkbox" name="cb10" value="305" id="cb10">
                            <label>GEMO THERMAL SALT BODY POLISH - MYR 305 FOR 60 MINUTES</label><br>
                            <input type="checkbox" name="cb11" value="415" id="cb11">
                            <label>ANTIOXIDANT DETOX BODY WRAP - MYR 415 FOR 60 MINUTES</label><br>
                            <input type="checkbox" name="cb12" value="210" id="cb12">
                            <label>DETOX BODY WRAP - MYR 210 FOR 60 MINUTES</label><br>
                        </td>
                    </tr>
                </table>
                <tr>
                    <td colspan="6">
                        <button type="reset">Reset</button>
                        <button type="submit">Reserve</button>
                    </td>
                </tr>
            </form>
    </fieldset>
    </center>

</body>

</html>