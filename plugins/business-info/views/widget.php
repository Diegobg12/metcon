<!-- This file is used to markup the public-facing widget. -->

<ul class ="social">
<li>
    <?php if (strlen(trim($phone))>0): ?>
    <a href="tel:<?php echo $phone; ?>">
    
        <i class="fa fa-phone">
        <span class="information">
                <?php echo $phone; ?>
            </span>
        
        
        </i> 
    
    </a>

    <?php endif; ?>
</li>

<li>
    <?php if (strlen(trim($email))>0): ?>
    
    <a href="mailto:<?php echo $email; ?>">
        <i class="fa fa-envelope">
            <span class="information">
                <?php echo $email; ?>
            </span>
        </i> 
    </a>
    <?php endif; ?>
</li>


<li>
    <?php if (strlen(trim($address))>0): ?>
    <a href="http://www.instagram.com/<?php echo $address; ?>">
        <i class="fa fa-instagram">
        <span class="information">
                <?php echo $address; ?>
            </span>
        </i>
    </a>
    <?php endif; ?>
</li>


<li>
    <?php if (strlen(trim($facebook))>0): ?>
    <a href="http://www.facebook.com/<?php echo $facebook; ?>">
    <i class="fa fa-facebook">
    <span class="information">
                <?php echo $facebook; ?>
            </span>
    
    </i>
    </a>
    <?php endif; ?>
</li>


</ul>