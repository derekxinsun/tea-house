/*A3 Exercise6_function for displaying the time_40038821*/
function getCurrentDate() {
    var currentDate = new Date();
    var textTime = "";
    var listDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var listMonths = ["Jan", "Feb", "Mar", "Api", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    var s = currentDate.getSeconds();
    var min = currentDate.getMinutes();
    var h = currentDate.getHours();
    var dd = listDays[currentDate.getDay()];
    var m = listMonths[currentDate.getMonth()];
    var d = currentDate.getDate();
    var y = currentDate.getFullYear();
    var textTime = y + ", " + m + " " + d + " " + h + ":" + min + ":" + s + " " + dd;

    document.getElementById("sp_time").innerHTML = textTime;
}
setInterval(getCurrentDate, 1000);
