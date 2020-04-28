<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>date test - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>


  $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: "dd-mm-yy",
        minDate: -0 ,

    });  
  } );


$(function () {
    $("#from").datepicker({
        defaultDate: "+1w",
        minDate: 0,
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy',

        onSelect: function (selectedDate) {
            var days_to_add = 364, // SET DAYS HERE
                parsed_date = new Date($.datepicker.parseDate('dd/mm/yy', selectedDate)),
                add_year = new Date(parsed_date.setDate(parsed_date.getDate() + days_to_add)),
                formatted_date = $.datepicker.formatDate('dd/mm/yy', add_year);

            $('#to').val(formatted_date);
        }
    });
    


 $("#policy_from_date").datepicker({
            minDate: 0,
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: "dd-mm-yy",
            onSelect: function (date) {
                var targetDate = $('#policy_from_date').datepicker('getDate');
                targetDate.setDate(targetDate.getDate() + 30);
                var dd = targetDate.getDate();
                var mm = targetDate.getMonth() + 1;
                var yyyy = targetDate.getFullYear();
                var dateString = dd + "-" + mm + "-" + yyyy;
                $('#policy_to_date').val(dateString);
            }
        });


});



  </script>
</head>
<body>
  <bold>Types of date pickers using jquerry</bold>
 
<p>From Date: <input type="text" id="datepicker"></p>

<form action=""  enctype="multipart/form-data" method="post">
  


start date  <input id="from" /><br></br>
to date   <input id="to"/> <br></br>

policy_from_date <input id="policy_from_date" /> <br></br>
policy_to_date<input id="policy_to_date" />


 </form>


</body>
</html>