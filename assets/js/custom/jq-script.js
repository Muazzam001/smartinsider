$(window).scroll(function () {
    var scrollDistance = $(window).scrollTop();

    // Assign active class to nav links while scolling
    $(".page-section").each(function (i) {
        if ($(this).position().top <= scrollDistance) {
            $(".float-nav a.active").removeClass("active");
            $(".float-nav a").eq(i).addClass("active");
        }
    });
}).scroll();

// $(".index-port .switch").on({
//     click: function () {
//
//     }
// });

$(document).ready(function () {
    // $('.nav-special').filter(function () {
    //     return this.href == location.href
    // }).addClass('active').siblings().removeClass('active');

    $('.nav-special').click(function () {
        $(this).addClass('active').siblings().removeClass('active')
    });

    var to_input, to_picker, from_input, from_picker, eventFired;
    $("#sideNav").find("a[href*=\\#]").bind("click", function (e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        var addedOffset, topOffset, target;
        target = $(this).attr("href"); // Set the target as variable

        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        topOffset = $(target).offset().top;
        addedOffset = parseInt(topOffset) + parseInt(400);
        $("html, body").stop().animate({
            scrollTop: addedOffset
        }, 750, function () {
            location.hash = target; //attach the hash (#jumptarget) to the pageurl
        });
        return false;
    });

    $(".basic-multiple-select").materialSelect({});

    $(".popovers").popover();

    $(".return-analysis-header .checkboxes .custom-checkbox").click(function (e) {
        if ($(this).find("input.custom-control-input").is(":checked")) {
            $(this).find(".custom-control-label").addClass("font-weight-bold");
        } else {
            $(this).find(".custom-control-label").removeClass("font-weight-bold");
        }
    });

    // $("#action_reset").click(function () {
    // });

    $('#input_starttime').pickatime({
        twelvehour: true // 12 or 24 hour
    });

    $("#exactDateFrom, #exactDateTo").pickadate({
        format: 'dd mmm yyyy'
    });

    if ($("#exactDateFrom").length > 0 || $("#exactDateTo").length > 0) {
        from_input = $("#exactDateFrom").pickadate();
        from_picker = from_input.pickadate('picker');
        to_input = $("#exactDateTo").pickadate();
        to_picker = to_input.pickadate("picker");

        // Check if there’s a “from” or “to” date to start with and if so, set their appropriate properties.
        if (from_picker.get("value")) {
            to_picker.set("min", from_picker.get("select"));
        }
        if (to_picker.get("value")) {
            from_picker.set("max", to_picker.get("select"));
        }

        from_picker.on("set", function (event) {
            if (event.select) {
                to_picker.set("min", from_picker.get("select"));
            } else if ("clear" in event) {
                to_picker.set("min", false);
            }
        });
        to_picker.on("set", function (event) {
            if (event.select) {
                from_picker.set("max", to_picker.get("select"));
            } else if ("clear" in event) {
                from_picker.set("max", false);
            }
        });
    }

    $(".custom-tab .clickme a").click(function () {
        var tagid;
        $(".custom-tab .clickme a").removeClass("activelink");
        $(this).addClass("activelink");
        tagid = $(this).data("id");
        $(".list").removeClass("active").addClass("hide");
        $("#" + tagid).addClass("active").removeClass("hide");
    });

    eventFired = function (type) {
        var n = $("#example_info")[0];
        n.innerHTML += "<div>" + type + " event - " + new Date().getTime() + "</div>";
        n.scrollTop = n.scrollHeight;
    };

    // $("#example,#activityTabContent .tab-pane .display").on("order.dt", function () {
    $("#example, #client_activity_table, #trial_activity_table, #summary_table").on("order.dt", function () {
        eventFired("Order");
    }).on("search.dt", function () {
        eventFired("Search");
    }).on("page.dt", function () {
        eventFired("Page");
    }).DataTable({
        "columnDefs": [{
            "targets": 'no-sort',
            "orderable": false,
        }]
    });

    $(".scroll-wrapper1").scroll(function () {
        $("#example").scrollLeft($(".scroll-wrapper1").scrollLeft());
    });

    $("#example").scroll(function () {
        $(".scroll-wrapper1").scrollLeft($("#example").scrollLeft());
    });

    var d = new Date();
    $("#foot-year").text(d.getFullYear());

    //changes for tab section issuer/person

    $(".searchTab li a").click(function () {
        $(".searchTab li a").removeClass("selected-tab");
        $(this).addClass("selected-tab");
        if ($(this).hasClass("issuer-tab")) {
            $(".issuer-form").show();
            $(".person-form").hide();
        } else {
            $(".issuer-form").hide();
            $(".person-form").show();
        }
    });

    $(".thisToAnimate, .searchTab li a").click(function () {
        $(".thisToAnimate").addClass("animate-list");
        $(".custom-nav .nav-special").css({
            "visibility": "hidden",
            "opacity": "0"
        });
        $(".thisToAnimate").animate({
            "width": "200px"
        }, "fast");
    });

    $(document).click(function (evt) {
        var noRedirect = "check-close";
        // console.log(evt.target.classList.contains(noRedirect));
        if (evt.target.classList.contains(noRedirect)) {
            return false;
        }
        if ($(".thisToAnimate").hasClass("animate-list")) {
            $(".thisToAnimate").animate({
                "width": "140px"
            }, "fast");

            setTimeout(function () {
                $(".custom-nav .nav-special").css({
                    "visibility": "visible",
                    "opacity": "1"
                });
            }, 750);
        }
    });

    $("#selectExactDate").click(function (e) {
        e.preventDefault();
        $("#variable-date-set, #exact-date-set").toggleClass("click-show click-hide");
        if ($("#exactDate").is(':checked')) {
            $("#exactDate").prop("checked", false);
        } else {
            $("#exactDate").prop("checked", true);
        }
    });

    $(".index-port .switch").on({
        click: function () {
            if (!$(this).find("input").is(":checked")) {
                $(this).prop('checked', false);
                $(this).find(".switchStateR").removeClass("font-weight-bold");
                $(this).find(".switchStateL").addClass("font-weight-bold");

                $(".index-switch").removeClass("click-show").addClass("click-hide");
                $(".portfolio-switch").removeClass("click-hide").addClass("click-show");
            } else {
                $(this).prop("checked", true);
                $(this).find(".switchStateL").removeClass("font-weight-bold");
                $(this).find(".switchStateR").addClass("font-weight-bold");

                $(".portfolio-switch").removeClass("click-show").addClass("click-hide");
                $(".index-switch").removeClass("click-hide").addClass("click-show");
            }
        }
    });

    $(".anstrans .switch").on({
        click: function () {
            if (!$(this).find("input").is(":checked")) {
                $("#anstrans").prop("value", "trans");
                $(this).find(".switchStateR").removeClass("font-weight-bold");
                $(this).find(".switchStateL").addClass("font-weight-bold");
            } else {
                $('#anstrans').prop('value', 'ans');
                $(this).find(".switchStateL").removeClass("font-weight-bold");
                $(this).find(".switchStateR").addClass("font-weight-bold");
            }
        }
    });

    $(".exclude-defunct .switch").on({
        click: function () {
            if (!$(this).find("input").is(":checked")) {
                $("#exclude-defunct").prop("value", "1");
                $(this).find(".switchStateR").removeClass("font-weight-bold");
                $(this).find(".switchStateL").addClass("font-weight-bold");
            } else {
                $("#exclude-defunct").prop("value", "0");
                $(this).find(".switchStateL").removeClass("font-weight-bold");
                $(this).find(".switchStateR").addClass('font-weight-bold');
            }
        }
    });

    $(".filter-search-switch .switch, .investment-switch .switch, .disall-switch .switch, .sumtrans-switch .switch, .adchart-signal-switch .switch").on({
        click: function () {
            if (!$(this).find("input").is(":checked")) {
                $(this).find(".switchStateR").removeClass("font-weight-bold");
                $(this).find(".switchStateL").addClass("font-weight-bold");
            } else {
                $(this).find(".switchStateL").removeClass("font-weight-bold");
                $(this).find(".switchStateR").addClass("font-weight-bold");
            }
        }
    });

    $("#transaction_advanced").click(function () {
        $("#modalTransactionAdvanced").modal("show")
    });

    $("#activeToday, #active, #closeExpiry, #draft").on({
        click: function () {
            var varDraft = $(this).data('name');
            if ($(this).is(":checked") && varDraft != "draft") {
                $(".btnRMDraft").removeClass('click-show').addClass('click-hide');
                $(".btnRMActive").removeClass('click-hide').addClass('click-show');
            } else {
                $(".btnRMActive").removeClass('click-show').addClass('click-hide');
                $(".btnRMDraft").removeClass('click-hide').addClass('click-show');
            }
        }
    });
    // $('.rangeslider input').popup();

    $("#trans-show").click(function (e) {
        e.preventDefault();
        $(".action-col, .criteria-col").removeClass("click-show").addClass("click-hide");
        $(".conditional-criteria-col, .dataTable-col").removeClass("click-hide").addClass("click-show");
    });

    $("#change-criteria").click(function (e) {
        e.preventDefault();
        $(".action-col, .criteria-col").removeClass("click-hide").addClass("click-show");
        $(".conditional-criteria-col").removeClass("click-show").addClass("click-hide");
    });

    $("#filter-show").click(function (e) {
        e.preventDefault();
        $(".conditional-criteria-col, .dataTable-col").removeClass("click-hide").addClass("click-show");
    });

    $("#btnSaveSearch").click(function (e) {
        e.preventDefault();
        new Custombox.modal({
            content: {
                effect: "fadein", target: "#modalSaveSearch"
            }
        }).open();
    });

    $(".close").click(function (e) {
        e.preventDefault();
        new Custombox.modal.close();
        $('body').removeClass("custombox-lock");
    });

    $("#over-default").click(function (e) {
        e.preventDefault();
        $(this).popover("show");
        $(this).popover({
            placement: "bottom"
        });
    });

    $("#treeview12").click(function (e) {
        e.preventDefault();
        $(this).find("list-group-item").prop("style", false);
    });

    $("#current_signals").click(function (e) {
        if ($(this).is(":checked")) {
            $("#moreYear").css('display', "block");
        }
    });

    $("#all_signals").click(function (e) {
        if ($(this).is(":checked")) {
            $("#moreYear").css("display", "none");
        }
    });

    $(".alert-frequency #alert_weekly").click(function (e) {
        if ($(this).is(":checked")) {
            $(".sentday").css('display', "block");
        }
    });

    $(".alert-frequency #alert_daily").click(function (e) {
        if ($(this).is(":checked")) {
            $(".sentday").css("display", "none");
        }
    });

    $(".collapsible-block .collapse").on("shown.bs.collapse", function (e) {

        $(this).parent().find(".card-header a i").toggleClass("fa-plus-square fa-minus-square");

        $(this).parent().find(".card-header .more-info").hide();

        $(this).parent().find(".card-header .show-more, .score-card-wrapper, .card-header .trade-history-switch, .card-header .investment-timeline-switch").show();

        $(this).animate({'display': 'block', 'overflow': 'visible'}, 500).slideDown(500, false);

    }).on("hidden.bs.collapse", function (e) {

        $(this).parent().find(".card-header a i").toggleClass("fa-minus-square fa-plus-square");

        $(this).parent().find(".trading-detail, .score-card-wrapper, .card-header .trade-history-switch, .card-header .investment-timeline-switch").hide();

        $(this).parent().find(".card-header .more-info").show();

        $(this).parent().find(".card-header .show-more").find(".icon-change").removeClass("fa-compress-arrows-alt").addClass("fa-expand-arrows-alt");

        $(this).animate({'display': 'none', 'overflow': 'hidden'}, 500).slideUp(500, false);

        $(this).parent().find(".sum-footer, .chart-spacer, .trading-detail, .trading-section .trading-block .heading-sec, .summary-wrapper .advance-chart-sec")
            .animate({'display': 'none'}, 500).slideUp(500, false);

        $(this).parent().find(".card-header .show-more").hide().find(".txt-change").text("More");

        $(this).parent().find(".collapse .summary-wrapper")
            .animate({'max-height': '200px', 'overflow-y': 'hidden', 'overflow-x': 'visible', 'margin-top': '0'}, 500)
            .slideDown(500, false);
    });

    $(".collapsible-block .show-more").on({
        click: function () {
            if ($(this).closest(".card").find(".card-header .show-more").hasClass("more")) {

                $(this).closest(".card")
                    .find(".card-header .show-more").removeClass("more").addClass("less")
                    .find(".txt-change").text("Less");

                $(this).closest(".card").find(".card-header .show-more")
                    .find(".icon-change").removeClass("fa-expand-arrows-alt").addClass("fa-compress-arrows-alt");

                $(this).closest(".card").find(".card-header .score-card-wrapper").hide();

                $(this).closest(".card").find(".collapse")
                    .find(".sum-footer, .chart-spacer, .trading-detail, .trading-section .trading-block .heading-sec, .summary-wrapper .advance-chart-sec")
                    .animate({'display': 'block'}, 500).slideDown(500, false);

                $(this).closest(".card")
                    .find(".collapse").find(".summary-wrapper, #advance-chart")
                    .animate({'max-height': '420px', 'margin-top': '10px'}, 500).slideDown(500, false);

                $(this).closest(".card").find(".summary-wrapper").css('overflow', 'auto');

            } else {
                $(this).closest(".card")
                    .find(".card-header .show-more").removeClass("less").addClass("more")
                    .find(".txt-change").text("More");

                $(this).closest(".card").find(".card-header .score-card-wrapper").show();

                $(this).closest(".card").find(".card-header .show-more")
                    .find(".icon-change").removeClass("fa-compress-arrows-alt").addClass("fa-expand-arrows-alt");

                $(this).closest(".card").find(".collapse")
                    .find(".sum-footer, .chart-spacer, .trading-detail, .trading-section .trading-block .heading-sec, .summary-wrapper .advance-chart-sec")
                    .animate({'display': 'none'}, 500).slideUp(500, false);

                $(this).closest(".card")
                    .find(".collapse").find(".summary-wrapper, #advance-chart")
                    .animate({'max-height': '200px', 'overflow-y': 'hidden', 'overflow-x': 'visible', 'margin-top': '0'}, 500)
                    .slideDown(500, false);
            }
        }
    });

    $(".accordion-toggle").click(function (e) {
        $(this).children(".clickable").toggleClass("fa-plus-square fa-minus-square");
    });

    $(".indices_wrapper span").click(function (e) {
        $(this).toggleClass('active');
    });

    $("#btn-add-index").click(function (e) {
        $('.unselected-indices .active').detach().removeClass('active').appendTo('.selected-indices');
    });

    $("#btn-remove-index").click(function (e) {
        $('.selected-indices .active').detach().removeClass('active').appendTo('.unselected-indices');
    });

    $('.custom-select-option select').on('change', function () {
        $(this).parent().css('color', 'orange');
    });

    $('.multiple-select-dropdown li').on('click', function () {
        if ($(this).parent().find('li.active').length >= 1) {
            $(this).parents().parents().parents('.custom-select-option').css('color', 'orange');
        } else {
            $(this).parents().parents().parents('.custom-select-option').css('color', '#00adf1');
        }
    });

    $(document).on("click", ".ranking-filter-search-result .toggler", function () {
        // console.log("Hello");
        $(this).find(".clickable").toggleClass("fa-plus-square fa-minus-square");
        if (!$(this).hasClass('added')) {
            $(this).addClass("added");
            $(this).parents('tr').after('<tr class="custom-tr">\n' +
                    '                            <td class="py-0 px-1 custom-td" colspan="9" rowspan="1">\n' +
                    '                                <div class="custom-td-body  px-0">\n' +
                    '                                    <div class="ranking-result my-1 mx-2">\n' +
                    '                                        <span class="">Frederick Bohley (CFO, Treasurer since 2018; joined 1991) purchased 5,000 shares on April 26 at $46, spending $230,000. This is his first reported open market transaction in the stock despite being with the company since 1991, and takes his holdings to 41,300 shares. This is also the first insider purchase since 2012. This is an interesting "out of the blue" purchase from the CFO, while the stock is trading in the middle of its 52-week range and not far from an all-time high. We are ranking the stock +N. </span>\n' +
                    '                                    </div>\n' +
                    '                                </div>\n' +
                    '                            </td>\n' +
                    '                        </tr>');
        } else {
            $(this).removeClass("added");
            $(this).parents('tr').next().remove();
        }

    });

    $(document).on("click", ".adjusted, .weighted", function () {
        var valInput = $(this).data("name");
        if (valInput === "adjusted" && $(this).is(":checked")) {
            $(this).parents().find(".return-analysis-block .return-analysis-purchase .return-analysis-box .val-abs").text("ADJUSTED  ");
        } else if (valInput === "weighted" && $(this).is(":checked")) {
            $(this).parents().find(".return-analysis-block .return-analysis-purchase .return-analysis-box .val-abs").text("ABSOLUTE WEIGHTED ");
        } else {
            if ($('.collapsible-block .return-analysis-header .checkboxes input.adjusted').is(":checked")) {
                $(this).parents().find(".return-analysis-block .return-analysis-purchase .return-analysis-box .val-abs").text("ADJUSTED ");
            } else if ($('.collapsible-block .return-analysis-header .checkboxes input.weighted').is(":checked")) {
                $(this).parents().find(".return-analysis-block .return-analysis-purchase .return-analysis-box .val-abs").text("ABSOLUTE WEIGHTED ");
            } else {
                $(this).parents().find(".return-analysis-block .return-analysis-purchase .return-analysis-box .val-abs").text("ABSOLUTE ");
            }
        }
        if ($(".collapsible-block .return-analysis-header .checkboxes input.adjusted").is(":checked") && $(".collapsible-block .return-analysis-header .checkboxes input.weighted").is(":checked")) {
            $(this).parents().find(".return-analysis-block .return-analysis-purchase .return-analysis-box .val-abs").text("ADJUSTED WEIGHTED ");
        }
    });

    $(".dataTables_length label").addClass("custom-select-option");

    $(".search-result .dataTables_length select").addClass("mdb-select md-form colorful-select dropdown-primary");

    $(".search-result .dataTables_filter input").addClass("form-control");

    // var searchField = '<input type="search" class="" placeholder="" aria-controls="rank-manager-search">';
    // $(".rank-manager-search .dataTables_filter label").html('Company Search: ' + searchField);

    // $(".inner-title").click(function (e) {
    //
    // });

    $(document).on('click', '.inner-title', function (e) {
        e.preventDefault();
        var data_type = $(this).data('type');
        var html_append = $(this).parent();
        var sub_elem = $(this).detach();
        var main_elem = $('.main-title span').detach();
        $('.main-title').html(sub_elem);
        html_append.html(main_elem);
        $('.main-title span').removeClass('inner-title');
        $('.sub-title span').addClass('inner-title');
        $(".multiheader").animate({'display': 'none'}, 500)
            .slideUp(500, false);
        $("#multiheader_" + data_type).animate({'display': 'block'}, 500)
            .slideDown(500, false);
    });

    $('.tooltip-hover').tooltipster({
            animation: 'fade',
            delay: 200,
            theme: 'tooltipster-punk',
            trigger: 'hover',
            side: 'left'
        }
    );

    $('.tooltip-click').tooltipster({
            animation: 'fade',
            delay: 200,
            theme: 'tooltipster-punk',
            trigger: 'click',
            side: 'left'
        }
    );
});

function setMinValue(a, selector) {
    var minValue = $(a).val();
    $(selector).find("option").each(function (x, y) {
        if (parseInt($(y).attr("value")) <= parseInt(minValue)) {
            $(y).attr("disabled", "disabled");
        } else {
            $(y).removeAttr("disabled");
        }
    })
}

function setMaxValue(a, selector) {
    var maxValue = $(a).val();
    $(selector).find("option").each(function (x, y) {
        if (parseInt($(y).attr("value")) >= parseInt(maxValue)) {
            $(y).attr("disabled", "disabled");
        } else {
            $(y).removeAttr("disabled");
        }
    })
}

function onSelectChange() {
    var selected = $("#savesearch").find("option:selected");
    var userSearchID = selected.attr('id');
    $("input[name=usersearchid]").val(userSearchID);
    if (selected.val() !== "" && selected.val() !== "save") {
        $("#savenewspan").hide();
        $("#renamespan").show();
        $("#response2").find("span").html('Click save to update search parameters. Enter a new name to rename and update search parameters.');

    } else if (selected.val() === "") {
        $("#renamespan").hide();
        $("#savenewspan").hide();
        $("#response2").html('Select a saved search or create a new one.');
    } else if (selected.val() === "save") {
        $("#renamespan").hide();
        $("#response2").html('Duplicate names will overwrite searches.');
        $("#savebutton").show();
        $("#savenew").show();
        $("#savenewspan").show();
    } else {
    }
}