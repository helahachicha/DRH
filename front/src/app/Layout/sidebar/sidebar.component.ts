import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-sidebar',
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.scss']
})
export class SidebarComponent implements OnInit {


  public profilposte 
  public detailProifile
  public open:boolean=false



  constructor(
    private dataService:DataService,
  ) {}

  ngOnInit(): void {
    this.getAllDetailprofilposte()
    
  }

  // http://localhost:8765/api/Detailprofilpostes/getAllDetailprofilposte.json
  getAllDetailprofilposte(){
    this.dataService.get('Detailprofilpostes/getAllDetailprofilposte.json').subscribe(res=>{
       this.detailProifile=res.data
       this.open=true
       console.log( this.detailProifile)
    })
  }
 

}
