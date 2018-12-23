<!doctype html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="contact.styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        /
        <?php
        
        if($_POST["submit"]) {
            $recipient="cynidewandia@gmail.com";
            $subject="Form to email message";
            $sender=$_POST["sender"];
            $senderEmail=$_POST["senderEmail"];
            $message=$_POST["message"];
        
            $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
        
            mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
        
            $thankYou="<p>Thank you! Your message has been sent.</p>";
        }
        /?>
    </head>
    <body>
            <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="projects.html">Portfolio</a></li>
                    <li><a href="privacypolicy.html">Privacy Policy</a></li>
                    <li><a href="contact.html">contact Us</a></li>
                </ul>

                <div id="contact-form" action="mailto:cyndiewandia@gmail.com" method="post" enctype="text/plain">
                    <div>
                        <h1>Nice to Meet You!</h1> 
                        <h4>Have a question or just want to get in touch? Let's chat.</h4> 
                    </div>
                        <p id="failure">Oopsie...message not sent.</p>  
                        <p id="success">Your message was sent successfully. Thank you!</p>
                
                           <form method="post" action="/">
                            <div>
                              <label for="name">
                                  <span class="required">Name: *</span> 
                                  <input type="text" id="name" name="name" value="" placeholder="Your Name" required="required" tabindex="1" autofocus="autofocus" />
                              </label> 
                            </div>
                            <div>
                              <label for="email">
                                  <span class="required">Email: *</span>
                                  <input type="email" id="email" name="email" value="" placeholder="Your Email" tabindex="2" required="required" />
                              </label>  
                            </div>
                            <div>		          
                              <label for="message">
                                  <span class="required">Message: *</span> 
                                  <textarea id="message" name="message" placeholder="Please write your message here." tabindex="5" required="required"></textarea> 
                              </label>  
                            </div>
                            <div>		           
                              <button name="submit" type="submit" id="submit" >SEND</button> 
                            </div>
                           </form>
                
                    </div>
                    
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <footer class="footer">
                    <p>Created by:Cyndie Wandia</p>
                    <p>Got a question?<br><a href="mailto:cyndiewandia@gmail.com"><i class="fa fa-envelope fa-2x" aria-hidden="true">cyndiewandia@gmail.com</i></a>
                    <div class="right">
                <h4>NAVIGATE</h4>
                <a href="index.html">HomePage</a><br>
                <a href="projects.html">Portfolio</a><br>
                <a href="contact.html">Contact Us</a><br>
                <a href="privacypolicy.html">Privacy Policy</a>
                    </div>
                
                    <h3>Socialmedia:</h3>
                    <a href="https://www.instagram.com/wandia_grace/" target="blank"><i class="fa fa-instagram fa-3x"></i></a> &NonBreakingSpace;
                    <a href="https://github.com/spark22" target="blank"><i class="fa fa-github fa-3x"></i></a> 
                    &NonBreakingSpace;
                    <a href="https://www.linkedin.com/in/cyndie-wandia" target="blank"><i class="fa fa-linkedin fa-3x"></i></a>
                    &NonBreakingSpace;
                    <a href="https://codepen.io/taneey-wandia/" target="blank"><i class="fa fa-codepen fa-3x"></i></a>
                    &NonBreakingSpace;
                    <a href="https://trailhead.com/me/cyndiewandia" target="blank"><i class="fa fa-salesforce fa-3x"></i></a>
                </footer>
                <script type="text/javascript" src="contact.js"></script>
    </body>
</html>