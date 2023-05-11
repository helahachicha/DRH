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
  public linee:any;
  public Poly
  public matricescomp
  public Polycom
  public Employes
  public Totalpolyvalences
  public Totalpolycomp



   
  constructor( private dataService: DataService,) { }
  
  ngOnInit(): void {
    this.createDoughnut();
    this.createLine();
    this.getpolyVal();
    this.getPolyMatricecomp();
    this.getpolycomp();
    this.getemployer();
    this.gettotalPolyVal();
    this.gettotalPolyComp();
    this.createLinepersonelle()
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
        labels: this.Employes, 
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

  


  createDoughnut(){

    this.doughnut = new Chart("MyChartD", {
      type: 'doughnut', //this denotes tha type of chart

      data: {// values on X-Axis
        labels: ['JUNIOR', 'CONFIRMÉ','SÉNIOR','TECK LEAD', ],
	       datasets: [{
    label: 'My First Dataset',
    data: [6,4,3,2],
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

  createLinepersonelle(){
  
    this.linee = new Chart("MyChartP", {
      type: 'line', //this denotes tha type of chart

      data: {// values on X-Axis
        labels: ['p1','p2','p3','p4'], 
	       datasets: [
          {
            label: "gestion de temps et priorités",
            data: ['100','50','25', '75' ],
            backgroundColor: '#7209b7'
          },
         
        ]
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
        labels: ['NE','D','C','B', 'A','A+'], 
	       datasets: [
          {
            label: "Valeur/chaque echelle",
            data: ['0','10','25', '50','75','100' ],
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
 this.dataService.get('Employes/getEmploye.json').subscribe(res => {
  this.Employes = res.data;
  console.log('All emp', this.Employes)
  this.createChartcomp(this.Polycom,this.Employes)

})
}

gettotalPolyVal() {
  this.dataService.get('Totalpolyvalences/getAllTotalpolyvalence.json').subscribe(res => {
   this.Totalpolyvalences = res.data;
   console.log('All', this.Totalpolyvalences)
 
 })
 }

 gettotalPolyComp() {
  this.dataService.get('Totalpolycompetences/getAllTotalpolycompetence.json').subscribe(res => {
   this.Totalpolycomp = res.data;
   console.log('All', this.Totalpolycomp)
 
 })
 }



}


