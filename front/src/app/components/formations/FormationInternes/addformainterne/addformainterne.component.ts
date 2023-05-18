import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-addformainterne',
  templateUrl: './addformainterne.component.html',
  styleUrls: ['./addformainterne.component.scss']
})
export class AddformainterneComponent implements OnInit {
  data: any;
  message: any;
  public Themeformations;
  public interneForm: FormGroup;

  constructor(
    private dataService: DataService,
  ) { }

  ngOnInit(): void {
    this.getallthemeforma();

    this.interneForm = new FormGroup({
      tycomp: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      themeformation_id: new FormControl('', [Validators.required]),
      animateur: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      poste: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      date: new FormControl('', [Validators.required]),
      hentrer: new FormControl('', [Validators.required]),
      hsortie: new FormControl('', [Validators.required]),
    });
  }

  submit() {
    console.log("hello", this.interneForm.value)
    this.dataService.post('Formainternes/addFormainterne.json', this.interneForm.value).subscribe(res => {
      this.data = res;
      this.message = this.data.message;
      if (this.message == "Formation ajouter avec succés !") {
        this.interneForm.reset();
      }
      console.log(this.message);
    });
  }

  getallthemeforma() {
    this.dataService.get('Themeformations/getAllThemeformation.json').subscribe(res => {
      this.Themeformations = res.data;
    });
  }
}
