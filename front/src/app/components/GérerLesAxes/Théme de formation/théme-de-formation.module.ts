import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ThémeDeFormationRoutingModule } from './théme-de-formation-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';
import { AddthemedeformationComponent } from './addthemedeformation/addthemedeformation.component';
import { ListingthemeformaComponent } from './listingthemeforma/listingthemeforma.component';


@NgModule({
  declarations: [AddthemedeformationComponent,ListingthemeformaComponent],
  imports: [
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule,
    ThémeDeFormationRoutingModule
  ]
})
export class ThémeDeFormationModule { }
