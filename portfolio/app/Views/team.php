<!--- team --->
<div id="team" class="team">
  <div class="">
    <div class="team-head text-center">
      <h4>our<span>team</span> </h4>
    </div>
    <!--- team-members --->
    <div class="team-members text-center" itemscope itemtype="https://schema.org/Person">
      <div>
        <?php if(isset($team_members)): ?>
          <?php foreach ($team_members as $key => $value):?>
            <div class="col-md-2">
              <div class="team-member" itemprop="member">
                <img  src="<?php echo BASE_URL; ?>files/images/<?php echo $value->picture; ?>" class="img-responsive img-thumbnail"  title="<?php echo $value->firstName; ?>" alt="<?php echo $value->alt; ?>" />
                <h5><span itemprop="givenName"><?php  echo $value->firstName; ?> </span><?php  echo $value->lastName; ?></h5>
                <label itemprop="jobTitle"><?php  echo $value->position; ?></label>
                <ul class="unstyled-list">
                  <?php if($value->twitter != ""): ?>
                    <li><a class="twitter" target="_blank" href="https://twitter.com/<?php echo $value->twitter; ?>"><span> </span></a></li>
                  <?php endif; ?>
                  <?php if($value->facebook): ?>
                    <li><a class="facebook" target="_blank" href="https://facebook.com/<?php echo $value->facebook; ?>"><span> </span></a></li>
                  <?php endif; ?>
                  <?php if($value->linkedIn): ?>
                    <li><a class="linked" target="_blank" href="https://linkedin.com/in/<?php echo $value->linkedIn; ?>"><span> </span></a></li>
                  <?php endif; ?>
                  <div class="clearfix"> </div>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        <div class="clearfix"> </div>
      </div>
    </div>
    <!--- team-members --->
  </div>
</div>
<!--- team --->
  <div class="clearfix"> </div>
