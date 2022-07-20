$(document).ready(function () {
  let id = 1;

  $("#addRow").click(function () {
    let newid = id++;
    $("#table1").append(
      '<tr valign="center" id="' +
        newid +
        '">\n\
          <td  class="name' +
        newid +
        '">' +
        $("#name").val() +
        '</td>\n\
          <td  class="item' +
        newid +
        '">' +
        $("#item").val() +
        '</td>\n\
          <td  class="condition' +
        newid +
        '">' +
        $("#condition").val() +
        '</td>\n\
          <td ><a href="javascript:void(0);" class="deleteRow btn btn-danger">Remove</a></td>\n\
      </tr>'
    );
  });

  let serializedData = $("#form1").serialize();

  $.ajax({
    url: "insert.php",
    type: "post",
    data: serializedData,
  });

  $("#table1").on("click", ".deleteRow", function () {
    $(this).parent().parent().remove();
  });

  $("#saveTable").click(function () {
    let lastRowId = $("#table1 tr:last").attr("id");

    let name = new Array();
    let item = new Array();
    let condition = new Array();
    for (let i = 1; i <= lastRowId; i++) {
      name.push($("#" + i + " .name" + i).html());
      item.push($("#" + i + " .item" + i).html());
      condition.push($("#" + i + " .condition" + i).html());
    }
    let sendName = JSON.stringify(name);
    let sendItem = JSON.stringify(item);
    let sendCondition = JSON.stringify(condition);
    $.ajax({
      url: "insert.php",
      type: "post",
      data: {
        name: sendName,
        item: sendItem,
        condition: sendCondition,
      },
      success: function (data) {
        alert(data);
      },
    });
  });
});
