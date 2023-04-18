const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

window.onload = ()=>{
    let nav = document.querySelector("ul")
    if(window.innerWidth == 992){
        nav.classList.add("collapse")
    }
}
let showoneimg = function () {
    var input = document.getElementById("img");
    var output = document.getElementById("images");
    output.style.display = "block";
    if (output.innerHTML == "") {
        for (let i = 0; i < 1; i++) {
            output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
        }
    } else {
        output.innerHTML = "";
        for (let i = 0; i < 1; i++) {
            output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
        }
    }

}

// Get the name of the day
var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
var day = new Date();
document.getElementById("day").innerHTML = `${days[day.getDay()]},`;
document.getElementById("month").innerHTML = months[day.getMonth()];
document.getElementById("year").innerHTML = day.getFullYear();


var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
        ],
        datasets: [
          {
            label: "",
            data: [2, 9, 3, 17, 6, 3, 7],
            backgroundColor: "#81c784",
            
          },
          
        ],
        
      },
      options: {
        scales: {
            xAxes: [{
                gridLines: {
                    drawOnChartArea: false
                }
            }],
            yAxes: [{
                display:false
            }]
        },
        legend: {
                labels: {
                  boxWidth: 0,
                }
               }
    }
    });




    