<?php 
     
     include("connect.php");       
        

    if (isset($_POST['enq_submit'])){
        $firstname = $_POST['enq_name'];
        $mi = $_POST['enq_mi'];
        $lastname = $_POST['enq_lname'];
        $email = $_POST['enq_email'];
        
        $sql = "INSERT INTO applicants (firstname, mi, lastname, email) 
                VALUES ('$firstname', '$mi', '$lastname', '$email')";
        if (mysqli_query($con, $sql));
        
        
        $emailID = "effx04@yahoo.com, essex.finneyjr@gmail.com";
        $subject = "Payroll Deduction Request from $firstname $lastname";
$body = <<<EOD
        <style>
        #prdeduction  {
            float: left;
            position: absolute;
            font-family: arial, helvetica, sans-serif;
            font-size: .8em;
            text-align: center;            
            width: 660px;
            margin: 20px 0px 0px 50px;
            padding: 20px 5px 10px 5px;
        }
        #prdeduction p {
            text-align: left;
        }
        #prdeduction p.input {
            text-align: center;
        }
        #prdeduction img {
            float: left;
            position: absolute;
            margin: -35px 0px 0px -300px;
        }
        #sign{
            color: #ff0000;
            font-weight: bold;
        }
        </style> 
        <link rel="icon" type="image/png" href="../../favicon.ico"/>
    </head>
    <body>
          
            <div id="prdeduction">   
                    
            <h3>Payroll Deduction Authorization Form</h3>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payroll deduction will not start until next physical year please pay for this year now
            <h4>Fraternal Order of Police Lodge #9</h4>
          
            <p>I understand that by signing this payroll deduction form I am agreeing to have a weekly deduction from my pay check as assigned by the
            Charlotte-Mecklenburg Fraternal Order of Police Lodge #9. My signature below authorizes the deduction to be taken until I send a
            cancellation request.
            It is my responsibility to notify the Charlotte-Mecklenburg Fraternal Order of Police Lodge #9 if I terminate my payroll deduction or do not
            have enough pay for the deduction to be taken from my pay check.</p>
            
            Electronic Signature: <p class="input">Firstname:<input type="text" name="fname" value="$firstname" size="20"/>
            M.I.  <input type="text" name="mi" value="$middlie_initial" size="2"/>
            Lastname  <input type="text" name="lname" value="$lastname" size="20"/>
            Sr, Jr, III  <input type="text" name="suffix" value="$suffix" size="2"/></p>
            Employee Number: <input type="text" name="empnum" value="$empnum" size="10" /> 
            Department: <input type="text" name="dept" value="$dept" size="20"/> Work Phone <input type="text" name="wphone" value="$wphone" size="10"/><br/><br/>
            <p>Deduction Code: UNION1</p> 
            <p id="sign">Completing the this form by entering your full name, constitutes you agree to all terms of membership
                    in the Fraternal Order of Police </p>
            
            </div>
                
    </body>
EOD;
    
        $headers = "From: ncfopl9@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
        
        mail($emailID, $subject, $body, $headers );
        echo "<h4>Thank you for sending us an enquiry. We will get back to you.</h4>";
        
    } else {
        echo("Kindly use the form to submit the data!");
    };
?>