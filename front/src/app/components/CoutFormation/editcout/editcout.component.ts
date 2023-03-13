import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-editcout',
  templateUrl: './editcout.component.html',
  styleUrls: ['./editcout.component.scss']
})
export class EditcoutComponent implements OnInit {

  public coutForm = new FormGroup({
    coutformahd: new FormControl('', [Validators.required]),
    tocoformadt: new FormControl('', [Validators.required]),
    locaespace: new FormControl('', [Validators.required]),
    comax: new FormControl('', [Validators.required]),
    tocout: new FormControl('', [Validators.required]),
    chargeto: new FormControl('', [Validators.required]),
    
  });
  constructor() { }

  ngOnInit(): void {
  }

}
