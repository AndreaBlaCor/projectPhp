<?php include __DIR__."/header.php";?>
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            <?php 
            
            foreach($users as $user){                
            ?>
            <div class="col-lg-4">
                <div class="team-member">
                    <p class="text-muted"><?php echo $user->usId?></p>
                    <p><?php echo $user->usUsername?></p>
                    <p class="text-muted"><?php echo $user->usEmail?></p>                    
                    <p class="text-muted"><?php echo $user->usPassword?></p>                    
                    <p class="text-muted"><?php echo $user->usFirstName?></p>                    
                    <p class="text-muted"><?php echo $user->usSurname?></p>
                    <p class="text-muted"><?php echo $user->usPic?></p>                    
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php include __DIR__."/footer.php";?>