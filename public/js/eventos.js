function reset_eventos() {
    $("#inscripcion")[0].reset();
}
var datUltimo = $(".click-cumbre:last").attr("data");
$(".ancho100")
    //.find("[data=" + datUltimo + "]")
    //.css("display", "block");
var selector = $(".cumbres_empresariales").children().find(".click-cumbre");
selector.on("click", function () {
    var dat = $(this).attr("data");
    $(".ancho100").find(".cont-textos").css("display", "none");
    $(".ancho100").find("[data=" + dat + "]").show(1000);
});

selector.hover(function () {
    if ($(this).find("i").hasClass("fa-circle-thin") == !0) {
        $(this).find("i").removeClass("fa-circle-thin");
        $(this).find("i").addClass("fa-circle");
        $(this).find("p").css("color", "#ca0538");
    } else {
        $(this).find("i").removeClass("fa-circle");
        $(this).find("i").addClass("fa-circle-thin");
        $(this).find("p").css("color", "#434343");
    }
});

var Lsem = $(".cont-seminario-sm").children().length;
var numRow = Math.trunc(Lsem / 3);
numRow = numRow + 1;
var numCol = numRow;
var inicioCol = 0;
for (var i = 0; i < numRow; i++) {
    var row = document.createElement("div");
    $(row).attr("class", "row");
    var s = "row" + i;
    $(row).attr("id", s);
    $("#cont-seminario").append(row);
}
for (var i = 0; i < Lsem; i++) {
    var v = "col" + i;
    $(".cont-seminario-sm").children().eq(i).attr("id", v);
}
while (numCol < Lsem) {
    for (var i = 0; i < numRow; i++) {
        var r = "#row" + i;
        for (var x = inicioCol; x < numCol; x++) {
            var col = "#col" + x;
            var columna = $("#cont-seminario-sm").find(col);
            $("#cont-seminario-sm").find(r).append(columna);
        }
        inicioCol = inicioCol + 3;
        numCol = numCol + 3;
    }
}
$("select").each(function () {
    var $this = $(this),
        numberOfOptions = $(this).children("option").length;
    $this.addClass("select-hidden");
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled" name="documento"></div>');
    var $styledSelect = $this.next("div.select-styled");
    $styledSelect.text($this.children("option").eq(0).text());
    var $list = $("<ul />", { class: "select-options" }).insertAfter($styledSelect);
    for (var i = 0; i < numberOfOptions; i++) {
        $("<li />", { text: $this.children("option").eq(i).text(), rel: $this.children("option").eq(i).val() }).appendTo($list);
    }
    var $listItems = $list.children("li");
    $styledSelect.click(function (e) {
        e.stopPropagation();
        $("div.select-styled.active")
            .not(this)
            .each(function () {
                $(this).removeClass("active").next("ul.select-options").hide();
            });
        $(this).toggleClass("active").next("ul.select-options").toggle();
    });
    $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass("active");
        $this.val($(this).attr("rel"));
        $list.hide();
    });
    $(document).click(function () {
        $styledSelect.removeClass("active");
        $list.hide();
    });
});
$(document).ready(function () {
    jQuery.validator.addMethod(
        "doc",
        function (pasDni, element) {
            var tipo = $("#documento").val();
            return this.optional(element) || (tipo == "Pasaporte" && pasDni.length >= 7 && pasDni.length <= 15) || (tipo == "DNI" && pasDni.length == 8) || (tipo == "Carnet de Extranjeria" && pasDni.length <= 12);
        },
        "S????los letras, n????meros, espacios."
    );
    $.validator.addMethod(
        "customemail",
        function (value, element) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(value);
        },
        customemail
    );
});
var validator = $("#inscripcion").validate({
    ignore: ".ignore",
    rules: {
        address: { required: !0 },
        email: { required: !0, email: !0, customemail: !0 },
        name: { required: !0, lettersonly: !0 },
        lastname: { required: !0, lettersonly: !0 },
        document: { alphanumerico: !0, doc: !0 },
        datos_accept: { required: !0 },
        imagen_accept: { required: !0 },
        hiddenRecaptchaEvento: {
            required: function () {
                if (grecaptcha.getResponse(1) == "") {
                    return true;
                } else {
                    return false;
                }
            },
        },
    },
    messages: {
        address: { required: required },
        email: { required: required, email: email },
        phone: { required: required, number: number, minlength: minlength },
        name: { required: required },
        lastname: { required: required },
        document: { required: required, alphanumerico: alphanumerico, doc: minlengthdoc },
        ruc: { number: number, minlength: minlengthruc, maxlength: maxlengthruc },
        datos_accept: { required: must_accept_terms },
        imagen_accept: { required: must_accept_terms },
        hiddenRecaptchaEvento: { required: must_accept_terms },
    },
    errorPlacement: function (e, r) {
        var t = $(r).data("error");
        t ? $(t).append(e) : e.insertAfter(r);
    },
    submitHandler: function (form) {
        var evento = $("#evento").val();
        if (evento == null) {
            $("#seminar_id-error").css("display", "block");
            $("#seminar_id-error").html("{!!trans('contenido.contacto_evento')!!}");
            return !1;
        } else {
            return !0;
        }
    },
});
