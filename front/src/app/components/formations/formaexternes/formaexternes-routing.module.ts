import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FormalistingComponent } from './formalisting/formalisting.component';
import { AddformaComponent } from './addforma/addforma.component';
import { EditformaComponent } from './editforma/editforma.component';

const routes: Routes = [
  { path: '', component: FormalistingComponent },
  { path: 'addforma', component: AddformaComponent },
  { path: 'editforma/:id', component: EditformaComponent},

  

];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FormaexternesRoutingModule { }
