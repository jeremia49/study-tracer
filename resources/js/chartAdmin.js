import Chart from 'chart.js/auto';
import JSON5 from 'json5';
// using function iFFE

(async function() {
new Chart(
document.getElementById('acquisitions'),
{
type: 'doughnut',
data: {
labels:["Suvery","Responden","Pertanyaan"],
datasets: [
  {
    label: 'Report data ',
    data: dataCount.map(e => e),
    backgroundColor: [
        'rgb(110, 195,100)',
        'rgb(54, 162, 235)',
        'rgb(255, 10, 10)'
      ],
  }
]
}
}
);
})();