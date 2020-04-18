<script type='text/javascript'>

$(function () {
$.getJSON("https://api.groupon.com/v2/deals.json?callback=?", 
{
    client_id: "b252ad3634a4ab2985b79d230ccc4e49a3ea9d19",
    show: "all",
    division_id: "los-angeles"
}).done(function (data) {
    console.log(data);
    // do whatever processing you need to do to the data

    $.post('save-deals.php',{dealData: data}, function(finishData) {
         //This is an optional function for when it has finished saving
    });

    // Your formatting comes next
    ....
});
</script>