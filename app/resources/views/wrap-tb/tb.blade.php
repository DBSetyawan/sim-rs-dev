<section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    var data = '{"result":{"buildname1":[{"table1":["xxx","yyy", "zzz"]}, {"table2":["xxx","yyy"]}],"buildname2":[{"table1":["xxx","yyy", "zzz"]},{"table2":["xxx","yyy"]} ] } } ';

function generateTable(data) { //data is the parsed JSON Object from an ajax request
  data = JSON.parse(data);
  $("#test-table tbody").empty(); //Empty the table first
  Object.entries(data.result).forEach(([key, elem]) => {
    var baseHtml = "";
    var childrenHtml = "";
    var maxRowSpan = 0;
    elem.forEach((inner_elem, index) => {
      var [innerElemKey, arr] = Object.entries(inner_elem)[0];
      var elemRowSpan = Math.max(arr.length, 1);
      maxRowSpan += elemRowSpan;

      if (index !== 0) {
        childrenHtml += "<tr>";
      } 
      childrenHtml += ('<td rowspan="' + elemRowSpan + '">' + innerElemKey + '</td>');
      
      arr.forEach((child, indx) => {
        if (indx !== 0) {
          childrenHtml += "</tr>";
        }
        childrenHtml += ('<td rowspan="1">' + child + '</td>' + '</tr>');
      });
    });
    baseHtml += ('<tr><td rowspan="' + Math.max(maxRowSpan, 1) + '">' + key + '</td>');
    $("#test-table").append(baseHtml + childrenHtml);
  });
}

$(function() {
  generateTable(data);
});
</script>
    <table id="test-table" class="bordered responsive-table" border="1">
  <thead>
    <tr>
      <th>Build Name</th>
      <th>Base Table</th>
      <th>Base Table</th>
      <th>Query List</th>
    </tr>
  </thead>
</table>
</section>