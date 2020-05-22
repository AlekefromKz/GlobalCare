<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Care - Legal Information</title>
    <link rel="stylesheet" href="<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet"">
    <link rel="stylesheet" href="css/sample.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>
    <div class="container">
        <header>
            <a class="logo" href="../index.php"><img src="../images/logo5.png" alt="logotype" class="new-logo"> </a>
            <input type="text" class="input input-address" placeholder="Search">
            <?php 
            if(!isset($_COOKIE['name']))
            { ?>
            <div class="buttons">
                <!-- ctrl / -->
                <button class="button button-primary" id="login-button">
                    <img src="../images/user.svg" alt="Log in" class="button-icon">
                    <span class="button-text">Log in</span>
                </button>
                <button class="button button-primary"  id="register-button">
                    <img src="../images/user.svg" class="button-icon"alt="Register">
                    <span class="button-text">Register</span>
                </button>
            </div>

            <?php
            } 
            else{ ?>
            <span class="welcome-message"><?php echo $_COOKIE['name'] . " " . $_COOKIE['surname'];?></span>
            <div class="buttons">
                <a href="../php/logout.php">
                    <button class="button button-primary"  id="register-button">
                    <img src="../images/user.svg" class="button-icon"alt="Register">
                    <span class="button-text">Log out</span>
                    </button>
                </a>
            </div>
            <?php } ?>
    
        </header>

        <div class="main">
            <section class="promo">
                <h1 class="promo-title">Global Care - Insruance<br>Legal Information</h1>
                <p class="promo-text">Agree to our legal information in order to buy product from GlobalCare!</p>
            </section>
        <p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family: "Times New Roman", serif; font-size: 24px;'>GENERAL TERMS AND CONDITIONS OF INSURANCE CONTRACTS GlobalCare</span><span style='font-family: "Times New Roman", serif; font-size: 30px;'> </span></p>
<div style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:0in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'>
    <p><span style='line-height:107%;font-family:"Times New Roman",serif;font-size:33px;'>&nbsp; &nbsp; &nbsp;1.Introduction&nbsp;</span></p>
</div>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>1.1. The general terms and conditions of insurance contracts of GLOBALCARE Insurance SE regulate relationships between GlobalCare Insurance SE and the customer.</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>1.2. The general terms and conditions of insurance contracts specify the definitions used in insurance contracts and word the rights and obligations of GLOBALCARE Life Insurance SE and the customer upon entering into and performing the contract. GLOBALCARE Insurance SE also applies the general terms and conditions of insurance contracts to motor insurance contracts insofar as the general terms and conditions are not inconsistent with the Motor Insurance Act.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>1.3. The general terms and conditions of insurance contracts are an integral part of the insurance contract to be entered into between the insurer and the policyholder.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:33px;line-height:107%;font-family:"Times New Roman",serif;'>2. Definitions&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insurer is GLOBALCARE Insurance SE.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Policyholder is the person who has an insurable interest and who has entered into an insurance contract with the insurer.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Customer (policyholder, insured person, beneficiary, injured party) is the person to whom the insurer provides the insurance service or who has contacted the insurer with such a request.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Customer data are any information, incl. personal data that the insurer knows about the customer.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Personal data are the data of a natural person who has been or will be identified. Controller of personal data is the insurer, processors are the persons appointed by the insurer.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insurance contract documents are the policy, general terms and conditions of insurance contracts, terms and conditions of the selected class of insurance, application for entry into an insurance contract and other documents referred to in the insurance contract.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insurance offer is the proposal made by the insurer to enter into an insurance contract.</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insurance contract is an agreement to be entered into between the policyholder and insurer. Upon an insured event, the insurer undertakes to indemnify damage resulting from an insured event or pay an agreed sum of money or perform the contract in any other agreed manner. The policyholder undertakes to pay insurance premiums.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Fixed-term insurance contract is a contract that expires upon the expiry of the insurance period.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Indefinite-term insurance contract is in effect until cancellation thereof.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Terms and conditions of insurance are the terms and conditions that the insurer applies to a specific insurance relationship. Terms and conditions of insurance are deemed to include these general terms and conditions, the terms and conditions of each insurance class as well as risk and special terms and conditions.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Policy or insurance policy is a document issued by the insurer and certifying the entry into the insurance contract.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Payment notice is the message sent by the insurer to remind the due date for payment of insurance premium.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insured person or the insured is a person the insured risk related to whom is insured. It is presumed that the insured risk related to the policyholder is insured.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Beneficiary is the person specified in the insurance contract who has the right to receive the indemnity arising from the insurance contract in the case of an insured event.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insured item or insured object is an item the risk related to which is insured.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insured risk is a threat against which insurance is made.</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insurance period is the period of time based on which insurance premiums are calculated. The duration of an insurance period is one year unless otherwise agreed.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Place of insurance or territory of insurance is the region or area where the insurance contract is in effect.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insured event is an unexpected and unforeseen event upon the occurrence of which the insurer has to perform its obligation arising from the contract.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insurance indemnity is the amount that the insurer pays to indemnify for damage resulting from an insured event. Insurance indemnity may also be the replacement or restoration of the insured item.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Deductible is the agreed amount by which the indemnity payable by the insurer is reduced. Deductible applies to each insured event unless otherwise agreed.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Insurable value is the value of insurable interest at the time of occurrence of an insured event.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Sum insured or limit of indemnity is the maximum amount to be paid per insured event.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&bull; Financial sanction is an international sanction that hinders the use and disposal of funds and economic resources of customers (i.e. subjects of the financial sanction) in full or in part. For the purposes of these terms and conditions, financial sanction or international sanction means sanctions established by the Government of the Republic, United Nations, European Union, Great Britain or United States of America.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:33px;line-height:107%;font-family:"Times New Roman",serif;'>3. Existence of insurable interest&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>3.1. Insurable interest is the interest of the policyholder in insuring themselves against a specific risk.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>3.2. Before entry into an insurance contract and, if necessary, also before amending a contract that has been entered into, the insurer finds out the customer&rsquo;s insurable interest and requests for an insurance contract, recommends an insurance contract that corresponds the best to the customer&rsquo;s insurable interest and requests, and provides the customer with adequate explanations in order for the customer to make an informed decision about entry into an insurance contract.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>3.3. If the policyholder has no insurable interest, the insurer has the right to refuse to enter into the contract. If the lack of the policyholder&rsquo;s insurable interest becomes clear during processing an insured event and the person who has the actual insurable interest does not agree that the policyholder receives the indemnity, the insurer is released from the obligation to perform the insurance contract.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-size:33px;line-height:107%;font-family:"Times New Roman",serif;'>4. Customer identification, representation and entry into an insurance contract&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>4.1. The insurer has the right to request that the customer or their representative present an identity document or a document certifying the right of representation in order to identify the person or certify the right of representation, and to make copies thereof.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:.0001pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>4.2. If the insurer has any doubts about the identity of the person or accuracy of the submitted documents, the insurer has the right not to conclude the transaction or to request that additional documents be submitted.&nbsp;</span></p>
<p style='margin-top:0in;margin-right:0in;margin-bottom:8.0pt;margin-left:.5in;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>4.3. Customer identification principles have been explained in more detail in the customer data processing principles (www.GlobalCare.ee). The insurer accepts an unattested authorisation document if it has been drawn up in the presence of the insurer&rsquo;s representative. In any other events the authorisation document certifying the right of representation must be digitally signed or notarially authenticated.</span></p>
<p><br></p>
        <footer class="footer">
            <div class="container">
                <div class="footer-block">
                    <img class="footer-logo" src="../images/logo5.png" alt="logo">
                    <nav class="footer-nav">
                        <a href="" class="footer-link">Partnership</a>
                        <a href="awards.php" class="footer-link">Awards</a>
                        <a href="offices.php" class="footer-link">Offices</a>
                        <a href="contacts.php" class="footer-link">Contacts</a>
                    </nav>
                    <div class="social-links">
                        <a class="social-link" href="#"><img src="../images/inst.svg" alt="instagram"></a>
                        <a class="social-link" href="#"><img src="../images/face.svg" alt="facebook"></a>
                        <a class="social-link" href="#"><img src="../images/vk.svg" alt="vk"></a>
                    </div>
                </div>
            </div>
        </footer>

        <div class="register">
            <div class="register-dialog">
                <div class="login-close-b">
                <button class="register-close">&times;</button>
                </div>
                <div class="login-form">
                    <form id="login-form-process" action="../php/register.php" method="POST">
                            <p><input type="text" placeholder="First name" name="fname" ></p>
                            <p><input type="text" placeholder="Last name" name="lname" ></p>
                            <p><input type="email" placeholder="Email" name="email" ></p>
                            <p><input type="password" placeholder="Password" name="password"></p>
                            <p><input type="submit" value = "Register" name="register"></p>
                    </form>
                </div>
            </div>
        </div>

        <div class="login">
            <div class="login-dialog">
                <div class="login-close-b">
                    <button class="login-close">&times;</button>
                </div>
                <div class="login-form">
                    <form id="login-form-process" action="../php/login.php" method="POST">
                            <p><input type="email" placeholder="Email" name="email" ></p>
                            <p><input type="password" placeholder="Password" name="password"></p>
                            <p><input type="submit" value = "Login" name="login"></p>
                            <p id="question">Not registered? <a href="../php/register-page.php">Create an account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/wow.min.js"></script>
    <script src="../js/register.js"></script>
    <script src="../js/login.js"></script>
	
</body>
</html>