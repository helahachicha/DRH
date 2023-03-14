import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ForgetpasswordComponent } from './Authentification/forgetpassword/forgetpassword.component';
import { LoginComponent } from './Authentification/login/login.component';
import { AddcoutComponent } from './components/CoutFormation/addcout/addcout.component';
import { CoutlistingComponent } from './components/CoutFormation/coutlisting/coutlisting.component';
import { EditcoutComponent } from './components/CoutFormation/editcout/editcout.component';
import { AddformaComponent } from './components/formaexternes/addforma/addforma.component';
import { EditformaComponent } from './components/formaexternes/editforma/editforma.component';
import { FormalistingComponent } from './components/formaexternes/formalisting/formalisting.component';
import { AddformainterneComponent } from './components/FormationInternes/addformainterne/addformainterne.component';
import { EditformainterneComponent } from './components/FormationInternes/editformainterne/editformainterne.component';
import { ListingformainterneComponent } from './components/FormationInternes/listingformainterne/listingformainterne.component';
import { EditdevjuniorComponent } from './components/ProfilPoste/ProfilDev/DevJunior/editdevjunior/editdevjunior.component';
import { ListingdevjuniorComponent } from './components/ProfilPoste/ProfilDev/DevJunior/listingdevjunior/listingdevjunior.component';
import { HeaderComponent } from './Layout/header/header.component';

const routes: Routes = [
  { path: '', component: LoginComponent},
  { path: 'header', component: HeaderComponent },
  { path: 'addforma', component: AddformaComponent },
  { path: 'forgetpass', component: ForgetpasswordComponent },
  { path: 'editforma/:id', component: EditformaComponent},
  { path: 'listingforma', component: FormalistingComponent },
  { path: 'addcout', component: AddcoutComponent},
  { path: 'coutlisting', component: CoutlistingComponent},
  { path: 'editcout/:id', component: EditcoutComponent},
  { path: 'addformainterne', component: AddformainterneComponent},
  { path: 'formainternelisting', component: ListingformainterneComponent},
  { path: 'editformainterne/:id', component: EditformainterneComponent},
  { path: 'listingdj', component: ListingdevjuniorComponent},
  { path: 'editprofilpdj/:id', component: EditdevjuniorComponent},

  

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
