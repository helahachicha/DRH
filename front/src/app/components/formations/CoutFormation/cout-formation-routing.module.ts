import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AddcoutComponent } from './addcout/addcout.component';
import { CoutlistingComponent } from './coutlisting/coutlisting.component';
import { EditcoutComponent } from './editcout/editcout.component';

const routes: Routes = [
  { path: '', component: CoutlistingComponent},
  { path: 'addcout', component: AddcoutComponent},
  { path: 'editcout/:id', component: EditcoutComponent},
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CoutFormationRoutingModule { }
