<!DOCTYPE html>
<html>

<head>
    <title>NTP Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h3>Add Patient NTP Form</h3>
        <form method="post" action="process_form.php">
            <label>Last Name:</label>
            <input type="text" name="last_name" placeholder="Last Name...." required> <br>

            <label>First Name:</label>
            <input type="text" name="first_name" placeholder="First Name...." required> <br>

            <label>Middle Name:</label>
            <input type="text" name="middle_name" placeholder="Middle Name...." required> <br>

            <label>Birthday:</label>
            <div class="date-select">
                <select name="month" required>
                    <option value="Month" hidden>Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select name="day" required>
                    <option value="Day" hidden>Day</option>
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        printf('<option value="%02d">%02d</option>', $i, $i);
                    }
                    ?>
                </select>
                <select name="year" required>
                    <option value="Year" hidden>Year</option>
                    <?php
                    $current_year = date("Y");
                    for ($i = $current_year; $i >= 1900; $i--) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div> <br>

            <label>Address:</label>
            <input type="text" name="address" placeholder="Address...." required> <br>

            <label>Occupation:</label>
            <input type="text" name="occupation" placeholder="Occupation...." required> <br>


            <h3> VITAL SIGNS</h3>
            <div class="vital-signs-container">
                <label>BP:</label>
                <input type="number" name="bp" placeholder="Blood Pressure....">

                <label>HR:</label>
                <input type="number" name="hr" placeholder="Heart Rate....">

                <label>RR:</label>
                <input type="number" name="rr" placeholder="Respiratory Rate....">

                <label>T:</label>
                <input type="number" name="temperature" placeholder="Temperature....">

                <label>W:</label>
                <input type="number" name="weight" placeholder="Weight....">
            </div>


            <div class="checklist-container">
                <h3 class="checklist-title">CHECKLIST OF UNKNOWN</h3>
                <div class="checklist-row">
                    <div class="checkbox-group">
                        <input type="checkbox" name="checklist1" value="Cough 2 weeks"> Cough 2 weeks
                        <input type="checkbox" name="checklist2" value="Fever"> Fever
                        <input type="checkbox" name="checklist3" value="Unknown"> Weight Loss
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" name="checklist4" value="Lost of unknown"> Loss of unknown
                        <input type="checkbox" name="checklist5" value="Unknown"> Unknown
                        <input type="checkbox" name="checklist6" value="Unknown"> Unknown
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" name="checklist7" value="Lost of unknown"> Loss of unknown
                        <input type="checkbox" name="checklist8" value="Unknown"> Unknown
                        <input type="checkbox" name="checklist9" value="Unknown"> Unknown
                    </div>
                </div>
            </div>

            <h3>MEDICINES TAKEN DURATION </h3>
            <textarea name="" id="" placeholder="Medicines Taken Duration...." cols="50" rows="4"></textarea>


            <h3>MEDICAL HISTORY</h3>
            <input type="checkbox" name="medical_history[]" value="Unknown 1"> Unknown 1
            <input type="checkbox" name="medical_history[]" value="Unknown 2"> Unknown 2
            <input type="checkbox" name="medical_history[]" value="Unknown 3"> Unknown 3
            <input type="checkbox" name="medical_history[]" value="Unknown 4"> Unknown 4
            <input type="checkbox" name="medical_history[]" value="Unknown"> Unknown
            <input type="checkbox" name="medical_history[]" value="Allergy"> Allergy <br><br>
            <label>If not please specify:</label>
            <textarea name="unknown_name" placeholder="Please specify...." rows="4" cols="50"></textarea>
            <label>Other:</label>
            <textarea name="medical_history_additional" placeholder="Other...." rows="4" cols="50"></textarea>

            <h3>PERSONAL HISTORY </h3>
            <input type="checkbox" name="smoking" value="Cigarette Smoking"> Cigarette Smoking
            <input type="checkbox" name="alcohol" value="Alcohol"> Alcohol
            <input type="checkbox" name="alcohol_frequency[]" value="Once a month"> Once a month
            <input type="checkbox" name="alcohol_frequency[]" value="Pack years"> Pack years
            <input type="checkbox" name="alcohol_frequency[]" value="1-2 weeks"> 1-2 weeks

            <h3>LABORATORY EXAMS</h3>
            <input type="checkbox" name="lab_exam[]" value="Unknown"> Unknown
            <input type="checkbox" name="lab_exam[]" value="For X-ray"> For X-ray
            <input type="checkbox" name="lab_exam[]" value="For NTF Consult"> For NTF Consult

            <h3>RECOMMENDATION</h3>
            <textarea name="recommendation" rows="4" cols="50" placeholder="Recommendation...."></textarea>
            <input type="submit" value="Add Patient">
        </form>
    </div>

</body>

</html>