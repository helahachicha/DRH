import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListingTestComponent } from './listing-test/listing-test.component';
import { AddTestComponent } from './add-test/add-test.component';
import { DetailTestComponent } from './detail-test/detail-test.component';
import { EditTestComponent } from './edit-test/edit-test.component';

const routes: Routes = [
  { path: '', component:ListingTestComponent },
  { path: 'detail-test/:id', component:DetailTestComponent },
  { path: 'add-test', component:AddTestComponent },
  { path: 'edit-test/:id', component:EditTestComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class TestTechniqueRoutingModule { }
