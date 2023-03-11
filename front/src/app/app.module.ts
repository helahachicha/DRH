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
import { GetformaComponent } from './components/formaexternes/getforma/getforma.component';
import { EditformaComponent } from './components/formaexternes/editforma/editforma.component';




@NgModule({
  declarations: [
    AppComponent,
    RegisterComponent,
    LoginComponent,
    HeaderComponent,
    FooterComponent,
    AddformaComponent,
    ForgetpasswordComponent,
    GetformaComponent,
    EditformaComponent,
    
   
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
