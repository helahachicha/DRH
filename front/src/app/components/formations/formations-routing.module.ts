import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [

  {
    path: 'listingforma',
    loadChildren: () => import('./formaexternes/formaexternes.module').then(m => m.FormaexternesModule)
  },

  {
    path: 'formainternelisting',
    loadChildren: () => import('./FormationInternes/formation-internes.module').then(m => m.FormationInternesModule)
  },

  {
    path: 'coutlisting',
    loadChildren: () => import('./CoutFormation/cout-formation.module').then(m => m.CoutFormationModule)
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FormationsRoutingModule { }
