


var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var chartCanvas = document.getElementById('piechart');
var pieCtx = chartCanvas.getContext('2d');
var leftNum, rightNum;


// var correct = 0;
// var incorrect = 0;
var correctDataset = 0;
var incorrectDataset = 0;

window.onload = function(){
ctx.fillStyle = '#050f6b';
ctx.fillRect(0,0,canvas.width, canvas.height);
ctx.fillStyle = 'white';
ctx.font = "bold 62px Iceland";
ctx.fillText('Press any arrow key', 100, 100);
ctx.fillText(' to begin', 250, 200);
ctx.font="bold 36px 'Iceland'";
ctx.fillText('Pick the larger of the two numbers',110, 300);
ctx.fillText('using the left or right arrow key',110, 350);
chartUpdate();
}


function displayNum (){
    leftNum = Math.floor(Math.random()* 1000);
    rightNum = Math.floor(Math.random()* 1000);
    console.log(leftNum);
    console.log(rightNum);
    ctx.fillStyle="#050f6b";

    ctx.fillStyle="white";
    ctx.font = "bold 180px 'Iceland'";
    ctx.fillText(leftNum,50, 220);

    ctx.font = "bold 180px 'Iceland'";
    ctx.fillText(rightNum,400, 220);

    ctx.beginPath();
    ctx.moveTo(360, 0);
    ctx.lineTo(360,400);
    ctx.strokeStyle = '#fff';
    ctx.lineWidth = 5;
    ctx.stroke();
}



document.onkeydown = function (e){
    if (e.keyCode == 37 && leftNum > rightNum){


        ctx.fillStyle="#006200";
        ctx.clearRect(0,0, canvas.width, canvas.height);
        ctx.fillRect(0,0, canvas.width, canvas.height);
        correctDataset++;

        displayNum();


    }
    else if (e.keyCode== 37 && leftNum < rightNum){


        ctx.fillStyle= "#a30000";
        ctx.clearRect(0,0, canvas.width, canvas.height);
        ctx.fillRect(0,0, canvas.width, canvas.height);
        incorrectDataset++;

        displayNum();


    }else if (e.keyCode == 39 && leftNum < rightNum){


        ctx.fillStyle = "#006200";
        ctx.clearRect(0,0, canvas.width, canvas.height);
        ctx.fillRect(0,0, canvas.width, canvas.height);
        correctDataset++;

        displayNum();


    }else if (e.keyCode == 39 && leftNum > rightNum){


        ctx.fillStyle = "#a30000";
        ctx.clearRect(0,0, canvas.width, canvas.height);
        ctx.fillRect(0,0, canvas.width, canvas.height);
        incorrectDataset++;

        displayNum();

    }else{
        ctx.fillStyle="#050f6b";
        ctx.clearRect(0,0, canvas.width, canvas.height);
        ctx.fillRect(0,0, canvas.width, canvas.height);
        displayNum();

    }
    console.log(correctDataset);
    console.log(incorrectDataset);

    chartUpdate();
}

function chartUpdate(){
    var data = {
        datasets: [{
            data: [correctDataset, incorrectDataset],
            backgroundColor: ['#07ef07', 'red']

        }

    ],
        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: ['Correct','Incorrect']

    };


    var pieChart = new Chart(pieCtx,{
        type: 'pie',
        data: data,
        options:  {
            legend: {
                labels: {
                    fontColor: 'white',
                    fontSize: 48,
                    fontFamily: 'Iceland',
                    fontWeight: 'bolder'

                }
            }
        }
    });



    pieChart.update();

    var correct = document.getElementById('correct');
    var incorrect = document.getElementById('incorrect');
    correct.innerHTML = correctDataset;
    incorrect.innerHTML = incorrectDataset;

}
