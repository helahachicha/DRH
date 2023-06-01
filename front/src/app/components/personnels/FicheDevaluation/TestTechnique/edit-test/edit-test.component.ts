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
data:any;
  message:any;
  public testForm = new FormGroup({
    label: new FormControl('', [Validators.required]), 
 
   });
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }
data1:any
  ngOnInit(): void {
    this.route.params.subscribe(params => {
      const id = params['id'];
      this.dataService.get('Comptechniques/getComptechByTesttech.json?id='+id).subscribe(
        res => {
        this.Testtechniques=res.data; 
        console.log(this.Testtechniques) 
       
       // console.log('testtt',this.Testtechniques)
      })
  }); 
    
  }

  onchangevalue(id:any,event:any){
   
    for (let index = 0; index < this.Testtechniques.length; index++) {
      const element = this.Testtechniques[index];
      if(element.id==id){
        this.Testtechniques[index].label=event.target.value
      }
      console.log(this.Testtechniques)
    }
  }
  onchangevalueQuestion(id:any,event:any){
   
    for (let index = 0; index < this.Testtechniques.questions.length; index++) {
      const element = this.Testtechniques.questions[index];
      if(element.id==id){
        this.Testtechniques.questions[index].label=event.target.value
      }
      console.log(this.Testtechniques.questions)

    }
  }
  onchangevalueRepense(id:any,event:any){
   
    for (let index = 0; index < this.Testtechniques.questions.reponses.length; index++) {
      const element = this.Testtechniques.questions.reponses[index];
      if(element.id==id){
        this.Testtechniques.questions.reponses[index].label=event.target.value
      }
      console.log(this.Testtechniques.questions.reponses)

    }
  }


  editTest() {
    this.dataService.post('Testtechniques/editTesttechnique.json?id=' + this.id, this.Testtechniques).subscribe(res => {
      this.data = res;
      this.message=this.data.message;
      if (this.message=="Formation modifier avec succés !"){
        this.router.navigate(['/listingtest'])
      }
      console.log(this.message);
      
    })

  }
  
  
}
