import { NgModule,CUSTOM_ELEMENTS_SCHEMA  } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { RegisterComponent } from './Authentification/register/register.component';
import { LoginComponent } from './Authentification/login/login.component';
import { HeaderComponent } from './Layout/header/header.component';
import { FooterComponent } from './Layout/footer/footer.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SharedModule } from './shared/shared.module';
import { AddformaComponent } from './components/formaexternes/addforma/addforma.component';
import { ForgetpasswordComponent } from './Authentification/forgetpassword/forgetpassword.component';

import { AddcoutComponent } from './components/CoutFormation/addcout/addcout.component';

import { FormalistingComponent } from './components/formaexternes/formalisting/formalisting.component';
import { EditcoutComponent } from './components/CoutFormation/editcout/editcout.component';
import { CoutlistingComponent } from './components/CoutFormation/coutlisting/coutlisting.component';
import { EditformaComponent } from './components/formaexternes/editforma/editforma.component';
import { AddformainterneComponent } from './components/FormationInternes/addformainterne/addformainterne.component';
import { EditformainterneComponent } from './components/FormationInternes/editformainterne/editformainterne.component';
import { ListingformainterneComponent } from './components/FormationInternes/listingformainterne/listingformainterne.component';
import { EditdevjuniorComponent } from './components/ProfilPoste/ProfilDev/DevJunior/editdevjunior/editdevjunior.component';
import { ListingdevjuniorComponent } from './components/ProfilPoste/ProfilDev/DevJunior/listingdevjunior/listingdevjunior.component';
import { ListingdevcComponent } from './components/ProfilPoste/ProfilDev/DevConfirme/listingdevc/listingdevc.component';
import { EditdevcComponent } from './components/ProfilPoste/ProfilDev/DevConfirme/editdevc/editdevc.component';
import { EditdevsComponent } from './components/ProfilPoste/ProfilDev/DevSenior/editdevs/editdevs.component';
import { ListingdevsComponent } from './components/ProfilPoste/ProfilDev/DevSenior/listingdevs/listingdevs.component';
import { EditdevtComponent } from './components/ProfilPoste/ProfilDev/DevTeckLead/editdevt/editdevt.component';
import { ListingdevtComponent } from './components/ProfilPoste/ProfilDev/DevTeckLead/listingdevt/listingdevt.component';
import { HomeComponent } from './Home/home/home.component';
import { SidebarComponent } from './Layout/sidebar/sidebar.component';
import { EditficherenComponent } from './components/Fiche de rensignement/editficheren/editficheren.component';
import { ListingficherenComponent } from './components/Fiche de rensignement/listingficheren/listingficheren.component';
import { AddficherenComponent } from './components/Fiche de rensignement/addficheren/addficheren.component';
import { PublicComponent } from './public/public.component';
import { AddProfilDePosteComponent } from './components/GérerLesAxes/CreerUnProfilDePoste/add-profil-de-poste/add-profil-de-poste.component';
import { DetailProfileComponent } from './components/ProfilPostee/detail-profile/detail-profile.component';
import { EditProfilComponent } from './components/ProfilPostee/edit-profil/edit-profil.component';
import { ListingthemeformaComponent } from './components/GérerLesAxes/Théme de formation/listingthemeforma/listingthemeforma.component';
import { AddthemedeformationComponent } from './components/GérerLesAxes/Théme de formation/addthemedeformation/addthemedeformation.component';
import { EditTestComponent } from './components/FicheDevaluation/TestTechnique/edit-test/edit-test.component';
import { ListingTestComponent } from './components/FicheDevaluation/TestTechnique/listing-test/listing-test.component';
import { DetailTestComponent } from './components/FicheDevaluation/TestTechnique/detail-test/detail-test.component';
import { CommonModule } from '@angular/common';
import { AddTestComponent } from './components/FicheDevaluation/TestTechnique/add-test/add-test.component';
import { ListingprofilposteComponent } from './components/GérerLesAxes/ListeDesProfiles/listingprofilposte/listingprofilposte.component';
import { ListingFicheDevaluComponent } from './components/FicheDevaluation/FicheDevaluationPsy/listing-fiche-devalu/listing-fiche-devalu.component';
import { DetailFicheDevaluComponent } from './components/FicheDevaluation/FicheDevaluationPsy/detail-fiche-devalu/detail-fiche-devalu.component';
import { EditFicheDevaluComponent } from './components/FicheDevaluation/FicheDevaluationPsy/edit-fiche-devalu/edit-fiche-devalu.component';
import { AddFicheDevaluComponent } from './components/FicheDevaluation/FicheDevaluationPsy/add-fiche-devalu/add-fiche-devalu.component';





@NgModule({
  declarations: [
    AppComponent,
    RegisterComponent,
    LoginComponent,
    HeaderComponent,
    FooterComponent,
    AddformaComponent,
    ForgetpasswordComponent,
   
    AddcoutComponent,
    
    FormalistingComponent,
    EditcoutComponent,
    CoutlistingComponent,
    EditformaComponent,
    AddformainterneComponent,
    EditformainterneComponent,
    ListingformainterneComponent,
    EditdevjuniorComponent,
    ListingdevjuniorComponent,
    ListingdevcComponent,
    EditdevcComponent,
    EditdevsComponent,
    ListingdevsComponent,
    EditdevtComponent,
    ListingdevtComponent,
    HomeComponent,
    SidebarComponent,
    EditficherenComponent,
    ListingficherenComponent,
    AddficherenComponent,
    PublicComponent,
    AddProfilDePosteComponent,
    DetailProfileComponent,
    EditProfilComponent,
    ListingthemeformaComponent,
    AddthemedeformationComponent,
    EditTestComponent,
    ListingTestComponent,
    DetailTestComponent,
    AddTestComponent,
    ListingprofilposteComponent,
    ListingFicheDevaluComponent,
    DetailFicheDevaluComponent,
    EditFicheDevaluComponent,
    AddFicheDevaluComponent
    
   
   
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule
    

  ],
  providers: [],
  bootstrap: [AppComponent],
  schemas: [
    CUSTOM_ELEMENTS_SCHEMA   ]
})
export class AppModule { }
