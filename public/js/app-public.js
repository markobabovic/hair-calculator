jQuery(document).ready(function($) {
    const calcType1 = $("#form_type-1");
    const calcType2 = $("#form_type-2");
    const calcType3 = $("#form_type-3");
    const bill_amount = calcType1.find("#bill_amount");
    const service_rating = calcType1.find("input[name=service_rating]");
    const shampoo_dry = calcType1.find("#shampoo_dry");
    const range_el = $(".input-el.range");

    const form_switcher = $(".form-switcher");

    const hair_length_array = {
        10: 100,
        11: 160,
        12: 160,
        13: 160,
        14: 160,
        15: 160,
        16: 320,
        17: 320,
        18: 320,
        19: 320,
        20: 320,
        21: 640,
        22: 640,
        23: 640,
        24: 640,
        25: 640,
        26: 640,
        27: 960,
        28: 960,
        29: 960,
        30: 960
    };

    const hair_thickness_array = {
        1: 0,
        2: 0,
        3: 5,
        4: 5,
        5: 10,
        6: 10
    };    

    calcType1.submit(function(e) {
        e.preventDefault();
        let subTotalPrice = 0;
        let totalPrice = 0;
        let service_ratingVal = calcType1.find("input[name=service_rating]:checked").val();
        let percentage = getPercentage(service_ratingVal, bill_amount.val());  
        let shampoo_dry_value = (shampoo_dry.is(':checked')) ? shampoo_dry.val() : 0;
        shampoo_dry_value = +shampoo_dry_value;

        subTotalPrice = countSubTotal();
        totalPrice = +bill_amount.val() + percentage + shampoo_dry_value;
        totalPrice = totalPrice.toFixed(2);

        calcType1.find(".sub-total .value").text(subTotalPrice);
        calcType1.find(".total .value").text(totalPrice);
    });

    calcType1.find("input[name=bill_amount]").keyup(function() {
        calcType1.find(".sub-total .value").text(countSubTotal());
    });

    calcType1.find("input[name=service_rating]").change(function() {
        calcType1.find(".sub-total .value").text(countSubTotal());
    });    

    calcType1.find("input[name=shampoo_dry]").change(function() {
        calcType1.find(".sub-total .value").text(countSubTotal());
    });  

    function countSubTotal($additiona_tip) {
        let bill_amount = calcType1.find("input[name=bill_amount]").val();
        let service_rating = calcType1.find("input[name=service_rating]:checked").val();
        let $shampoo_dry = calcType1.find("input[name=shampoo_dry]:checked").val();
        $shampoo_dry = ($shampoo_dry != undefined) ? $shampoo_dry : 0;

        let subTotalPrice = getPercentage(bill_amount, service_rating) + +$shampoo_dry;

        return subTotalPrice.toFixed(2);
    }

    calcType2.submit(function(e) {
        e.preventDefault();
        let totalPrice = 0;
        let current_hair_length = +calcType2.find("input[name=current_hair_length]").val();
        let desired_hair_length = +calcType2.find("input[name=desired_hair_length]").val();
        let hair_grow_time = +calcType2.find("input[name=hair_grow_time]").val();
        let inches_per_month = +calcType2.find("input[name=inches_per_month]").val();
        let thisForm = $(this).attr("data-form");

        switch(thisForm) {
            case "#form-tab-1":
                totalPrice = hair_grow_time * inches_per_month;
                totalPrice = totalPrice.toFixed(2);
              break;
            case "#form-tab-2":
                if(inches_per_month == 0 || current_hair_length >= desired_hair_length) break;

                totalPrice = (current_hair_length - desired_hair_length) / inches_per_month;
                totalPrice = Math.round(totalPrice);

              break;
            default:
                totalPrice = 0;
        }

        totalPrice = Math.abs(totalPrice);

        calcType2.find(".total .value").text(totalPrice);
    });

    calcType3.submit(function(e) {
        e.preventDefault();
        let totalPrice = 0;
        let hair_length = +calcType3.find("input[name=hair_length]").val();
        hair_length = hair_length_array[hair_length];
        let hair_thickness = +calcType3.find("input[name=hair_thickness]").val();
        hair_thickness = hair_thickness_array[hair_thickness];
        let hair_texture = +calcType3.find("input[name=hair_texture]").val();
        let hair_color = +calcType3.find("input[name=hair_color]").val();
        let virgin_hair = calcType3.find("input[name=virgin_hair]");
        virgin_hair = (virgin_hair.is(':checked')) ? +virgin_hair.val() : 0;

        totalPrice = hair_length + (getPercentage(hair_length, hair_thickness));
        totalPrice = totalPrice + (getPercentage(hair_texture, totalPrice));
        totalPrice = totalPrice + hair_color + virgin_hair;

        calcType3.find(".total .value").text(totalPrice.toFixed(2));
    });

    range_el.find("input").on('input change', function() {
        let thisEl = $(this);
        let thisElVal = thisEl.val();
        
        thisEl.parent().find(".input-value").text(thisElVal);

        switch(thisEl.attr('name')) {
            case "hair_length":
                thisEl.closest(".wrap-input").find(".selected-value").text(hair_length_array[thisElVal]);
                break;
            case "hair_thickness":
                thisEl.closest(".wrap-input").find(".selected-value").text(hair_thickness_array[thisElVal]);
                break;
            default:

        }
    });

    form_switcher.find("li a").click(function(e) {
        e.preventDefault();
        let thisEl = $(this);
        let thisElTarget = thisEl.attr("href");

        if(thisElTarget != calcType2.attr(thisElTarget)) {
            calcType2.trigger("reset");
            calcType2.find(".wrap-range-value .input-value").text(0);
            calcType2.find(".total .value").text(0);
        }

        thisEl.closest(".hair-calculator").find("form").attr("data-form", thisElTarget);

        thisEl.closest("ul").find("li").removeClass("active");
        thisEl.parent().addClass("active");
    });

    $(".custom-select .select-header").click(function (e) {
        e.stopPropagation();
        var thisParent = $(this).parent();
        var thisHeader = $(this);
        var thisbody = thisParent.find(".select-body");

        if (thisParent.hasClass("open-select")) {
            thisParent.removeClass("open-select");
        }
        else {
            $(".custom-select").removeClass("open-select");
            $(".language-bar").removeClass("open-languages");
            thisParent.addClass("open-select");
        }

    });

    $(".custom-select .select-body .item").click(function (e) {
        e.stopPropagation();

        var thisParent = $(this).parent().parent();
        var thisEl = $(this);
        var thisElInput = $(this).parent().parent().find("input");
        var thisElHeader = $(this).parent().parent().find(".select-header");
        thisElValue = thisEl.attr("data-value");
        thisElHeader.text(thisEl.text());
        thisElHeader.attr("data-default-value", thisElValue);
        thisParent.removeClass("open-select");
        thisEl.parent().find(".item").removeClass("hide");
        thisEl.addClass("hide");

        if (thisElInput.length) {
            thisElInput.attr("value", thisElValue);
            thisElInput.trigger('change');
        }
    });

    $(window).click(function () {
        $(".custom-select").removeClass("open-select");
    });

    function getPercentage(percent, total) {
        return +((percent/ 100) * total).toFixed(2)
    }    
});