<label for="<?php echo $this->name; ?>"><?php echo $this->title; ?></label>
<textarea class="<?php echo $this->get_classes(); ?>" data-error="<?php echo $this->get_error(); ?>" data-bind="value: <?php echo $this->name; ?>" <?php if( $this->opts['placeholder'] ) : ?>placeholder="<?php echo $this->opts['placeholder']; ?>"<?php endif; ?> name='<?php echo $this->name; ?>' size='30' value='<?php echo $this->get_value( null ); ?>'></textarea>