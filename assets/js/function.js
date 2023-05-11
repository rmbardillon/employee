$(document).ready(function() {
    function updateDatetime() {
        const datetime = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
        const formattedDatetime = datetime.toLocaleString('en-US', options);
        $("#currentDate").html(formattedDatetime);
    }

    // call the updateDatetime() function immediately to display the current datetime
    updateDatetime();

    // call the updateDatetime() function every second to update the datetime display
    setInterval(updateDatetime, 1000);
    
    $("#view").click(function() {
        $("#employeeModal").modal('show');
    });
    
    var id = 'EMP-' + Math.floor(Math.random() * 1000000).toString().padStart(6, '0');
    
    $("#employeeNumber").keyup(function() {
    var inputVal = $(this).val();
        console.log(inputVal)
        if (inputVal.length === 6) {
            console.log("Submitted");
            $(this).val("");
        }
    });

});