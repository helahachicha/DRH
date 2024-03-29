import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-edit-profil',
  templateUrl: './edit-profil.component.html',
  styleUrls: ['./edit-profil.component.scss']
})
export class EditProfilComponent implements OnInit {


  id: any
  Detailprofilpostes: any = {};
  public Categories;

  public profilposteForm = new FormGroup({
    nom: new FormControl('', [Validators.required]),
    categorie_id: new FormControl('', [Validators.required]),
    fonction: new FormControl('', [Validators.required]),
    superhierar: new FormControl('', [Validators.required]),
    supervision: new FormControl('', [Validators.required]),
    interim: new FormControl('', [Validators.required]),
    competence: new FormControl('', [Validators.required]),
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
    private dataService: DataService,
    private router: Router,
    private route: ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getprofilById();
  }

  getprofilById() {
    this.id = this.route.snapshot.params['id'];
    this.dataService.get('Detailprofilpostes/getDetailprofilposte.json?id=' + this.id).subscribe(
      res => {
        this.Detailprofilpostes = res.data;
      })
  }
  editprofilposte() {

    this.dataService.post('Detailprofilpostes/editProfilposte.json?id=' + this.id, this.profilposteForm.value).subscribe(res => {
      this.router.navigate(['/Detail-profile/:id'])
    })
  }
  getAllCategorie() {
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res => {
      this.Categories = res.data;
    }
    )
  }
}
