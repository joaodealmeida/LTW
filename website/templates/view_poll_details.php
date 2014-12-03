
    <div class="container">
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Option1', 1],
          ['Option2', 2],
          ['Option3', 3],
          ['Option4', 4],
          ['Option5', 2]
        ]);

        // Set chart options
        var options = { 'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    </div>
<div class="container">
<h2>Question</h2>
<img alt="140x140" src="http://lorempixel.com/140/140/" class="img-thumbnail" />
<div id="chart_div"></div>

</div>