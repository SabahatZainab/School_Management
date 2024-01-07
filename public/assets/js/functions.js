//Dashboard Widgets

//Bar Chart
function initializeBarChart(element = "", url = "", label = "", categories = "") {
    model = Highcharts.chart(element, {
        chart: {
            renderTo: 'histogram',
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: categories,
            labels: {
                align: 'center',
                style: {
                    fontSize: '10px',
                    textShadow: false,
                    fontFamily: 'Trebuchet MS, Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        legend: {
            enabled: true
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                dataLabels: {
                    enabled: true
                }
            }
        },
        colors: ["#a3c18f", "#3b3d5c", "#D64646", "#3c3e5e", "#D5F21B", "#B3AA00", "#C07878", "#78C08b", "#C0b878", "#7892c0", "#a3c18f", "#F6BD0F", "#8BBA00", "#FF8E46", "#008E8E", "#D64646", "#3c3e5e", "#588526", "#B3AA00", "#C07878", "#78C08b", "#C0b878", "#7892c0", "#a3c18f", "#F6BD0F", "#8BBA00", "#FF8E46", "#3c3e5e", "#D64646", "#3c3e5e", "#588526", "#B3AA00", "#C07878", "#78C08b", "#C0b878", "#7892c0", "#aeb1d2", "#F6BD0F", "#8BBA00", "#FF8E46", "#008E8E", "#D64646", "#8E468E"],
    });

    return model;
}

function requestBarChartData(element = "", url = "", label = "", data = "") {
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        data: data,
        success: function (res) {
            if (res.success == true) {
                console.log(res.data.length);
                chart = initializeBarChart(element, "", "", res.categories);
                for (var i = 0; i < res.data.length; i++) {
                    chart.addSeries({
                        name: res.data[i].name,
                        data: res.data[i].data
                    });
                }
            } else {
                toastr.error(res.message);
            }
        },
        error: function (data) {
            console.log(data.responseText);
            toastr.error(data.responseText.replace(/[^a-zA-Z ]/g, " "));
        },
        cache: true
    });
}

//Pie Chart
function initializePieChart(element, url, label, categories = "") {
    var model = Highcharts.chart(element, {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            },
        }
    });

    return model;
}

function requestPieChartData(element, url, label, data) {
    chart = initializePieChart(element, url, label);
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        data: data,
        success: function (res) {
            if (res.success == true) {
                if (res.total != 0) {
                    chart.addSeries({
                        name: label,
                        data: res.data,
                        // events: {
                        //     click: function() {
                        //         location.href = "institute-analytics", '_blank';
                        //     }
                        // },
                        point: {
                            events: {
                                click: function () {
                                    location.href = this.options.url;
                                }
                            }
                        }
                    });
                } else {
                    chart.renderer.text('No Data Available', 140, 120)
                        .css({
                            color: '#8d93a1',
                            fontSize: '3em',
                            textAlign: 'center'
                        }).add();
                }
            } else {
                toastr.error(res.message);
            }
        },
        error: function (data) {
            console.log(data.responseText);
            toastr.error(data.responseText.replace(/[^a-zA-Z ]/g, " "));
        },
        cache: true
    });
}

//year Filter selectbox
function generateArrayOfYearsInSelectBox(className) {
    if ($("." + className).length) {
        var elements = $('.' + className);
        var max = new Date().getFullYear();
        var min = max - 40;
        for (var z = 0; z < elements.length; z++) {
            var element = elements.eq(z);
            for (var i = max; i >= min; i--) {
                $(element).append(new Option(i, i));
            }
        }
    }
}

//Assign Start-up profile status
function assginReviewer(id, videopitching) {
    $('input[name="videoPitchingAllowed"]').val(videopitching);
    $("#id").val(id);
    $("#reviewerModal").modal('toggle');
}

//number in k and m
function numberInKandM(number) {
    var unitlist = ["", "K", "M", "G"];
    let sign = Math.sign(number);
    let unit = 0;

    while (Math.abs(number) >= 1000) {
        unit = unit + 1;
        number = Math.floor(Math.abs(number) / 100) / 10;
    }

    return sign * Math.abs(number) + unitlist[unit];
}

function assginStatus(id, url, title, btnText = "", remarksText = "") {
    if (btnText != "") {
        $("#assignStatusModalButton").html(btnText);
    }
    if (remarksText != "") {
        $("#assignStatusModalRemarks").html(remarksText);
    }
    $("#assign_status_id").val(id);
    $("#assignStatusModalLabel").html(title);
    $("#assign_status_form").attr('action', url);
    $("#assignStatusModal").modal('toggle');
}

function revertChangesStatus(id, url, title) {
    $("#revert_changes_id").val(id);
    $("#revertChangesModalLabel").html(title);
    $("#revert_changes_form").attr('action', url);
    $("#revertChangesModal").modal('toggle');
}

function shortlist_for_training(id, url, title) {
    $("#training_id").val(id);
    $("#trainingAssignModalLabel").html(title);
    $("#training_form").attr('action', url);
    $("#trainingAssignModal").modal('toggle');
}

//Model actions
function dismiss_model(element) {
    $('#' + element).modal('toggle');
}

//Date Comparsions
function compare_with_other_date(date1, date2, lable1 = "other date", lable2 = "other date") {
    var first_date = new Date($("#" + date1).val());
    var second_date = new Date($("#" + date2).val());

    if (first_date > second_date) {
        $("#" + date2).val("");
        Swal.fire({
            icon: 'warning',
            title: 'Warning',
            text: lable2 + " should be greater than " + lable1
        });
    }
}

//File validation
function valid_ext(element) {
    var img_ext = $(element).val().split('.').pop().toLowerCase();
    if ($.inArray(img_ext, ['pdf', 'doc', 'docx', 'csv', 'xslx', 'xlsx']) == -1) {
        $(element).val('');
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Extension Not Allowed.'
        });
    }
    if (element.files.length > 0 && element.files[0].size > 10000000) {
        toastr.error("Please upload file less than 10MB.");
        $(element).val('');
    }
}

function toastSuccess(msg) {
    toastr.success(msg);
}

//Save Alert Message
function saveAlertMessage(divId) {
    if (jQuery("#" + divId).length) {
        var element = jQuery("#" + divId);
        var importButton = jQuery("#import-button");
        importButton.hide();
        var content = document.body.appendChild(
            document.createElement("a")
        );
        content.download = "import-message.html";
        content.href = "data:text/html," + element.html();
        content.click();
        importButton.show();
    }
}

//Custom ext validation
function custom_valid_ext(element, exts) {
    var img_ext = $(element).val().split('.').pop().toLowerCase();
    if ($.inArray(img_ext, exts) == -1) {
        $(element).val('');
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'File Extension Not Allowed.'
        });
    }
    if (element.files.length > 0 && element.files[0].size > 10000000) {
        toastr.error("Please upload file less than 10MB.");
        $(element).val('');
    }
}

//File validation
function valid_ext_with_image(element) {
    var img_ext = $(element).val().split('.').pop().toLowerCase();
    if ($.inArray(img_ext, ['pdf', 'doc', 'docx', 'csv', 'xslx', 'xlsx', 'jpeg', 'jpg', 'png']) == -1) {
        $(element).val('');
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Extension Not Allowed.'
        });
    }
    if (element.files.length > 0 && element.files[0].size > 10000000) {
        toastr.error("Please upload file less than 10MB.");
        $(element).val('');
    }
}

function valid_ext_image_only(element) {
    var img_ext = $(element).val().split('.').pop().toLowerCase();
    if ($.inArray(img_ext, ['jpeg', 'jpg', 'png']) == -1) {
        $(element).val('');
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Extension Not Allowed.'
        });
    }
    if (element.files.length > 0 && element.files[0].size > 10000000) {
        toastr.error("Please upload file less than 10MB.");
        $(element).val('');
    }
}

function valid_ext_video_only(element) {
    var img_ext = $(element).val().split('.').pop().toLowerCase();
    if ($.inArray(img_ext, ['mp4', 'mkv', 'avi']) == -1) {
        $(element).val('');
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Extension Not Allowed.'
        });
    }
    if (element.files.length > 0 && element.files[0].size > 10000000) {
        toastr.error("Please upload file less than 10MB.");
        $(element).val('');
    }
}

//File validation
function delete_confirm() {
    confirm("Are you confirm to delete!");
}

//Phone plugin
function intiPhonePlugin(className) {
    if (className.length !== 0) {
        for (var i = 0; i < className.length; i++) {
            var slides = document.getElementsByClassName(className[i]);
            if (slides.length !== 0) {
                for (var z = 0; z < slides.length; z++) {
                    var input = slides[z];
                    input.addEventListener('click', digitValidate(input));
                    var iti = window.intlTelInput(input, {
                        separateDialCode: true
                    });
                    iti.setCountry("pk");
                }
            }
        }
    }
};

//DataTable plugin
function intiDataTablePlugin(className) {
    if ($("." + className).length) {
        var elements = $('.' + className);
        for (var i = 0; i < elements.length; i++) {
            var element = elements.eq(i);
            $(element).DataTable();
        }
    }
};

//Tinymce plugin
function intiTinymcePlugin(className) {
    if ($("." + className).length) {
        tinymce.init({
            selector: 'textarea.' + className,
            setup: function (editor) {
                editor.on('change', function () {
                    tinymce.triggerSave();
                });
            },
            height: 300,
            menubar: true,
            branding: false,
            dataType: "jsonp",
            plugins: [
                'advlist autolink lists charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount',
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    }
};

function intiTinymceNewPlugin(className) {

    if ($("." + className).length) {

        tinymce.init({
            selector: 'textarea.' + className,
            setup: function (editor) {
                editor.on('change', function () {
                    tinymce.triggerSave();
                });
            },
            height: 200,
            menubar: true,
            branding: false,
            dataType: "jsonp",
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    }
};

//DatePicker plugin
function intiDatePickerPlugin(className) {
    if ($("." + className).length) {
        var elements = $('.' + className);
        for (var i = 0; i < elements.length; i++) {
            var element = elements.eq(i);
            if (!element.data('date_picker')) {
                element.attr('type', "text");
                element.datepicker('destroy').datepicker({
                    uiLibrary: 'bootstrap4',
                    dateFormat: 'yy-mm-dd'
                });
                element.prop('readonly', true);
            }
        }
    }
};

//CurrentDatePicker plugin
function intiCurrentDatePickerPlugin(className) {
    if ($("." + className).length) {
        var elements = $('.' + className);
        for (var i = 0; i < elements.length; i++) {
            var element = elements.eq(i);
            if (!element.data('date_picker')) {
                element.attr('type', "text");
                element.datepicker({
                    uiLibrary: 'bootstrap4',
                    dateFormat: 'yy-mm-dd',
                });
            }
            element.prop('readonly', true);
        }
    }
};

//DateTimePicker plugin
function intiDateTimePickerPlugin(className) {
    if ($("." + className).length) {
        var elements = $('.' + className);
        for (var i = 0; i < elements.length; i++) {
            var element = elements.eq(i);
            if (!element.data('date_time_picker')) {
                element.attr('type', "text");
                element.datetimepicker('destroy').datetimepicker({
                    uiLibrary: 'bootstrap4',
                    format: false,
                });
                element.prop('readonly', true);
            }
        }
    }
};

//Allow digits only to type
function digitValidate(element) {
    element.value = element.value.replace(/\D/g, '');

    function inputValidate() {
        element.value = element.value.replace(/\D/g, '');
    }

    element.addEventListener('input', inputValidate);
    element.addEventListener('onkeypress', inputValidate);
    element.addEventListener('onkeyup', inputValidate);
    element.addEventListener('onkeydown', inputValidate);
    element.addEventListener('onchange', inputValidate);
}

//remove element
function removeDiv(element) {
    $('#' + element).remove();
}

//Ajax formdata to ajax
function getAllFieldsInFormDataFormat(form) {
    var form_data = new FormData();
    var $textfields = $('#' + form + ' :input[type=text]');
    var $passwordfields = $('#' + form + ' :input[type=password]');
    var $urlfields = $('#' + form + ' :input[type=url]');
    var $datefields = $('#' + form + ' :input[type=date]');
    var $checkboxfields = $('#' + form).find('input[type=checkbox]');
    var $radiofields = $('#' + form + ' :input[type=radio]');
    var $hiddenfields = $('#' + form + ' :input[type=hidden]');
    var $select = $('#' + form + ' select');
    var $numberfields = $('#' + form + ' :input[type=number]');
    var $emailfields = $('#' + form + ' :input[type=email]');
    var $filefields = $('#' + form + ' :input[type=file]');
    var $textareafields = $('#' + form + ' textarea');

    $textfields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $passwordfields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $urlfields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $datefields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $checkboxfields.each(function () {
        if (this.checked == true && $(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        } else {
            // return false;
            // form_data.append(this.name, '');
        }
    });
    $radiofields.each(function () {
        if (this.checked == true && $(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $hiddenfields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $select.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $numberfields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $emailfields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });
    $filefields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).prop('files')[0]);
        }
    });
    $textareafields.each(function () {
        if ($(this).prop('disabled') == false) {
            form_data.append(this.name, $(this).val());
        }
    });

    return form_data;
}

function checkBoxValidation(checkBox) {
    if (checkBox.checked == true) {
        checkBox.value = 1;
    } else {
        checkBox.value = 0;
    }
}

mobile_mask();
phone_mask();
cnic_mask();
contact_mask();

function mobile_mask() {
    var items_mobile_mask = document.getElementsByClassName('mobile_mask');
    Array.prototype.forEach.call(items_mobile_mask, function (element) {
        var mobileMask = new IMask(element, {
            mask: '+{92}(000)00000000',
            placeholder: {
                show: 'always'
            }
        });
    });
}

function phone_mask() {
    var items_phone_mask = document.getElementsByClassName('phone_mask');
    Array.prototype.forEach.call(items_phone_mask, function (element) {
        var phoneMask = new IMask(element, {
            mask: '+{92}(00)00000000',
            placeholder: {
                show: 'always'
            }
        });
    });
}

function contact_mask() {
    var items_mobile_mask = document.getElementsByClassName('contact_mask');
    Array.prototype.forEach.call(items_mobile_mask, function (element) {
        var mobileMask = new IMask(element, {
            mask: '0000-0000000',
            placeholder: {
                show: 'always'
            }
        });
    });
}

function cnic_mask() {
    var cnic_mask = document.getElementsByClassName('cnic_mask');

    Array.prototype.forEach.call(cnic_mask, function (element) {
        var cnicMask = new IMask(element, {
            mask: '00000-0000000-0',
            placeholder: {
                show: 'always'
            }
        });
    });
}

function pkr_currency_mask() {
    var pkr_currency = document.getElementsByClassName('pkr_currency_mask');

    // Array.prototype.forEach.call(pkr_currency, function(element)
    // {
    //     var pkrCurrencyMask = new IMask(element,
    //     {
    //         mask: '$num',
    //         blocks: {
    //             num: {
    //             // nested masks are available!
    //             mask: Number,
    //             thousandsSeparator: ' '
    //             }
    //         }
    //     });
    // });
}

function number_mask() {
    var number_mask = document.getElementsByClassName('number_mask');
}

//owl carosuel
function initOwlCarosuel(element) {
    $(element).owlCarousel({
        margin: 10,
        nav: true,
        loop: false,
        autoplay: true,
        autoplayTimeout: '2000',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
}

function initBlogOwlCarosuel(element) {
    var owl = $(element).owlCarousel({
        nav: true,
        loop: false,
        dots: false,
        margin: 5,
        autoplay: true,
        autoplayTimeout: '3000',
        navContainer: '#nav',
        autoplayHoverPause: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2,
                nav: true
            },
            1200: {
                items: 4,
                nav: true
            },
            1366: {
                items: 4,
                nav: true
            },
            1440: {
                items: 4,
                nav: true
            }
        }
    });

    return owl;
}

function initEventOwlCarosuel(element) {
    var owl = $(element).owlCarousel({
        nav: true,
        loop: false,
        dots: false,
        margin: 5,
        autoplay: true,
        autoplayTimeout: '3000',
        navContainer: '#nav',
        autoplayHoverPause: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 4,
                nav: true
            },
            1200: {
                items: 4,
                nav: true
            },
            1366: {
                items: 4,
                nav: true
            },
            1440: {
                items: 4,
                nav: true
            }
        }
    });

    return owl;
}

function initInnovationOwlCarosuel(element) {
    var owl = $(element).owlCarousel({
        nav: true,
        loop: false,
        dots: false,
        margin: 5,
        autoplay: true,
        autoplayTimeout: '3000',
        navContainer: '#nav',
        autoplayHoverPause: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 3,
                nav: true
            },
            1200: {
                items: 3,
                nav: true
            },
            1366: {
                items: 3,
                nav: true
            },
            1440: {
                items: 3,
                nav: true
            }
        }
    });

    return owl;
}

function initEmployeesOwlCarosuel(element) {
    var owl = $(element).owlCarousel({
        nav: true,
        loop: false,
        dots: false,
        margin: 5,
        // autoWidth:true,
        autoplay: true,
        autoplayTimeout: '3000',
        navContainer: '#nav',
        autoplayHoverPause: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1,
                nav: true
            }
        }
    });

    return owl;
}

//Get File to element
const srcToFile = async (src, fileName, element_id) => {
    const response = await axios.get(src + "#toolbar=0", {
        responseType: "blob",
    });
    var fileName = src.replace(/^.*[\\\/]/, '');
    const mimeType = response.headers["content-type"];
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(new File([response.data], fileName, {
        type: mimeType,
    })); //your file(s) reference(s)
    document.getElementById(element_id).files = dataTransfer.files;
};

function dataURLtoFile(dataurl, filename) {

    var arr = dataurl.split(','),
        mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]),
        n = bstr.length,
        u8arr = new Uint8Array(n);

    while (n--) {
        u8arr[n] = bstr.charCodeAt(n);
    }

    return new File([u8arr], filename, {
        type: mime
    });
}

const base64ToFile = async (id, element_id) => {
    // For Live Server
    var base_url = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '') + "/";
    //For Localhost
    if (base_url.includes("localhost")) {
        base_url = "http://localhost/hec_administrative/public/";
    }

    var form_data = new FormData();
    form_data.append('id', id);
    form_data.append("_token", $('meta[name="csrf-token"]').attr('content'));
    $.ajax({
        url: base_url + "get-image-blob",
        method: "POST",
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (res) {
            try {
                const obj = JSON.parse(res);
                if (obj.success == true) {
                    var fileName = obj.data.name;
                    const mimeType = obj.data.type;

                    var file = dataURLtoFile("data:" + mimeType + ";base64," + obj.data.image, fileName);
                    console.log(file);

                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file); //your file(s) reference(s)
                    document.getElementById(element_id).files = dataTransfer.files;
                } else {
                    console.log("obj.message");
                }
            } catch (error) {
                console.log(error);
            }
        }
    });
};

//base64 to image
function getImageBlob(id, element) {
    if (id) {
        // For Live Server
        var base_url = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '') + "/";
        //For Localhost
        if (base_url.includes("localhost")) {
            base_url = "http://localhost/hec_administrative/public/";
        }

        $("#" + element).attr("src", base_url + "assets/img/placeholder.jpg");
        $("#" + element).attr("alt", "loading");
        var form_data = new FormData();
        form_data.append('id', id);
        form_data.append("_token", $('meta[name="csrf-token"]').attr('content'));

        axios.post(
            base_url + "get-image-blob",
            form_data
        ).then(function (response) {
            const obj = response.data;
            if (obj.success == true) {
                var elms = document.querySelectorAll("[id='" + element + "']");

                for (var i = 0; i < elms.length; i++) {
                    elms[i].setAttribute("src", "data:" + obj.data.type + ";base64," + obj.data.image);
                    elms[i].setAttribute("alt", obj.data.name);
                }
            } else {
                console.log(obj.message);
                $("#" + element).attr("src", base_url + "assets/img/placeholder.jpg");
                $("#" + element).attr("alt", "loading");
            }
        })
            .catch(function (error) {
                $("#" + element).attr("src", base_url + "assets/img/placeholder.jpg");
                $("#" + element).attr("alt", "loading");
                console.log(error.message);
            });
    }
}

//read more
function convertToReadMore(className) {
    var maxLength = 60;
    $("." + className).each(function () {
        var myStr = $(this).text();
        if ($.trim(myStr).length > maxLength) {
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append('<span class="c-more-text">' + newStr + " " + removedStr + '</span>');
            $(this).append(' <a href="javascript:void(0);" class="c-read-more fw-bold text-dark" onclick="readMoreModal(this)">Read More...</a>');
        }
    });
}

function readMoreModal(elemt) {
    $("#staticBackdrop").modal('show');
    $("#staticBackdropBody").html($(elemt).siblings(".c-more-text").html());
}

// Confirm Delete SweetAlert2
function deleteConfirmSweetAlert(form, data) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
}

// assignMaster SweetAlert2
function assignMasterSweetAlert(id, name) {
    Swal.fire({
        title: 'Are you sure you want to make (' + name + ') Master DEO?',
        text: "There can only be one Master DEO. If some DEO is already master, he/she will be replaced by this DEO.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            $("#master_id").val(id);
            $("#master_form").submit();
        }
    })
}

// Something Went Wrong SweetAlert2
function somethingWentWrongSweetAlert(msg) {
    Swal.fire({
        icon: 'error',
        title: 'Alert',
        text: msg,
    });
}

// Something Went Wrong SweetAlert2
function warningSweetAlert(msg) {
    Swal.fire({
        icon: 'warning',
        title: 'Warning',
        text: msg,
    });
}

// Success SweetAlert2
function successSweetAlert(msg) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: msg,
    })
}

// Save Confirm SweetAlert2
// function saveConfirmSweetAlert(form){
//     Swal.fire({
//         title: 'Do you want to save the changes?',
//         showDenyButton: true,
//         showCancelButton: true,
//         confirmButtonText: 'Save',
//         denyButtonText: `Don't save`,
//     }).then((result) => {
//         /* Read more about isConfirmed, isDenied below */
//         if (result.isConfirmed) {
//             form.submit();
//             //Swal.fire('Saved!', '', 'success')
//         } else if (result.isDenied) {
//             Swal.fire('Changes are not saved', '', 'info')
//         }
//     })
// }

// Save Confirm SweetAlert
function saveConfirmSweetAlert(form, callback) {
    Swal.fire({
        title: 'Do you want to save the changes?',
        icon: 'question',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Save',
        denyButtonText: `Don't save`,
    }).then((result) => {
        if (result.isConfirmed) {
            callback(); // Call the callback function to submit the form
        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
    });
}

// Update Confirm SweetAlert
function sortPSConfirmSweetAlert(table, callback) {
    Swal.fire({
        title: 'Are you sure you want to sort the PS number?',
        icon: 'question',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Update',
        denyButtonText: `Don't Update`,
    }).then((result) => {
        if (result.isConfirmed) {
            callback(); // Call the callback function to submit the form
        } else if (result.isDenied) {
            table.draw();
            Swal.fire('PS number sorting not changed', '', 'info')
        }
    });
}

// Delete Using Axios
function deleteByAxios(elmt, url) {
    Swal.fire({
        icon: 'question',
        title: 'Are you sure?',
        showDenyButton: true,
        // showCancelButton: true,
        confirmButtonText: 'Delete',
        denyButtonText: `Don't Delete`,
    }).then((result) => {
        if (result.isConfirmed) {
            $('#processing-spinner').show();

            axios.post(
                url
            ).then(function (response) {
                const obj = response.data;
                if (obj.success == true) {
                    $('#processing-spinner').hide();
                    $(elmt).parent().parent().remove();
                    successSweetAlert(obj.message);
                } else {
                    $('#processing-spinner').hide();
                    somethingWentWrongSweetAlert(obj.message);
                    $('#processing-spinner').hide();
                }
            })
                .catch(function (error) {
                    $('#processing-spinner').hide();
                    console.log(error);
                    somethingWentWrongSweetAlert(error.response.data.message);
                });
        }
    });
}

//Age Calculate
function ageCalculator(elmt1, elmt2) {
    var userinput = $(elmt1).val();
    var dob = new Date(userinput);

    if (userinput == null || userinput == '') {
        document.getElementById("message").innerHTML = "**Choose a date please!";
        return false;
    } else {
        //calculate month difference from current date in time
        var month_diff = Date.now() - dob.getTime();

        //convert the calculated difference in date format
        var age_dt = new Date(month_diff);

        //extract year from date
        var year = age_dt.getUTCFullYear();

        //now calculate the age of the user
        var age = Math.abs(year - 1970);

        if (age > 60) {
            toastr.warning('Age should not be greater then 60.');
            return false;
        }
        else if (age < 18) {
            toastr.warning('Age should not be lesser then 18.');
            return false;
        }
        else {
            //set the calculated age to given element
            $("#" + elmt2).val(age);
        }
    }
}

function customeWarningAlert(msg) {
    Swal.fire({
        icon: 'warning',
        title: 'Warning',
        html: msg,
    });
}

// Year Dropdown


function shuffleString(str) {
    const shuffledArr = str.split('').sort(() => Math.random() - 0.5);
    const shuffledStr = shuffledArr.join('');
    return shuffledStr;
}

//generate Password
function generatePassword(elemt, passwordValidationArray) {

    var min_length = passwordValidationArray.min_length;
    var max_length = passwordValidationArray.mix_length;
    var uppercase_length_min = passwordValidationArray.uppercase_length_min;
    var lowercase_length_min = passwordValidationArray.lowercase_length_min;
    // var special_character_length_min = passwordValidationArray.special_character_length_min;
    var number_length_min = passwordValidationArray.number_length_min;
    // var allow_special_character      = passwordValidationArray.allow_special_character;

    var lowercase = 'abcdefghijklmnopqrstuvwxyz',
        uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        numbers = '0123456789',
        retVal = "";

    for (var i = 0; i < uppercase_length_min; ++i) {
        retVal += shuffleString(uppercase).charAt(Math.floor(Math.random()) * uppercase_length_min);
    }
    for (var i = 0; i < number_length_min; ++i) {
        retVal += shuffleString(numbers).charAt(Math.floor(Math.random()) * number_length_min);
    }
    // for (var i = 0; i < special_character_length_min; ++i) {
    //     retVal += shuffleString(allow_special_character).charAt( Math.floor(Math.random()) * special_character_length_min);
    // }

    var loopCount = min_length - (uppercase_length_min + number_length_min);

    for (var i = 0; i < loopCount; ++i) {
        retVal += shuffleString(lowercase).charAt(Math.floor(Math.random()) * loopCount);
    }


    retVal = shuffleString(retVal);

    $("#" + elemt).val(retVal);
}

//Return Date
function returnDate(date) {
    if (date != "null" || date != "") {
        //format date
        var options = {
            weekday: "long",
            year: "numeric",
            month: "long",
            day: "numeric",
        };
        //Format Date
        var date2 = new Date(date);
        return date2.toLocaleDateString("en-US", options);
    }

    return "----";
}

//rotateImg
function rotateImg(elmt) {
    var width = document.getElementById("image_container").offsetWidth;
    var img = document.getElementById(elmt);
    var angle = parseInt(img.getAttribute("data-angel")) + 90;
    angle = angle % 360;
    img.setAttribute("data-angel", angle);

    img.className = "image-rotate rotate" + angle;
    img.style.width = width + "px";
    img.style.height = width + "px";
}

//magnifier
function addMagnifier(className) {
    if ($("." + className).length) {
        var elements = $('.' + className);
        for (var i = 0; i < elements.length; i++) {
            var element = elements.eq(i);
            var imgsrc = element.attr('src');
            element.attr('id', 'aser' + i);

            $("#magnifier-preview").append('<div class="magnifier-preview adf' + i + ' mt-5 me-5" id="magnifier-preview' + i + '" style="width: 500px;height: 500px;position: fixed; z-index: 9999;top: 0;left: 0;"></div>')

            var evt = new Event(),
                m = new Magnifier(evt);

            $(element).hover(function () {
                $("#magnifier-preview").show();
            });

            m.attach({
                thumb: "#aser" + i,
                large: imgsrc,
                largeWrapper: 'magnifier-preview' + i
            });
        }
    }
}

// Accept Only Number in text field
function validateInput(event) {
    var key = event.key;

    // Check if the key is not a number and not the backspace key
    if (isNaN(key) && key !== "Backspace") {
        // Check if the shift key is pressed along with a key that typically produces a symbol
        if (event.shiftKey && /[~`!@#$%^&*()\-_=+\[\]{}\\|;:'",.<>/?]/.test(key)) {
            event.preventDefault(); // Prevent the input
        } else {
            event.preventDefault(); // Prevent the input
        }
    }
}



function romanNumberConvert(num) {
    var numeralCodes = [["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"],         // Ones
    ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"],   // Tens
    ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"]];        // Hundreds
    var numeral = "";
    var digits = num.toString().split('').reverse();
    for (var i = 0; i < digits.length; i++) {
        numeral = numeralCodes[i][parseInt(digits[i])] + numeral;
    }
    return numeral;
}

function capitalizeFirstLetter(inputString) {
    return inputString.charAt(0).toUpperCase() + inputString.slice(1);
  }

function only_alphabet() {
    var items_only_alphabet = document.getElementsByClassName('only_alphabet');
    Array.prototype.forEach.call(items_only_alphabet, function (element) {
        element.addEventListener('input', function () {
            var inputValue = element.value;
            var regex = /^[A-Za-z]+$/; // Regular expression to match only alphabetic characters

            if (!regex.test(inputValue)) {
                // If the input contains non-alphabetic characters, clear the input value
                element.value = inputValue.replace(/[^A-Za-z]/g, '');
            }
        });
    });
}
only_alphabet();

function only_number() {
    var items_only_number = document.getElementsByClassName('only_number');
    Array.prototype.forEach.call(items_only_number, function (element) {
        element.addEventListener('input', function () {
            var inputValue = element.value;
            var regex = /^[0-9]+$/; // Regular expression to match only numeric characters

            if (!regex.test(inputValue)) {
                // If the input contains non-numeric characters, clear the input value
                element.value = inputValue.replace(/[^0-9]/g, '');
            }
        });
    });
}
only_number();
