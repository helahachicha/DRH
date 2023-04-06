import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DetailProfileComponent } from './detail-profile/detail-profile.component';
import { EditProfilComponent } from './edit-profil/edit-profil.component';

const routes: Routes = [
  { path: '', component: DetailProfileComponent},
  { path: 'edit-datail-profil/:id', component:EditProfilComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ProfilPosteeRoutingModule { }
