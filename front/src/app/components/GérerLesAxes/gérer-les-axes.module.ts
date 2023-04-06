import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { GérerLesAxesRoutingModule } from './gérer-les-axes-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';
import { AddProfilDePosteComponent } from './CreerUnProfilDePoste/add-profil-de-poste/add-profil-de-poste.component';
import { ListingprofilposteComponent } from './ListeDesProfiles/listingprofilposte/listingprofilposte.component';


@NgModule({
  declarations: [AddProfilDePosteComponent,ListingprofilposteComponent],
  imports: [
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule,
    GérerLesAxesRoutingModule
  ]
})
export class GérerLesAxesModule { }
