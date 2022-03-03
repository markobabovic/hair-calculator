<div class="hair-calculator <?= $calculator_type; ?>" id="hair-calculator">
    <div class="inner-calculator">
        <div class="calculator-heading">
            <h3><?php _e($calculator->post_title, 'hair-calculator'); ?></h3>
        </div>
        <div class="form-switcher">
            <ul>
                <li class="active"><a href="#form-tab-1"><?php _e('How Long Will My Hair Be?', 'hair-calculator'); ?></a></li>
                <li><a href="#form-tab-2"><?php _e('How Long Will It Take to Grow My Hair?', 'hair-calculator'); ?></a></li>
            </ul>
        </div>
        <form class="calculator-form" id="form_<?= $calculator_type; ?>" data-form="#form-tab-1">
            <div class="wrap-input range-input tab-2">
                <label for="" class="range-label"><?php _e('Current Hair Length (inches)', 'hair-calculator'); ?></label>
                <div class="input-el range">
                    <div class="wrap-range-value"><span class="input-value">0</span><?php _e('in', 'hair-calculator'); ?></div>
                    <input type="range" id="current_hair_length" name="current_hair_length" min="0" max="20" value="0" step="0.1">
                </div>
            </div> 
            <div class="wrap-input range-input tab-2">
                <label for="" class="range-label"><?php _e('Desired Hair Length (inches)', 'hair-calculator'); ?></label>
                <div class="input-el range">
                    <div class="wrap-range-value"><span class="input-value">0</span>in</div>
                    <input type="range" id="desired_hair_length" name="desired_hair_length" min="0" max="20" value="0" step="0.1">
                </div>
            </div>                     
            <div class="wrap-input range-input tab-1">
                <label for="" class="range-label"><?php _e('Hair Grow Time (months)', 'hair-calculator'); ?></label>
                <div class="input-el range">
                    <div class="wrap-range-value"><span class="input-value">0</span></div>
                    <input type="range" id="hair_grow_time" name="hair_grow_time" min="0" max="20" value="0" step="0.5">
                </div>
            </div>
            <div class="wrap-input range-input both-tabs">
                <label for="" class="range-label"><?php _e('Inches Per Month', 'hair-calculator'); ?></label>
                <div class="input-el range">
                    <div class="wrap-range-value"><span class="input-value">0</span><?php _e('in', 'hair-calculator'); ?></div>
                    <input type="range" id="inches_per_month" name="inches_per_month" min="0" max="1" value="0" step="0.1">
                </div>
            </div>                    
            <div class="calculator-footer">
                <div class="wrap-input">
                    <div class="total">
                        <span class="title"><?php _e('Total:', 'hair-calculator'); ?></span>
                        <span class="value" data-tab1-total="inches" data-tab2-total="months">0</span>
                    </div>
                </div>
                <div class="wrap-input">
                    <input type="submit" value="<?php _e('Calculate', 'hair-calculator'); ?>" class="button primary">
                </div>
            </div>                     
        </form>
    </div>
</div>