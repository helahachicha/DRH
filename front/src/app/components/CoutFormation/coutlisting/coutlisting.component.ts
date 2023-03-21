import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-coutlisting',
  templateUrl: './coutlisting.component.html',
  styleUrls: ['./coutlisting.component.scss']
})
export class CoutlistingComponent implements OnInit {
  public Coutformaexternes

  public coutForm = new FormGroup({
    coutformahd: new FormControl('', [Validators.required]),
    tocoformadt: new FormControl('', [Validators.required]),
    locaespace: new FormControl('', [Validators.required]),
    comax: new FormControl('', [Validators.required]),
    tocout: new FormControl('', [Validators.required]),
    chargeto: new FormControl('', [Validators.required]),
    
  });
  
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
    this.getallcout();
  }

  getallcout() {
    this.dataService.get('Coutformaexternes/getAllCoutformaexterne.json').subscribe(res => {
      this.Coutformaexternes = res.data;
      

    })
  }


  deletecout(id){
    this.dataService.delete('Coutformaexternes/deleteCoutformaexterne.json').subscribe(res => {
      this.Coutformaexternes = res.data;
    })
  }
}
