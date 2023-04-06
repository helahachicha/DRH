import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AddProfilDePosteComponent } from './CreerUnProfilDePoste/add-profil-de-poste/add-profil-de-poste.component';
import { ListingprofilposteComponent } from './ListeDesProfiles/listingprofilposte/listingprofilposte.component';
import { ListingTestComponent } from './listing-test/listing-test.component';

const routes: Routes = [
  { path: 'addprofil', component: AddProfilDePosteComponent},
  { path: 'listingprofilposte', component: ListingprofilposteComponent},
  { path: 'listingtest', component:ListingTestComponent },

  {
    path: 'listingtheme',
    loadChildren: () => import('./Théme de formation/théme-de-formation.module').then(m => m.ThémeDeFormationModule)
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class GérerLesAxesRoutingModule { }
