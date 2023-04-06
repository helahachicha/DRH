import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ForgetpasswordComponent } from './forgetpassword/forgetpassword.component';
import { LoginComponent } from './login/login.component';

const routes: Routes = [
  { path: 'forgetpass', component: ForgetpasswordComponent },
  { path: '', component: LoginComponent},

];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AuthentificationRoutingModule { }
