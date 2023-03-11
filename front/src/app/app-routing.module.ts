import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ForgetpasswordComponent } from './Authentification/forgetpassword/forgetpassword.component';
import { LoginComponent } from './Authentification/login/login.component';
import { AddformaComponent } from './components/formaexternes/addforma/addforma.component';
import { HeaderComponent } from './Layout/header/header.component';

const routes: Routes = [
  { path: '', component: LoginComponent},
  { path: 'header', component: HeaderComponent },
  { path: 'fexternes', component: AddformaComponent },
  { path: 'forgetpass', component: ForgetpasswordComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
