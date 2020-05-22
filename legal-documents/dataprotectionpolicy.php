<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Care - Data Protection</title>
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
                <h1 class="promo-title">Global Care - Insruance<br>Data Protection Policy</h1>
                <p class="promo-text">Agree to our privacy policy in order to buy product from GlobalCare!</p>
            </section>
        </div>
				<h1>Welcome to our Privacy Policy</h1>
			<h3>Your privacy is critically important to us.</h3>
			GlobalCare is located at:<br/>
			<address>
			  GlobalCare<br/>Tallinn <br />- Harjumaa , Estonia<br/>3721234567			</address>

			<p>It is GlobalCare's policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to <a href="http://globalcare.ee/">globalcare.ee/</a> (hereinafter, "us", "we", or "globalcare.ee/"). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
			<p>This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>

						<h2>Website Visitors</h2>
			<p>Like most website operators, GlobalCare collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. GlobalCare's purpose in collecting non-personally identifying information is to better understand how GlobalCare's visitors use its website. From time to time, GlobalCare may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>
			<p>GlobalCare also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on http://globalcare.ee/ blog posts. GlobalCare only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below.</p>
			
						<h2>Gathering of Personally-Identifying Information</h2>
			<p>Certain visitors to GlobalCare's websites choose to interact with GlobalCare in ways that require GlobalCare to gather personally-identifying information. The amount and type of information that GlobalCare gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at http://globalcare.ee/ to provide a username and email address.</p>
			
						<h2>Security</h2>
			<p>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>
			
						<h2>Advertisements</h2>
			<p>Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by GlobalCare and does not cover the use of cookies by any advertisers.</p>
			

						<h2>Links To External Sites</h2>
			<p>Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit.</p>
			<p>We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p>
			
			
			
						<h2>Aggregated Statistics</h2>
			<p>GlobalCare may collect statistics about the behavior of visitors to its website. GlobalCare may display this information publicly or provide it to others. However, GlobalCare does not disclose your personally-identifying information.</p>
			
						<h2>Affiliate Disclosure</h2>
			<p>This site uses affiliate links and does earn a commission from certain links. This does not affect your purchases or the price you may pay.</p>
			
						<h2>Cookies</h2>
			<p>To enrich and perfect your online experience, GlobalCare uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.</p>
			<p>A cookie is a string of information that a website stores on a visitor's computer, and that the visitor's browser provides to the website each time the visitor returns. GlobalCare uses cookies to help GlobalCare identify and track visitors, their usage of http://globalcare.ee/, and their website access preferences. GlobalCare visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using GlobalCare's websites, with the drawback that certain features of GlobalCare's websites may not function properly without the aid of cookies.</p>
			<p>By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to GlobalCare's use of cookies.</p>
			
			
			
						<h2>Privacy Policy Changes</h2>
			<p>Although most changes are likely to be minor, GlobalCare may change its Privacy Policy from time to time, and in GlobalCare's sole discretion. GlobalCare encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>
			
			
						  
			  <h2></h2>			  
			  	<p></p>			
			
			<h2>Credit & Contact Information</h2>
							<p>This privacy policy was created at <a style="color:inherit;text-decoration:none;" href="https://termsandconditionstemplate.com/privacy-policy-generator/" title="Privacy policy template generator" target="_blank">termsandconditionstemplate.com</a>. If you have any questions about this Privacy Policy, please contact us via <a href="mailto:info@globalcare.ee">email</a> or <a href="tel:3721234567">phone</a>.</p>
					
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