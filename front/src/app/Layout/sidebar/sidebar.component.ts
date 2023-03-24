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




  constructor(
    private dataService:DataService,
  ) {}

  ngOnInit(): void {
    this.getallprofile();
  }



  getallprofile() {
    this.dataService.get('Profilpostes/getAllProfilposte.json').subscribe(res => {
      this.profilposte = res.data;
      console.log("hello",this.profilposte)


    })
  }

}
