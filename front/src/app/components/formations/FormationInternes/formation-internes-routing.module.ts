import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AddformainterneComponent } from './addformainterne/addformainterne.component';
import { EditformainterneComponent } from './editformainterne/editformainterne.component';
import { ListingformainterneComponent } from './listingformainterne/listingformainterne.component';

const routes: Routes = [
  { path: '', component: ListingformainterneComponent},
  { path: 'addformainterne', component: AddformainterneComponent},
  { path: 'editformainterne/:id', component: EditformainterneComponent},
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FormationInternesRoutingModule { }
