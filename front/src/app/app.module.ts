import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
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
import { ForgetpasswordComponent } from './Authentification/forgetpassword/forgetpassword.component';
import { HomeComponent } from './Home/home/home.component';
import { SidebarComponent } from './Layout/sidebar/sidebar.component';
import { PublicComponent } from './public/public.component';
import { CommonModule } from '@angular/common';
import { DashboardComponent } from './components/dashboard/dashboard.component';
import { FormationsModule } from './components/formations/formations.module';
import { GérerLesAxesModule } from './components/GérerLesAxes/gérer-les-axes.module';
import { PersonnelsModule } from './components/personnels/personnels.module';
import { ProfilPosteeModule } from './components/ProfilPostee/profil-postee.module';
import { FicheDevaluationModule } from './components/personnels/FicheDevaluation/fiche-devaluation.module';
import { TestTechniqueModule } from './components/personnels/FicheDevaluation/TestTechnique/test-technique.module';
import { FicheDevaluationPsyModule } from './components/personnels/FicheDevaluation/FicheDevaluationPsy/fiche-devaluation-psy.module';
import { FicheDeRensignementModule } from './components/personnels/Fiche de rensignement/fiche-de-rensignement.module';
import { ThémeDeFormationModule } from './components/GérerLesAxes/Théme de formation/théme-de-formation.module';
import { FormationInternesModule } from './components/formations/FormationInternes/formation-internes.module';
import { FormaexternesModule } from './components/formations/formaexternes/formaexternes.module';
import { CoutFormationModule } from './components/formations/CoutFormation/cout-formation.module';
import { AuthentificationModule } from './Authentification/authentification.module';






@NgModule({
  declarations: [
    AppComponent,   
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    SidebarComponent,
    PublicComponent,
    DashboardComponent,





  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    CommonModule,
    FormationsModule,
    GérerLesAxesModule,
    PersonnelsModule,
    ProfilPosteeModule,
    FicheDevaluationModule,
    TestTechniqueModule,
    FicheDevaluationPsyModule,
    FicheDeRensignementModule,
    ThémeDeFormationModule,
    FormationInternesModule,
    FormaexternesModule,
    CoutFormationModule,
    AuthentificationModule,
  

  ],
  providers: [],
  bootstrap: [AppComponent],
  schemas: [
    CUSTOM_ELEMENTS_SCHEMA]
})
export class AppModule { }
