var table = document.getElementById('grid');

var data = Array(
  Array(1,2,3),
  Array(4,5,6)
);

for (var i = 0; i < data.length; i++) {
  table.innerHTML = table.innerHTML + "<tr>";
  for (var j = 0; j < data[i].length; j++) {
      table.innerHTML = table.innerHTML + "  <td>"+ data[i][j] + "</td>";
  }
    table.innerHTML = table.innerHTML + "</tr>";


}
alert(table.innerHTML);
