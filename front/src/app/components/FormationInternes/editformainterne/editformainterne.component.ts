import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-editformainterne',
  templateUrl: './editformainterne.component.html',
  styleUrls: ['./editformainterne.component.scss']
})
export class EditformainterneComponent implements OnInit {
public formainternes
  id: any;

  public interneForm= new FormGroup({
    tycomp: new FormControl('', [Validators.required]),
    themeforma: new FormControl('', [Validators.required]),
    animateur: new FormControl('', [Validators.required]),
    poste: new FormControl('', [Validators.required]),
    datee: new FormControl('', [Validators.required]),
    hentrer: new FormControl('', [Validators.required]),
    hsortie: new FormControl('', [Validators.required]),
    
  });
  
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getformainterneById();
  }


  getformainterneById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('formainternes/getFormainterne.json?id='+this.id).subscribe(
      res => {
      this.formainternes=res.data;
      console.log("hello",this.formainternes)

      
    })
  }

  editformainterne(){
      
    this.dataService.post('formainternes/editFormainterne.json?id='+this.id,this.interneForm.value).subscribe(res=> {
    //  console.log("hello",this.interneForm.value)
    this.router.navigate(['/formainternelisting'])
    })
  }
}
