<!DOCTYPE HTML> 

<HTML>

	<HEAD> 
    	    <Title>  TRAVLR  </Title> 
      
           <link rel="stylesheet" href=assets/css/ContactStyle.css type="text/css">

	</HEAD> 
             
  <BODY background ="assets/images/plane.jpg" >  

    <HEADER> 

        <H1>TRAVLR</H1>

    </HEADER>


    <a href ='Home' class="button"> Home </a> 
    <a href =# class="button"> Preferences </a> 
    <a href =# class="button"> Routes </a> 
    <a href =# class="button"> Info </a> 
    <a href =# class="button"> About </a> 
    <a href ='Contact' class="button"> Contact Us </a> 


<div class="form-style-6">
<h1>Contact Us</h1>
<form action='app/Http/Controllers/mail.php'>
<input type="text" name="name" placeholder="Your Name" />
<input type="email" name="email" placeholder="Email Address" />
<textarea name="message" placeholder="Type your Message"></textarea>
<input type="submit" value="Send" />
</form>
</div>

 
</body>
</html> 
