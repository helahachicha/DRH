import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { PersonnelsRoutingModule } from './personnels-routing.module';
import { TestTechniqueRoutingModule } from './FicheDevaluation/TestTechnique/test-technique-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';
import { ListingMatriceCompetenceComponent } from './Matrice De Competence/listing-matrice-competence/listing-matrice-competence.component';


@NgModule({
  declarations: [ListingMatriceCompetenceComponent],
  imports: [
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule,
    PersonnelsRoutingModule,
    TestTechniqueRoutingModule
  ]
})
export class PersonnelsModule { }
