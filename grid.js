var table = document.getElementById('grid');

var  data = Array();

for (var i = 1; i <= 60; i++ ) {
  var row = Array();

  for (var j = 1; j <= 100; j++ ) {
  row.push();
  }
  data.push(row);
}




for (var i = 0; i < data.length; i++) {
  var row = "";
  for (var j = 0; j < data[i].length; j++) {
      switch (data[i][j]) {
        case 0:
          tdClass = "white";
          break;
          case 1:
            tdClass = "grey";
            break;
      }
      row = row + "  <td> <div class='"+tdClass + "'> </div> </td>";
  }
    table.innerHTML = table.innerHTML + "<tr>" + row + "</tr>";
}
