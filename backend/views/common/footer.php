<?php $this->registerJs('$(".user-mascot").addClass("horo")') ?>
<?php $this->registerJs('$(".user-level").attr("src", "images/levels/first-48.png")') ?>
<?php $this->registerJs('$(".user-level").attr("title", "Уровень 1")') ?>

<footer id="content-footer">
    <div class="row">
        <div class="col-md-1 ml20">
            <img src="images/mascots/holoo.png" class="user-mascot horo">
        </div>
        <div class="col-md-3-5 mr4e pt15 pull-right">
            <div class="rounded-skill nobottommargin" data-color="#DD4B39" data-size="50" data-percent="25">
<!--                <img class="user-level" src="" title="" />-->
            </div>
            <div class="skillbar clearfix " data-percent="25%">
                <div class="skillbar-bar hint--right hint--bounce" data-hint="120 XP"></div>
                <div class="skill-bar-percent">ещё 100 XP</div>
            </div>
        </div>
    </div>
</footer>