import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';


@Component({
  selector: 'app-addcout',
  templateUrl: './addcout.component.html',
  styleUrls: ['./addcout.component.scss']
})
export class AddcoutComponent implements OnInit {
data:any;
message:any;
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
  }

  submit() {
    this.dataService.post('Coutformaexternes/addCoutformaexterne.json',this.coutForm.value).subscribe(res=> {
      
      this.router.navigate(['/coutlisting']) 
      })
   }
}
