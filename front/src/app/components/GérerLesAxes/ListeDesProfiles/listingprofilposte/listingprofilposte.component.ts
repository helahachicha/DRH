import { Component, OnInit   } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingprofilposte',
  templateUrl: './listingprofilposte.component.html',
  styleUrls: ['./listingprofilposte.component.scss']
})
export class ListingprofilposteComponent implements OnInit {

  Profilpostes:any;
  public open:boolean=false


 

  constructor(   
     private dataService:DataService,
    ) { }

  ngOnInit(): void {
    this.getallprofile();
  }

  getallprofile() {
    this.dataService.get('Profilpostes/getAllProfilposte.json').subscribe(res => {
      this.Profilpostes = res.data;
      this.open=true
      console.log('test', this.Profilpostes)
    })
  }

  deleteprofilposte(id){
    this.dataService.delete('Profilpostes/deleteProfilposte.json?id='+id).subscribe(res => {
      this.getallprofile()
    })
  }
}
