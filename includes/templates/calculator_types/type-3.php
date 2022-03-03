<div class="hair-calculator <?= $calculator_type; ?>" id="hair-calculator">
    <div class="inner-calculator">
        <div class="calculator-heading">
            <h3><?php _e($calculator->post_title, 'hair-calculator'); ?></h3>
        </div>
        <form class="calculator-form" id="form_<?= $calculator_type; ?>" data-form="#form-tab-1">
            <div class="wrap-input range-input">
                <label for="" class="range-label"><?php _e('Hair Length (inches)', 'hair-calculator'); ?><span class="selected-value" data-prefix="<?php _e('$', 'hair-calculator'); ?>">100</span></label>
                <div class="input-el range">
                    <div class="wrap-range-value"><span class="input-value">10</span><?php _e('in', 'hair-calculator'); ?></div>
                    <input type="range" id="hair_length" name="hair_length" min="10" max="30" value="10" step="1">
                </div>
            </div> 
            <div class="wrap-input range-input">
                <label for="" class="range-label"><?php _e('Hair Thickness (inches)', 'hair-calculator'); ?><span class="selected-value" data-sufix="%">0</span> </label>
                <div class="input-el range">
                    <div class="wrap-range-value"><span class="input-value">1</span><?php _e('in', 'hair-calculator'); ?></div>
                    <input type="range" id="hair_thickness" name="hair_thickness" min="1" max="6" value="1" step="1">
                </div>
            </div>                     
            <div class="wrap-input">
                <div class="select-group">
                    <div class="wrap-select">
                        <label for="" class="range-label"><?php _e('Hair Texture', 'hair-calculator'); ?></label>
                        <div class="custom-select">
                            <div class="select-header" data-default-value="10"><?php _e('Straight', 'hair-calculator'); ?></div>
                            <div class="select-body">
                                <div class="item hide" data-value="10"><?php _e('Straight', 'hair-calculator'); ?></div>
                                <div class="item" data-value="5"><?php _e('Wavy', 'hair-calculator'); ?></div>
                                <div class="item" data-value="0"><?php _e('Curly', 'hair-calculator'); ?></div>
                            </div>
                            <input type="hidden" value="10" name="hair_texture">
                        </div>                        
                    </div>
                    <div class="wrap-select">
                        <label for="" class="range-label"><?php _e('Hair Color', 'hair-calculator'); ?></label>
                        <div class="custom-select">
                            <div class="select-header" data-default-value="170.35"><?php _e('Brown', 'hair-calculator'); ?></div>
                            <div class="select-body">
                                <div class="item hide" data-value="170.35"><?php _e('Brown', 'hair-calculator'); ?></div>
                                <div class="item" data-value="146.02"><?php _e('Black', 'hair-calculator'); ?></div>
                                <div class="item" data-value="206.86"><?php _e('Blonde', 'hair-calculator'); ?></div>
                                <div class="item" data-value="255.53"><?php _e('Red', 'hair-calculator'); ?></div>
                            </div>
                            <input type="hidden" value="170.35" name="hair_color">
                        </div>                        
                    </div>                    
                </div>

            </div>                
            <div class="wrap-input checkbox">
                <div class="input-el">
                    <span class="sub-label second"><?php _e('Virgin Hair? (yes/no)', 'hair-calculator'); ?></span>
                    <div class="wrap-checkbox">
                        <label for="" class="checkbox">
                            <input type="checkbox" name="virgin_hair" id="virgin_hair" value="40">
                            <span class="icon"></span>
                            <span class="label"></span>
                        </label>	
                    </div>                
                </div>
            </div>            
            <div class="calculator-footer">
                <div class="wrap-input">
                    <div class="total">
                        <span class="title"><?php _e('Total:', 'hair-calculator'); ?></span>
                        <span class="value" data-tab1-total="inches" data-currency="<?php _e('$', 'hair-calculator'); ?>">0</span>
                    </div>
                </div>
                <div class="wrap-input">
                    <input type="submit" value="<?php _e('Calculate', 'hair-calculator'); ?>" class="button primary">
                </div>
            </div>                     
        </form>
    </div>
</div>