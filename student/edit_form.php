

<?php
include "../dbcontroller.php";
$id = $_GET['id'];

$sql = "SELECT * FROM course";

$result = $conn->query($sql);

$sql = "SELECT * from student WHERE Sid='$id'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	?>


?>
<html>
<?php
include "../header.php";

?>

<body>
    <?php
    include "../nav.php";

    ?>

    <h2>Edit Form</h2>


    <div class="card w-25 mx-auto py-3">
        <form action="edit.php" method="post" class="px-3">
            <div class="form-group">
                <label for="inputEmail3" class="d-block">Name</label>

                <input type="text" id="inputEmail3" class="form-control" name="name" placeholder="Name" value='<?= $row['name'] ?>'>
            </div>
            <div class="form-group">

                <label for="gender">Gender</label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" id="gridRadios1" value="Male"  <?php if ($row['gender'] == "Male")
							echo "checked" ?>>
                    <label class="form-check-label" for="gridRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" id="gridRadios2" value="Female"  <?php if ($row['gender'] == "Female")
							echo "checked" ?>>
                    <label for="gridRadios2" class="form-check-label">
                        Female
                    </label>
                </div>
                <div class="form-check form-check-inline">

                    <input type="radio" class="form-check-input" name="gender" id="gridRadios3" value="Other"  <?php if ($row['gender'] == "Other")
							echo "checked" ?>>
                    <label for="gridRadios3" class="form-check-label">
                        Other
                    </label>
                </div>
            </div>
           
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="country" id="country" class="form-control">
                        <option>---Select Country---</option>

						<?php
						$country_options = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

						foreach ($country_options as $option) {
							if ($row['country'] == $option) {
								echo "<option value='$option' selected>$option</option>";
							} else {
								echo "<option value='$option'>$option</option>";
							}
						}
						?>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="inputPassword3" class="d-block">City</label>

                    <input type="text" id="inputPassword3" class="form-control" name="city" value='<?= $row['city'] ?>' placeholder="City">
                </div>
           
     
			<input type="hidden" name='id' value='<?= $row['Sid'] ?>' hidden>

            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>

        </form>




    </div>
    <?php
}
    include "../footer.php";

    ?>
</body>


</html>