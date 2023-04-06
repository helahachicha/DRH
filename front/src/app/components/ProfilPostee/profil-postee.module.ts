import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ProfilPosteeRoutingModule } from './profil-postee-routing.module';
import { DetailProfileComponent } from './detail-profile/detail-profile.component';
import { EditProfilComponent } from './edit-profil/edit-profil.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [
    DetailProfileComponent,
    EditProfilComponent
  ],
  imports: [
    CommonModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    ProfilPosteeRoutingModule
  ]
})
export class ProfilPosteeModule { }
