<!DOCTYPE html>
<html>
<head>
    
  <style>
    .calendar {
      width: 300px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
    }
    
    .month {
      text-align: center;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .weekdays {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    
    .weekdays div {
      width: calc(100% / 7);
      text-align: center;
    }
    
    .days {
      display: flex;
      flex-wrap: wrap;
    }
    
    .days div {
      width: calc(100% / 7);
      text-align: center;
      padding: 5px;
    }
  </style>
</head>
<body>
<style>

    body {
      background-image: url("https://michelzbinden.com/images/2022/vi/en/calendar-june-2022-50ss.jpg" );
      background-size: 1400px 700px;
      background-repeat: no-repeat;
    }
  </style>
    <div class="collapse navbar-collapse" id="navbarNav" >
        <ul class="navbar-nav"  >
        </div>
  <div id="calendar"></div>
  
  <script>
    var calendar = document.getElementById('calendar');
    
    function createCalendar() {
      var date = new Date();
      var year = date.getFullYear();
      var month = date.getMonth();
      var day = date.getDate();
    
      var monthName = getMonthName(month);
      var totalDays = getDaysInMonth(month, year);
      var firstDayIndex = getFirstDayIndex(month, year);
    
      
      var prevMonthTotalDays = getDaysInMonth(month - 1, year);
      var prevMonthStartDay = prevMonthTotalDays - firstDayIndex + 1;
    
      // Generate previous month days
      for (var i = prevMonthStartDay; i <= prevMonthTotalDays; i++) {
        html += '<div class="prev-month-day">' + i + '</div>';
      }
    
      // Generate current month days
      for (var i = 1; i <= totalDays; i++) {
        var className = (i === day) ? 'current-day' : '';
        html += '<div class="' + className + '">' + i + '</div>';
      }
    
      html += '</div>';
      html += '</div>';
    
      calendar.innerHTML = html;
    }
    
    function getMonthName(month) {
      var monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June', 
        'July', 'August', 'September', 'October', 'November', 'December'
      ];
      return monthNames[month];
    }
    
    function getDaysInMonth(month, year) {
      return new Date(year, month + 1, 0).getDate();
    }
    
    function getFirstDayIndex(month, year) {
      return new Date(year, month, 1).getDay();
    }
    
    createCalendar();
  </script>
</body>
</html>
