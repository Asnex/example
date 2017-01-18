

$(document).ready(function(){

// jQuery variables
var element = $("#html-holder");

    $("#btnPreviewImage").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").empty();
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

    $("#btnResetPreview").on('click', function () {

        $("#previewImage").empty();
    });

  $("#btnConvertHtml2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btnConvertHtml2Image").attr("download", "visit-card.png").attr("href", newData);
  });

});
