import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AddficherenComponent } from './addficheren/addficheren.component';
import { DetailFichRensigComponent } from './detail-fich-rensig/detail-fich-rensig.component';
import { EditficherenComponent } from './editficheren/editficheren.component';
import { ListingficherenComponent } from './listingficheren/listingficheren.component';

const routes: Routes = [
{ path: '', component: ListingficherenComponent },
{ path: 'detail-fiche-rensignement/:id', component: DetailFichRensigComponent },
{ path: 'add-fiche-rensignement', component: AddficherenComponent },
{ path: 'edit-fiche-rensignement', component: EditficherenComponent },];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FicheDeRensignementRoutingModule { }
