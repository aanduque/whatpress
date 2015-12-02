<li data-input-trigger>
  <label class="fs-field-label fs-anim-upper" for="<?php echo $question['id']; ?>" <?php echo isset($question['info']) ? 'data-info="'.$question['info'].'"' : ''; ?>><?php echo $question['question']; ?></label>
  
  <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
    
    <?php foreach($question['options'] as $id => $value) : ?>
    <span>
      <input id="<?php echo $id; ?>" name="<?php echo $question['id']; ?>" type="radio" value="<?php echo $id; ?>"/>
      <label for="<?php echo $id; ?>" class="radio-<?php echo $id; ?>"><?php echo $value; ?></label>
    </span>
    <?php endforeach; ?>
    
  </div>
</li>