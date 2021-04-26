<?php include __DIR__."/header.php";?>
<section class="page-section" id="contact">
<div class ="container">
<form method="POST" >
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label loginColor">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text  loginColor">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label loginColor">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</section>
<?php include __DIR__."/footer.php";?>
