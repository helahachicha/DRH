import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ForgetpasswordComponent } from './Authentification/forgetpassword/forgetpassword.component';
import { LoginComponent } from './Authentification/login/login.component';
import { AddcoutComponent } from './components/CoutFormation/addcout/addcout.component';
import { AddformaComponent } from './components/formaexternes/addforma/addforma.component';
import { EditformaComponent } from './components/formaexternes/editforma/editforma.component';
import { FormalistingComponent } from './components/formaexternes/formalisting/formalisting.component';
import { HeaderComponent } from './Layout/header/header.component';

const routes: Routes = [
  { path: '', component: LoginComponent},
  { path: 'header', component: HeaderComponent },
  { path: 'addforma', component: AddformaComponent },
  { path: 'forgetpass', component: ForgetpasswordComponent },
  { path: 'editforma', component: EditformaComponent},
  { path: 'listingforma', component: FormalistingComponent },
  { path: 'addcout', component: AddcoutComponent},
  

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
