jQuery(document).ready(function ($) {
  $("form.ajax").on("submit", function (e) {
    e.preventDefault();
    var that = $(this),
      url = that.attr("action"),
      type = that.attr("method");
    var name = $(".nombre").val();
    var email = $(".correo").val();
    var message = $(".mensaje").val();
    $.ajax({
      url: cpm_object.ajax_url,
      type: "POST",
      dataType: "type",
      data: {
        action: "set_form",
        name: name,
        email: email,
        message: message,
      },
      success: function (response) {
        $(".success_msg").css("display", "block");
      },
      error: function (data) {
        $(".error_msg").css("display", "block");
      },
    });
    $(".ajax")[0].reset();
  });
});
