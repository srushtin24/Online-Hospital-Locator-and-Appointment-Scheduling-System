<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="04z_book_app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Book Appointment</h1>
            <form action="05_connect.php" method="post">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="contact" id="contact" placeholder="Contact" required>

                    </div>

                    <select class="input-field" id="speciality" name="speciality" required>
                        <option value="Speciality">Speciality</option>
                        <option value="Ayurvedic">Ayurvedic</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Dental">Dental</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Diabetology">Diabetology</option>
                        <option value="ENT">ENT</option>
                        <option value="Gastroenterology">Gastroenterology</option>
                        <option value="General Physician">General Physician</option>
                        <option value="Gynacologist">Gynacologist</option>
                        <option value="Multispeciality">Multispeciality</option>
                        <option value="Nephrology">Nephrology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Oncology(Cancer)">Oncology(Cancer)</option>
                        <option value="Orthopaedics">Orthopaedics</option>
                        <option value="Paediatrics">Paediatrics</option>

                    </select>

                    <input type="date" class="input-field" id="date" name="date" required>

                    <select class="input-field" id="slots" name="slots" required>
                        <option value="Time">Time</option>
                        <option value="08:00 AM">08:00 AM</option>
                        <option value="08:30 AM">08:30 AM</option>
                        <option value="09:00 AM">09:00 AM</option>
                        <option value="09:30 AM">09:30 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="10:30 AM">10:30 AM</option>
                        <option value="01:00 PM">01:00 PM</option>
                        <option value="01:30 PM">01:30 PM</option>
                        <option value="02:00 PM">02:00 PM</option>
                        <option value="02:30 PM">02:30 PM</option>
                        <option value="03:00 PM">03:00 PM</option>
                        <option value="03:30 PM">03:30 PM</option>
                        <option value="04:00 PM">04:00 PM</option>
                        <option value="04:30 PM">04:30 PM</option>
                        <option value="05:00 PM">05:00 PM</option>
                        <option value="05:30 PM">05:30 PM</option>
                        <option value="07:00 PM">07:00 PM</option>
                        <option value="07:30 PM">07:30 PM</option>
                        <option value="08:00 PM">08:00 PM</option>
                        <option value="08:30 PM">08:30 PM</option>
                        <option value="09:00 PM">09:00 PM</option>
                        <option value="09:30 PM">09:30 PM</option>

                    </select>

                    <input class="input-field" type="submit" id="book" value="Book Appointment">
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>