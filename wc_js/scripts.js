$(function () {

    BASE = $('link[rel="base"]').attr('href');
    THEME = "wc-theme-boilerplate";

    $('.form-ajax').submit(function (e) {
        e.preventDefault();
        let form = $(this);
        let data = form.serialize();
        let buttonText = form.find("button[type='submit']").text();
        $.ajax({
            url: BASE + "/themes/" + THEME + "/ajax/theme.ajax.php",
            data: data,
            dataType: "json",
            type: "POST",
            beforeSend: function (xhr) {
                console.log(xhr);
                form.find("button[type='submit']").text("Enviando...").prop("disabled", true);
            },
            success: function (data) {
                console.log(data);
                setTimeout(function () {
                    form.find("button[type='submit']").text(buttonText).prop("disabled", false);
                }, 1000);
                if (data.message) {
                    alert(data.message)
                }
            }
        })
    });

    $('.button-ajax').click(function (e) {
        e.preventDefault();
        let button = $(this);
        let action = button.attr("data-action");
        let key = button.attr("data-key");
        let buttonText = $(this).text();
        $.ajax({
            url: BASE + "/themes/" + THEME + "/ajax/theme.ajax.php",
            data: { action: action, key: key },
            dataType: "json",
            type: "POST",
            beforeSend: function (xhr) {
                console.log(xhr);
                $(this).prop("disabled", true);
            },
            success: function (data) {
                console.log(data);
                setTimeout(function () {
                    $(this).prop("disabled", false);
                }, 1000);
                if (data.message) {
                    alert(data.message)
                }
            }
        })
    });

}); 