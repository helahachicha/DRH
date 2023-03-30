import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-edit-test',
  templateUrl: './edit-test.component.html',
  styleUrls: ['./edit-test.component.scss']
})
export class EditTestComponent implements OnInit {
public Testtechniques
id:any
public testForm = new FormGroup({

  label1: new FormControl('', [Validators.required]),
  label2: new FormControl('', [Validators.required]),
  label3: new FormControl('', [Validators.required]),  
});
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.gettestById()
    this.getallthemeforma()
  }
  gettestById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Testtechniques/getTesttechnique.json?id='+this.id).subscribe(
      res => {
      this.Testtechniques=res.data;
      console.log("hello",this.Testtechniques)

    })
  }
  edittest(){
      
    this.dataService.post('Testtechniques/editTesttechnique.json?id='+this.id,this.testForm.value).subscribe(res=> {
     // console.log("hello",this.testForm.value)
    this.router.navigate(['/listingtest'])
    })
  }
  getallthemeforma() {
    this.dataService.get('Testtechniques/getAllTesttechnique.json').subscribe(res => {
      this.Testtechniques = res.data;

         //   console.log("hello", this.Testtechniques)


    })
  }
}
