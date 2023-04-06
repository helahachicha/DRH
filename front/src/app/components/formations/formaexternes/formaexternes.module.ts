import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { FormaexternesRoutingModule } from './formaexternes-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';
import { FormalistingComponent } from './formalisting/formalisting.component';
import { AddformaComponent } from './addforma/addforma.component';
import { EditformaComponent } from './editforma/editforma.component';

@NgModule({
  declarations: [EditformaComponent,AddformaComponent,FormalistingComponent],
  imports: [
    CommonModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    FormaexternesRoutingModule
  ]
})
export class FormaexternesModule { }
