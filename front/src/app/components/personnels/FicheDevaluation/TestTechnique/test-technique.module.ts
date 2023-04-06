import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { TestTechniqueRoutingModule } from './test-technique-routing.module';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from 'src/app/shared/shared.module';
import { AddTestComponent } from './add-test/add-test.component';
import { DetailTestComponent } from './detail-test/detail-test.component';
import { EditTestComponent } from './edit-test/edit-test.component';


@NgModule({
  declarations: [AddTestComponent,DetailTestComponent,EditTestComponent],
  imports: [
    CommonModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule,
    TestTechniqueRoutingModule
  ]
})
export class TestTechniqueModule { }
