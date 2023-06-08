import Chart from 'chart.js/auto';


(async function() {
const data = [
{ year: 2010, count: 10 },
{ year: 2011, count: 20 },
{ year: 2012, count: 15 },  
];

new Chart(
document.getElementById('acquisitionsUser'),
{
type: 'doughnut',
data: {
labels:["Suvery"],
datasets: [
  {
    label: 'Report data ',
    data: dataCount.map(e => e),
    backgroundColor: [
        'rgb(110, 195,100)',
      ],
  }
]
}
}
);
})();