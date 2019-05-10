// head {
var __nodeId__ = "std_ui_layer__main";
var __nodeNs__ = "std_ui_layer";
// }

(function (__nodeNs__, __nodeId__) {
    $.widget(__nodeNs__ + "." + __nodeId__, {
        options: {},

        _create: function () {
            this.bind();
        },

        bind: function () {
            var widget = this;

            $(".wrapper", widget.element).click(function (e) {
                e.stopPropagation();
            });

            $(".container", widget.element).click(function () {
                request(widget.options.paths.close, {}, function (response) {
                    widget.onClose();

                    ewma.responseHandler(response);
                });
            });

            // $("body").css("overflow", "hidden");
        },

        onClose: function () {
            // $("body").css("overflow", "auto");
        }
    });
})(__nodeNs__, __nodeId__);
