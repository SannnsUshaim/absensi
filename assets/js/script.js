const now = dayjs(); 
const day = dayjs().day();
const FormatDate = now.format('DD-MM-YYYY');
const displayDate = document.getElementById("date-time");
let nowday = "";
    
if (day == 1) {
    nowday = "Monday"
} else if (day == 2) {
    nowday = "Tuesday"
} else if (day == 3) {
    nowday = "Wednesday"
}   else if (day == 4) {
    nowday = "Thursday" 
} else if (day == 5) {
    nowday = "Friday"
} else if (day == 6) {
    nowday = "Saturday"
} else if (day == 7) {
    nowday = "Sunday"
}

displayDate.innerHTML = (nowday + ", " + FormatDate)