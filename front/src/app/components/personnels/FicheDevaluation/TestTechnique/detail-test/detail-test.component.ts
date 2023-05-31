import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-test',
  templateUrl: './detail-test.component.html',
  styleUrls: ['./detail-test.component.scss']
})
export class DetailTestComponent implements OnInit {

  id: any;
  public Testtechniques

  public testForm = new FormGroup({
   label: new FormControl('', [Validators.required]), 

  });


  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.route.params.subscribe(params => {
      const id = params['id'];
      this.dataService.get('Comptechniques/getComptechByTesttech.json?id='+id).subscribe(
        res => {
        this.Testtechniques=res.data;  
       // console.log('testtt',this.Testtechniques)
      })
  });  
  }
  genererContenuFiche(): string {
    // Exemple de génération du contenu de la fiche au format HTML
    const contenu = `
      <h1>Titre de la fiche</h1>
      <p>Contenu de la fiche...</p>
    `;
    
    return contenu;
  }
  imprimer(): void {
    const contenuFiche = this.genererContenuFiche(); // Générer le contenu de la fiche à imprimer

    const fenetreImpression = window.open('', '_blank');
    fenetreImpression.document.write(contenuFiche);
    fenetreImpression.document.close();
    fenetreImpression.print();
  }
}
