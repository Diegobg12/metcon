<!-- This file is used to markup the public-facing widget. -->

<ul class ="social">
<li>
    <?php if (strlen(trim($phone))>0): ?>
    <a href="tel:<?php echo $phone; ?>">
    
        <i class="fa fa-phone"></i> 
    
    </a>

    <?php endif; ?>
</li>

<li>
    <?php if (strlen(trim($email))>0): ?>
    
    <a href="mailto:<?php echo $email; ?>">
        <i class="fa fa-envelope"></i> 
    </a>
    <?php endif; ?>
</li>


<li>
    <?php if (strlen(trim($address))>0): ?>
    <a href="www.instagram.com/<?php echo $address; ?>">
        <i class="fa fa-instagram"></i>
    </a>
    <?php endif; ?>
</li>


<li>
    <?php if (strlen(trim($facebook))>0): ?>
    <a href="www.facebook.com/<?php echo $facebook; ?>">
    <i class="fa fa-facebook"></i>
    </a>
    <?php endif; ?>
</li>


</ul>