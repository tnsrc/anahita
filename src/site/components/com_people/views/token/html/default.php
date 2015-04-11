<?php defined('KOOWA') or die('Restricted access') ?>

<script src="com_people/js/person.js" />

<div class="row">
	<div class="offset3 span6">
		<form name="person-form" id="person-form" action="<?= @route('view=token') ?>" method="post" class="well">
    		<fieldset>
    			<legend>
    			    <?= @text('COM-PEOPLE-TOKEN-FORGOT-PASSWORD') ?>
    			</legend>                        
                
                <div id="flash-message"></div>
		
				<div class="control-group">
                    <label class="control-label"  for="person-email">
                        <?= @text('COM-PEOPLE-TOKEN-FORGOT-PASSWORD-INSTRUCTIONS'); ?>
                    </label>
                    <div class="controls">
                       <?php $emailPattern = "^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" ?>
                       <input data-url="<?= @route('view=person', false) ?>" type="email" name="email" pattern="<?= $emailPattern ?>" id="person-email" class="input-block-level" maxlength="100" minlength="10" required  />
                    </div>
                </div>
                	
    		</fieldset>
    		
    		<div class="form-actions">
                <button type="submit" class="btn btn-large pull-right">
                    <?= @text('COM-PEOPLE-ACTION-RESET-PASSWORD'); ?>
                </button>
            </div>
		</form>
	</div>
</div>