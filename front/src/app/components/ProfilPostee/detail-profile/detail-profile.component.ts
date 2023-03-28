import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-profile',
  templateUrl: './detail-profile.component.html',
  styleUrls: ['./detail-profile.component.scss']
})
export class DetailProfileComponent implements OnInit {

  id:any;
  public Detailprofilpostes 
  public detailpp

  
  public profilposteForm= new FormGroup({
    
    
    fonction: new FormControl('', [Validators.required]),
    superhierar: new FormControl('', [Validators.required]),
    supervision: new FormControl('', [Validators.required]),
    interim: new FormControl('', [Validators.required]),
    categorie_id: new FormControl('', [Validators.required]),
    souscompetence: new FormControl('', [Validators.required]),
    niveauvise: new FormControl('', [Validators.required]),
    indicateursuivi: new FormControl('', [Validators.required]),
    fonctionelaboration: new FormControl('', [Validators.required]),
    fonctionverification: new FormControl('', [Validators.required]),
    fonctionabrobation: new FormControl('', [Validators.required]),
    nomprenomelab: new FormControl('', [Validators.required]),
    nomprenomverif: new FormControl('', [Validators.required]),
    nomprenomabrob: new FormControl('', [Validators.required]),
    
    
  });


  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
   // this.getprofilById();
    this.getDetailppByCategorieId();

  }


  // getprofilById() {
  //   this.id=this.route.snapshot.params['id'];
  //   this.dataService.get('Detailprofilpostes/getDetailprofilposte.json?id='+this.id).subscribe(
  //     res => {
  //     this.Detailprofilpostes=res.data;
  //    // console.log("hello",this.Detailprofilpostes)

  //   })
  // }
  getDetailppByCategorieId() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Detailprofilpostes/getDetailppByCategorieId.json?id='+this.id).subscribe(
      res => {
      this.detailpp=res.data;
      console.log("hello",this.detailpp)

    })
  }
}
