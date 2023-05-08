import { Component, OnInit } from '@angular/core';
import Chart from 'chart.js/auto';
import { DataService } from 'src/app/shared/service/data.service';
@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements OnInit {
  public chart: any;
  public chartt: any;
  public doughnut: any;
  public doughnutt:any;
  public line:any;
  public Poly
  public matricescomp
  public Polycom
  public Employes

  constructor( private dataService: DataService,) { }
  
  ngOnInit(): void {
    this.createDoughnut();
    this.createDoughnutpolyval();
    this.createLine();
    this.getpolyVal();
    this.getPolyMatricecomp();
    this.getpolycomp();
    this.getemployer()
  }
  createChart(pol:any , mat:any){
    if (this.chart) {
      this.chart.destroy();
    }
    this.chart = new Chart("MyChart", {
      type: 'bar', //this denotes tha type of chart

      data: {// values on X-Axis
        labels: mat, 
	       datasets: [
          {
            label: "Polyvalence",
            data: pol,
            backgroundColor: '#48cae4',
            barThickness:15

          },
        ]
      },
      options: {
        aspectRatio:2
      }
      
    });
  }


  createChartcomp(comp:any , emp:any){
    if (this.chartt) {
      this.chartt.destroy();
    }
    this.chartt = new Chart("MyChartcomp", {
      type: 'bar', //this denotes tha type of chart

      data: {// values on X-Axis
        labels: emp, 
	       datasets: [
          {
            label: "Polycompetence",
            data: comp,
            backgroundColor: '#f07167',
            barThickness:25
          },
        ]
      },
      options: {
        aspectRatio:2
      }
      
    });
  }

  createDoughnutpolyval(){
    this.doughnutt = new Chart("MyChartDP", {
      type: 'doughnut', //this denotes tha type of chart

      data: {// values on X-Axis
        labels: ['JUNIOR', 'CONFIRMÉ','SÉNIOR', ],
        
	       datasets: [{
    label: 'My First Dataset',
    data: [35,35,30],
    backgroundColor: [
      '#f05f5a',
      '#feea33',
      '#22ab4d',
      			
    ],
    borderWidth:1,
    circumference:180,
    rotation:270
  }],
  
      },
      options: {
        cutout: 120, //Définit la taille du trou central à 50%
        
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


  getpolyVal() {
    this.dataService.get('polyvalences/getallPolyVal.json').subscribe(res => {
      this.Poly = res.data.polyvalences;
      //console.log('All Poly', this.Poly)
      this.createChart(this.Poly,this.matricescomp)

  })
}

getPolyMatricecomp() {
  this.dataService.get('Matricecompetences/getMatricecomp.json').subscribe(res => {
    this.matricescomp = res.data.matricecompetencesList;
    //console.log('All matricecomp', this.matricescomp)
    this.createChart(this.Poly,this.matricescomp)

})
}


getpolycomp() {
  this.dataService.get('Polycompetences/getAllPolycompetence.json').subscribe(res => {
    this.Polycom = res.data;
    console.log('All Polycomp', this.Polycom)
    this.createChartcomp(this.Polycom,this.Employes)

})
}

getemployer() {
this.dataService.get('Employes/getAllEmploye.json').subscribe(res => {
  this.Employes = res.data;
  console.log('All comp', this.Employes)
  this.createChartcomp(this.Polycom,this.Employes)

})
}


}


