import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
const routes: Routes = [
  {
    path: 'listingtest',
    loadChildren: () => import('./TestTechnique/test-technique.module').then(m => m.TestTechniqueModule)
  },
  {
    path: 'liste-fiche-devalu',
    loadChildren: () => import('./FicheDevaluationPsy/fiche-devaluation-psy.module').then(m => m.FicheDevaluationPsyModule)
  },
 
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FicheDevaluationRoutingModule { }
