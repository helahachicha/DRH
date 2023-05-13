import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-fich-rensig',
  templateUrl: './detail-fich-rensig.component.html',
  styleUrls: ['./detail-fich-rensig.component.scss']
})
export class DetailFichRensigComponent implements OnInit {
  id: any;
  public Infoemployes
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getEmpById()
   
  }

  getEmpById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Infoemployes/getInfoemployeById.json?id='+this.id).subscribe(
      res => {
      this.Infoemployes=res.data; 
      console.log('test', this.Infoemployes)
    })
    
  }
}
