<?php
/**
 * @var \Destiny\AdvisorsTwo\Activity|\Destiny\AdvisorsTwo\Activity\Xur $activity
 * @var \Destiny\Definitions\InventoryItem $weapon
 */
?>
<div class="advisor type-activity panel">
    <div class="image">
        <div class="display"><img src="<?= bungie($activity->display->image) ?>"></div>
        <div class="tiny-icon"><img src="<?= bungie($activity->display->icon) ?>"></div>
    </div>
    <h3>
        <span class="name"><?= e($activity->display->advisorTypeCategory) ?></span>
        <span class="destination">&nbsp;</span>
    </h3>
    <p>
        <?= e($activity->display->flavor); ?>
    </p>
    <div class="rounds">
        @if (count($activity->weapons) > 0)
            @foreach($activity->weapons as $i => $weapon)
                <div class="round">
                    <div class="info">
                        <div class="round-number">Item <?= ($i + 1); ?></div>
                        <div class="enemy">
                            <a href="<?= dtritem($weapon); ?>" target="_blank"><?= $weapon->itemName; ?></a>
                        </div>
                    </div>
                    <div class="skulls">
                        <div class="skull">
                            <img src="<?= bungie($weapon->icon) ?>" data-toggle="popover" alt="<?= e($weapon->itemName) ?>" title="<?= e($weapon->itemName) ?>" data-content="<?= e($weapon->itemDescription) ?>">
                            <span><?= e($weapon->tierTypeName) ?></span>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <span class="panel-heading">
                Weapon data cannot be loaded.
            </span>
        @endif
    </div>
    <?php if ($activity->expirationKnown): ?>
    <div class="expires">
        <?= duration_human($activity->minutesUntilExpiration) ?> left
    </div>
    <?php endif; ?>
</div>
