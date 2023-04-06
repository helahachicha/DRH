import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AddFicheDevaluComponent } from './add-fiche-devalu/add-fiche-devalu.component';
import { DetailFicheDevaluComponent } from './detail-fiche-devalu/detail-fiche-devalu.component';
import { EditFicheDevaluComponent } from './edit-fiche-devalu/edit-fiche-devalu.component';
import { ListingFicheDevaluComponent } from './listing-fiche-devalu/listing-fiche-devalu.component';

const routes: Routes = [
  { path: 'add-fiche-devalu', component:AddFicheDevaluComponent },
  { path: 'detail-fiche-devalu/:id', component:DetailFicheDevaluComponent },
  { path: 'edit-fiche-devalu', component:EditFicheDevaluComponent },
  { path: '', component:ListingFicheDevaluComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FicheDevaluationPsyRoutingModule { }
