import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FicheDevaluationPsyRoutingModule } from './fiche-devaluation-psy-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';
import { AddFicheDevaluComponent } from './add-fiche-devalu/add-fiche-devalu.component';
import { DetailFicheDevaluComponent } from './detail-fiche-devalu/detail-fiche-devalu.component';
import { EditFicheDevaluComponent } from './edit-fiche-devalu/edit-fiche-devalu.component';
import { ListingFicheDevaluComponent } from './listing-fiche-devalu/listing-fiche-devalu.component';


@NgModule({
  declarations: [AddFicheDevaluComponent,DetailFicheDevaluComponent,EditFicheDevaluComponent,ListingFicheDevaluComponent],
  imports: [
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule,
    FicheDevaluationPsyRoutingModule
  ]
})
export class FicheDevaluationPsyModule { }
