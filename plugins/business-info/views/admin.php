<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">



   <p><label for="<?php echo $this->get_field_id('email'); ?>">Email:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>


   <p><label for="<?php echo $this->get_field_id('phone'); ?>">Phone:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('address'); ?>">Instagram:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo $address; ?>">
   </p>


   <p><label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>">
   </p>



</div>
