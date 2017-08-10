function AjaxFormRequest(result_id,formMain,url) {
   jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+formMain).serialize(),
      success: function(response) {
         document.getElementById(result_id).innerHTML = response;
      },
      error: function(response) {
         document.getElementById(result_id).innerHTML = "Виникла помилка при відправці форм. Попробуйте ще раз пізніше";
      }
   });
}