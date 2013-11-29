	<form name="form1" method="post" action="checkpassword.php">
       	
	<p>Stare hasło</p>
    <p><input name="passwordold" type="password" id="passwordold"></p>
            
    <p>Nowe hasło</p>
    <p><input name="passwordnew1" type="password" id="password1"></p>
    
    <p>Potwierdź nowe hasło</p>
    <p><input name="passwordnew2" type="password" id="password2"></p>
    
    <p><input type="submit" name="Submit" value="Zmień hasło"></p>
            
    </form>  
    
    <?php echo "<br><big><font color=#ec1818>".$this->passwordProblem."</font></big>";?>