import { NgModule } from '@angular/core';
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
    
   
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
    SharedModule,
    

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
