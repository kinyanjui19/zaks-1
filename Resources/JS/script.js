const information = [
    "A web developer",
    "An artist",
    "A web designer",
    "Computer scientist"
  ];
  
  const infoElement = document.getElementById('info');
  let index = 0;
  
  function updateInfo() {
    infoElement.textContent = information[index];
    index = (index + 1) % information.length; // Move to the next information or wrap around
  }
  
  // Initial update
  updateInfo();
  
  // Schedule automatic update every 3 seconds (3000 milliseconds)
  setInterval(updateInfo, 3000);

  var d=newDate();
theDay=d.getday();
switch(theDay)
case1:
      alert("Monday money");
break;
case2:
      alert("Monday money");
break;
case3:
      alert("Monday money");
break;
case4:
      alert("Monday money");
break;

case5:
      alert("Monday money");
break;
case6:
alert("Monday money");
break;
case7:
      alert("Monday money");
break;
