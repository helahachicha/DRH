import { Component, OnInit } from '@angular/core';
import { FormArray, FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-fiche-devalu',
  templateUrl: './detail-fiche-devalu.component.html',
  styleUrls: ['./detail-fiche-devalu.component.scss']
})
export class DetailFicheDevaluComponent implements OnInit {
id:any

 Infoficheevaluations:any[]
public open:boolean=false

public testForm = new FormGroup({
  nomprenom : new FormControl('', [Validators.required]),
  objetevaluation : new FormControl('', [Validators.required]),
  dateevaluation : new FormControl('', [Validators.required]),
  decisiondirection : new FormControl('', [Validators.required]),
  categorie_id : new FormControl('', [Validators.required]),
  competence_id : new FormControl('', [Validators.required]),
  souscompetence_id : new FormControl('', [Validators.required]),
  indicateursuivis_id : new FormControl('', [Validators.required]),
  niveauvises_id : new FormControl('', [Validators.required]),
  label: new FormControl('', [Validators.required]),
 });

  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    //this.getficheById()
    //this.getnomById()
    /* this.route.params.subscribe(params => {
      const id = params['id'];
      this.dataService.get('Infoficheevaluations/getInfoficheevaluationByCat.json?id='+id).subscribe(
        res => {
        this.Infoficheevaluations=res.data;  
        console.log('test',this.Infoficheevaluations)
      })
    });*/

   this.getDetailByCatID()
   }

getDetailByCatID(){
  this.route.params.subscribe(params => {
    const id = params['id'];
    this.dataService.get('Infoficheevaluations/getInfoficheevaluationByCat.json?id=' + id).subscribe(
      res => {
        this.Infoficheevaluations = res.data;
       
        this.open=true
        
        console.log('test',this.Infoficheevaluations[0].category.niveauvises)

         
      })
  });
 }
 
  }
