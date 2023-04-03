import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-editcout',
  templateUrl: './editcout.component.html',
  styleUrls: ['./editcout.component.scss']
})
export class EditcoutComponent implements OnInit {
  id: any;
  public coutformaexternes

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
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getcoutById();
  }

  getcoutById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('coutformaexternes/getCoutformaexterne.json?id='+this.id).subscribe(
      res => {
      this.coutformaexternes=res.data;     
    })
  }
  editcout(){   
    this.dataService.post('coutformaexternes/editCoutformaexterne.json?id='+this.id,this.coutForm.value).subscribe(
    res=> { this.router.navigate(['/coutlisting'])
    })
  }

}
