import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingprofilposte',
  templateUrl: './listingprofilposte.component.html',
  styleUrls: ['./listingprofilposte.component.scss']
})
export class ListingprofilposteComponent implements OnInit {

  Profilpostes:any;

  public profilposteForm= new FormGroup({
    nom: new FormControl('', [Validators.required]),
    
    
  });

  constructor(    private dataService:DataService,
    ) { }

  ngOnInit(): void {
    this.getallprofile();
  }

  getallprofile() {
    this.dataService.get('Profilpostes/getAllProfilposte.json').subscribe(res => {
      this.Profilpostes = res.data;
      console.log("hello",this.Profilpostes)


    })
  }



}
