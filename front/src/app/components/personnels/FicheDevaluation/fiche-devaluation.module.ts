import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { FicheDevaluationRoutingModule } from './fiche-devaluation-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';


@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    FicheDevaluationRoutingModule
  ]
})
export class FicheDevaluationModule { }
