<li data-input-trigger>
  <label class="fs-field-label fs-anim-upper" for="<?php echo $question['id']; ?>" <?php echo isset($question['info']) ? 'data-info="'.$question['info'].'"' : ''; ?>><?php echo $question['question']; ?></label>
  <textarea class="fs-anim-lower" id="<?php echo $question['id']; ?>" name="<?php echo $question['id']; ?>" placeholder="<?php echo $question['placeholder']; ?>"></textarea>
</li>