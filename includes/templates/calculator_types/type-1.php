<div class="hair-calculator <?= $calculator_type; ?>" id="hair-calculator">
    <div class="inner-calculator">
        <div class="calculator-heading">
            <h3><?php _e($calculator->post_title, 'hair-calculator'); ?></h3>
        </div>
        <form class="calculator-form" id="form_<?= $calculator_type; ?>">
            <div class="wrap-input">
                <div class="input-el">
                    <span class="sub-label"><?php _e('Final Bill Amount (USD)', 'hair-calculator'); ?></span>
                    <div class="wrap-bill-amount">
                        <span class="currency" ><?php _e('$', 'hair-calculator'); ?></span>
                        <input type="text" name="bill_amount" id="bill_amount" class="bill_amount" required>
                    </div>                
                </div>
            </div>
            <div class="wrap-input">
                <h5><?php _e('How happy were you with your service?', 'hair-calculator'); ?></h5>
                <div class="input-el">
                    <div class="radio-group">
                        <label for="" class="radio">
                            <input type="radio" name="service_rating" id="" value="15" checked>
                            <span class="icon"></span>
                            <span class="label"><?php _e('Unhappy with final result, but stylist fixed it (15%)', 'hair-calculator'); ?></span>
                        </label>
                        <label for="" class="radio">
                            <input type="radio" name="service_rating" id="" value="20">
                            <span class="icon"></span>
                            <span class="label"><?php _e('Happy with final result (20%)', 'hair-calculator'); ?></span>
                        </label>
                        <label for="" class="radio">
                            <input type="radio" name="service_rating" id="" value="25">
                            <span class="icon"></span>
                            <span class="label"><?php _e('Blown away by final result (25%)', 'hair-calculator'); ?></span>
                        </label>	                        									
                    </div>                
                </div>                
            </div>
            <div class="wrap-input margin-bottom-24">
                <div class="sub-total">
                    <span class="title"><?php _e('Tip:', 'hair-calculator'); ?></span>
                    <span class="value" data-currency="<?php _e('$', 'hair-calculator'); ?>">0</span>
                </div>
            </div>
            <div class="wrap-input checkbox">
                <div class="input-el">
                    <span class="sub-label"><?php _e('Did an assistant shampoo and/or blow dry your hair? ($5.00)', 'hair-calculator'); ?></span>
                    <div class="wrap-checkbox">
                        <label for="" class="checkbox">
                            <input type="checkbox" name="shampoo_dry" id="shampoo_dry" value="5">
                            <span class="icon"></span>
                            <span class="label"></span>
                        </label>	
                    </div>                
                </div>
            </div>   
            <div class="calculator-footer">
                <div class="wrap-input">
                    <div class="total">
                        <span class="title"><?php _e('Total Payable:', 'hair-calculator'); ?></span>
                        <span class="value" data-currency="<?php _e('$', 'hair-calculator'); ?>">0</span>
                    </div>
                </div>
                <div class="wrap-input">
                    <input type="submit" value="<?php _e('Calculate', 'hair-calculator'); ?>" class="button primary">
                </div>
            </div>                     
        </form>
    </div>
</div>