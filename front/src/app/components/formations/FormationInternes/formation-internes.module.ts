import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { FormationInternesRoutingModule } from './formation-internes-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';
import { AddformainterneComponent } from './addformainterne/addformainterne.component';
import { EditformainterneComponent } from './editformainterne/editformainterne.component';
import { ListingformainterneComponent } from './listingformainterne/listingformainterne.component';

@NgModule({
  declarations: [ListingformainterneComponent,EditformainterneComponent,AddformainterneComponent],
  imports: [
    CommonModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    FormationInternesRoutingModule
  ]
})
export class FormationInternesModule { }
