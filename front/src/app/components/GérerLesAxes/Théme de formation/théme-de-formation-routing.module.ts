import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AddthemedeformationComponent } from './addthemedeformation/addthemedeformation.component';
import { ListingthemeformaComponent } from './listingthemeforma/listingthemeforma.component';

const routes: Routes = [
  { path: '', component:ListingthemeformaComponent },
  { path: 'addtheme', component:AddthemedeformationComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ThémeDeFormationRoutingModule { }
