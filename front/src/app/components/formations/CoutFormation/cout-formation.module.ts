import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CoutFormationRoutingModule } from './cout-formation-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';
import { AddcoutComponent } from './addcout/addcout.component';
import { CoutlistingComponent } from './coutlisting/coutlisting.component';
import { EditcoutComponent } from './editcout/editcout.component';

@NgModule({
  declarations: [AddcoutComponent, CoutlistingComponent, EditcoutComponent],
  imports: [
    CommonModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CoutFormationRoutingModule
  ]
})
export class CoutFormationModule { }
