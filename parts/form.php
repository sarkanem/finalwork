<nav aria-label="breadcrumb" class ="mt-5">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/finalwork/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Register</li>
  </ol>
</nav>

<div class="container-fluid">

<h3>REGISTER FOR MORE CONTENT</h3>
<form action="/finalwork/registration.php" method="POST">
       <div class="form-group">
          <input type="text" name="username" placeholder="username*" required> 
       </div>
       <div class="form-group">
          <input type="text" name="password" placeholder="password*" required> 
       </div>
       <div class="form-group"> 
         <input type="text" name="passwordRetype" placeholder="retype password*" required> 
        </div>
        <div class="form-group"> 
         <input type="text" name="email" placeholder="e-mail*" required> 
       </div>
       <div class="form-group"> 
         <input type="text" name="firstName" placeholder="first name*" required> 
       </div>
       <div class="form-group"> 
         <input type="text" name="lastName" placeholder="last name"> 
       </div class="form-group">
       <div class="form-group">
        <label for="country">Country</label>
        <select name="country" id="country" >
            <option value="1" selected>Latvia</option>   
            <option value="2">Lithuania</option>
            <option value="3">Estonia</option>
            <option value="4">Canada</option>  
            <option value="5">USA</option>
            <option value="6">Australia</option>
        </select>
       </div>
       <div class="form-group"> 
         <input type="checkbox" required>  I agree with terms and conditions*
       </div>
      <input type="submit" value = "Register">
      
    </form>