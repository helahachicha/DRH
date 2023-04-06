import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListingMatriceCompetenceComponent } from './Matrice De Competence/listing-matrice-competence/listing-matrice-competence.component';

const routes: Routes = [
  {
    path: 'liste-fiche-rensignement',
    loadChildren: () => import('./Fiche de rensignement/fiche-de-rensignement.module').then(m => m.FicheDeRensignementModule)
  },
  
 {
  path: 'fiche',
  loadChildren: () => import('./FicheDevaluation/fiche-devaluation.module').then(m => m.FicheDevaluationModule)
},

  { path: 'liste-matrice', component:ListingMatriceCompetenceComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PersonnelsRoutingModule { }
