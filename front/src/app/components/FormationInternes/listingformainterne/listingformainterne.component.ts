import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingformainterne',
  templateUrl: './listingformainterne.component.html',
  styleUrls: ['./listingformainterne.component.scss']
})
export class ListingformainterneComponent implements OnInit {
  public formainternes


  public interneForm= new FormGroup({
    tycomp: new FormControl('', [Validators.required]),
    themforma: new FormControl('', [Validators.required]),
    animateur: new FormControl('', [Validators.required]),
    poste: new FormControl('', [Validators.required]),
    date: new FormControl('', [Validators.required]),
    hentrer: new FormControl('', [Validators.required]),
    hsortie: new FormControl('', [Validators.required]),
    
  });
  
  constructor(
    private dataService:DataService,
  ) { }

  ngOnInit(): void {
    this.getallformainterne();
  }


  //formainternes/addformainterne

  getallformainterne() {
    this.dataService.get('formainternes/getAllFormainterne.json').subscribe(res => {
      this.formainternes = res.data;
      console.log("hello",this.formainternes)
      

    })
  }
}
