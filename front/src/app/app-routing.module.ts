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
import { EditdevcComponent } from './components/ProfilPoste/ProfilDev/DevConfirme/editdevc/editdevc.component';
import { ListingdevcComponent } from './components/ProfilPoste/ProfilDev/DevConfirme/listingdevc/listingdevc.component';
import { EditdevjuniorComponent } from './components/ProfilPoste/ProfilDev/DevJunior/editdevjunior/editdevjunior.component';
import { ListingdevjuniorComponent } from './components/ProfilPoste/ProfilDev/DevJunior/listingdevjunior/listingdevjunior.component';
import { EditdevsComponent } from './components/ProfilPoste/ProfilDev/DevSenior/editdevs/editdevs.component';
import { ListingdevsComponent } from './components/ProfilPoste/ProfilDev/DevSenior/listingdevs/listingdevs.component';
import { EditdevtComponent } from './components/ProfilPoste/ProfilDev/DevTeckLead/editdevt/editdevt.component';
import { ListingdevtComponent } from './components/ProfilPoste/ProfilDev/DevTeckLead/listingdevt/listingdevt.component';
import { HomeComponent } from './Home/home/home.component';
import { FooterComponent } from './Layout/footer/footer.component';
import { HeaderComponent } from './Layout/header/header.component';

const routes: Routes = [
  { path: '', component: LoginComponent},
  { path: 'home', component: HomeComponent},
  { path: 'footer', component: FooterComponent},
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
  { path: 'listingdc', component: ListingdevcComponent},
  { path: 'editprofilpdc/:id', component: EditdevcComponent},
  { path: 'listingds', component: ListingdevsComponent},
  { path: 'editprofilpds/:id', component: EditdevsComponent},
  { path: 'listingdt', component: ListingdevtComponent},
  { path: 'editprofilpdt/:id', component: EditdevtComponent},





  

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
