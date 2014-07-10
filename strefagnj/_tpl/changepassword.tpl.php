<div class="page-header">
        <h3>Zmiana hasła</h3>
</div>

<form class="form-horizontal" role="form" name="form1" method="post" action="checkpassword.php">
    
    <div class="form-group">
        <label for="PasswordOldInput" class="col-sm-2 control-label">Hasło</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="PasswordOldInput" placeholder="Hasło" name="passwordold" id="passwordold">
        </div>
     </div>

    <div class="form-group">
        <label for="PasswordNew1Input" class="col-sm-2 control-label">Nowe hasło</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="PasswordNew1Input" placeholder="Nowe hasło" name="passwordnew1" id="password1">
        </div>
     </div>
     
     <div class="form-group">
        <label for="PasswordNew2Input" class="col-sm-2 control-label">Potwierdź nowe hasło</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="PasswordNew2Input" placeholder="Potwierdź nowe hasło" name="passwordnew2" id="password2">
        </div>    
     </div>     

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Zmień hasło</button>
        </div>
    </div>
            
</form>  
    
<?php
if(isset($this->passwordProblem))
 echo '<div class="alert alert-warning" role="alert">'.$this->passwordProblem.'</div>';
?>