
// ガントチャート・セルの大きさ
var ganttData = {"width": 188, "height": 60};

$(window).on("load", function() {

  // ガントチャート・サイズ調整
  setGanttSize();

});

function setGanttSize () {
  var gantt = $("#gantt"),
      ganttHead = gantt.find(".gantt-head"),
      ganttBody = gantt.find(".gantt-body"),

      ganttRowMax = gantt.find(".gantt-body-timeline > li").length - 1;

  ganttBody.find(".gantt-body-inner")
    .css("width", ganttData.width*ganttRowMax+"px");

}
