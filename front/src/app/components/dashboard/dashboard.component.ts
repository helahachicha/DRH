import { Component, OnInit } from '@angular/core';
import Chart from 'chart.js/auto';
@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements OnInit {
  public chart: any;
  public doughnut: any;
  public line:any;
  constructor() { }
  
  ngOnInit(): void {
    this.createChart();
    this.createDoughnut();
    this.createLine()
  }
  createChart(){
  
    this.chart = new Chart("MyChart", {
      type: 'bar', //this denotes tha type of chart

      data: {// values on X-Axis
        labels: ['Janvier', 'Février', 'Mars','Avril',
								 'Mai', 'Juin', 'Juillet',' Août','Septembre','Octobre','Novembre','Décembre'], 
	       datasets: [
          {
            label: "Polyvalence",
            data: ['35','45', '50', '50.01', '54',
								 '50', '55', '63','55','60','74','75'],
            backgroundColor: '#fc9eb5'
          },
          {
            label: "Polycompetence",
            data: ['40','30', '47.20', '53', '57',
								 '62', '60', '55','67','75','78','78'],
            backgroundColor: '#82c4f2'
          }  
        ]
      },
      options: {
        aspectRatio:3
      }
      
    });
  }

  createDoughnut(){

    this.doughnut = new Chart("MyChartD", {
      type: 'doughnut', //this denotes tha type of chart

      data: {// values on X-Axis
        labels: ['JUNIOR', 'CONFIRMÉ','SÉNIOR','TECK LEAD', ],
	       datasets: [{
    label: 'My First Dataset',
    data: [30,20,15,25],
    backgroundColor: [
      'red',
      'pink',
      'green',
			'blue',
      			
    ],
    hoverOffset: 7
  }],
  
      },
      options: {
        aspectRatio:1
      }

    });
  }

  createLine(){
  
    this.line = new Chart("MyChartL", {
      type: 'line', //this denotes tha type of chart

      data: {// values on X-Axis
        labels: ['0' ,'GTP ', 'CIE', 'TEC','RP',
								 'SE','RC', 'LP ', 'CC','EA', 'GER', 'SQ', 'IM', 'ED'
                 , 'AF', 'CI', 'OS', 'CA', 'OO', 'SQL' ,
                 'MF', 'MT', 'MTC',' EA', 'ES', 'EL'], 
	       datasets: [
          {
            label: "Polyvalence/SousCompetence",
            data: ['40','60','50', '65','45','75','65','55','60','80',
            '75','61','60','50', '65','45','75'
            ,'65','55','60','80','75','70','80','52','45' ],
            backgroundColor: 'blue'
          },
         
        ]
      },
      options: {
        aspectRatio:1
      }
      
    });
  }
}


