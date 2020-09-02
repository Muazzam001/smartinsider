$(document).ready(function () {
    $('.directors-list .collapse-icon').click(function () {
        var this_id = $(this).attr('id');
        // sho hide title rows
        this_id = this_id.split('_');
        $('.card .director-title-' + this_id[1] + ' .data-col').toggleClass('V-hidden');
        $('.row_' + this_id[1]).slideToggle('slow');
        $('.row_' + this_id[1]).toggleClass('display_none');
        //                                                            $(this).toggleClass('fa-minus-square');
        //                                                            $(this).toggleClass('fa-plus-square');
        load_cards_nav();
    });

    $('.directors-list .director_level').each(function () {
        this_id = $(this).attr('id');
        this_id = this_id.split('_');
        this_id = this_id[1];
        if ($(this).is(':checked')) {
            if (!$(this).parent().hasClass('Former')) {
                // amount col
                if ($.isNumeric(removeCommas($('.amount_' + this_id).html()))) {
                    amount_total += parseInt(removeCommas($('.amount_' + this_id).html()));
                }
                // sis col
                temp = $('.sis_' + this_id).html();
                if (temp != "") {
                    sis_total += parseFloat(temp);
                }
                // value col
                if ($('.value_' + this_id + ' .currency_value').attr('id') != "" && $('.value_' + this_id + ' .currency_value').length > 0) {
                    value_total += parseFloat($('.value_' + this_id + ' .currency_value').attr('id'));
                }
            }
            // number of trades blue
            if ($('.acountdata_' + this_id).attr('id') != "" && $('.acountdata_' + this_id).length > 0) {
                acount_total += parseFloat($('.acountdata_' + this_id).html());
            } //
            // number of trades red
            if ($('.dcountdata_' + this_id).attr('id') != "" && $('.dcountdata_' + this_id).length > 0) {
                dcount_total += parseFloat($('.dcountdata_' + this_id).html());
            } //
            // A Value col
            if ($('.avalue_' + this_id + ' .currency_value').attr('id') != "" && $('.avalue_' + this_id + ' .currency_value').length > 0) {
                avalue_total += parseFloat($('.avalue_' + this_id + ' .currency_value').attr('id'));
            }
            // D Value col
            if ($('.dvalue_' + this_id + ' .currency_value').attr('id') != "" && $('.dvalue_' + this_id + ' .currency_value').length > 0) {
                dvalue_total += parseFloat($('.dvalue_' + this_id + ' .currency_value').attr('id'));
            }
            // salary 1 col
            if ($('.salary1_' + this_id + ' .currency_value').attr('id') != "" && $('.salary1_' + this_id + ' .currency_value').length > 0) {
                salary1_total += parseFloat($('.salary1_' + this_id + ' .currency_value').attr('id'));
            }
            // change 1 col
            //                    if ($('.salary1_' + this_id + ' .currency_value').attr('id') != "" && $('.salary1_' + this_id + ' .change1').length > 0) {
            //                        change1_total += parseFloat($('.salary1_' + this_id + ' .change1').html());
            //                        console.log(parseFloat($('.salary1_' + this_id + ' .change1').html()));
            //                    }
            // change 2 col
            //                    if ($('.salary2_' + this_id + ' .currency_value').attr('id') != "" && $('.salary2_' + this_id + ' .change2').length > 0) {
            //                        change2_total += parseFloat($('.salary2_' + this_id + ' .change2').html());
            //                    }
            // salary 2 col
            if ($('.salary2_' + this_id + ' .currency_value').attr('id') != "" && $('.salary2_' + this_id + ' .currency_value').length > 0) {
                salary2_total += parseFloat($('.salary2_' + this_id + ' .currency_value').attr('id'));
            }
            // salary 3 col
            if ($('.salary3_' + this_id + ' .currency_value').attr('id') != "" && $('.salary3_' + this_id + ' .currency_value').length > 0) {
                salary3_total += parseFloat($('.salary3_' + this_id + ' .currency_value').attr('id'));
            }
            // A Amount
            if ($('.aamount_' + this_id).html() != "") {
                aamount_total += parseFloat(removeCommas($('.aamount_' + this_id).html()));
            }
            // D Amount
            if ($('.damount_' + this_id).html() != "") {
                damount_total += parseFloat(removeCommas($('.damount_' + this_id).html()));
            }
            change1_total = ((salary1_total - salary2_total) / salary2_total) * 100;
            change2_total = ((salary2_total - salary3_total) / salary3_total) * 100;
        }
    });


});