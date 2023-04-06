import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FicheDeRensignementRoutingModule } from './fiche-de-rensignement-routing.module';
import { AddficherenComponent } from './addficheren/addficheren.component';
import { DetailFichRensigComponent } from './detail-fich-rensig/detail-fich-rensig.component';
import { EditficherenComponent } from './editficheren/editficheren.component';
import { ListingficherenComponent } from './listingficheren/listingficheren.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';

@NgModule({
  declarations: [AddficherenComponent, DetailFichRensigComponent, EditficherenComponent, ListingficherenComponent],
  imports: [
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule,
    FicheDeRensignementRoutingModule
  ]
})
export class FicheDeRensignementModule { }
